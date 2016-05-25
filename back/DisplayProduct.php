<?php  include'./iframeImporter.php';  
$category="";
if(isset($_GET['category'])){
	$category=$_GET['category'];
}

$con=mysqli_connect("localhost","root","","cyanide");
if($con->connect_error){
	echo $con->connect_error;
}else{

$sql="SELECT * FROM `product` WHERE `CategoryName`='$category' AND `active`=1";
$query=$con->query($sql);
$row=mysqli_num_rows($query);

if($row==0){
	echo "There are no products in this category";
}
else{
	while ($rs=mysqli_fetch_assoc($query)) {
		$image=$rs['Picture'];
		$id=$rs['ProductID'];
		echo '<div id="ProductDisplay">';
		echo "<img src='$image' class='img-rounded'>";
		echo "<a href='./ViewProduct.php?id={$id}'><button class='btn btn-primary'>View</button></a>";
		echo "<a href='./ModifyProduct.php?id={$id}'><button class='btn btn-info'>Modify</button></a>";
		echo '</div>';

	}
}
$con->close();	

}

?>









