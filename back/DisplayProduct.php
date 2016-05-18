<?php  include'./iframeImporter.php';  
$category="";
if(isset($_GET['category'])){
	$category=$_GET['category'];
}
$sql="SELECT * FROM `product` WHERE `CategoryName`='$category'";
$query=$con->query($sql);
$row=mysqli_num_rows($query);

if($row==0){
	echo"<script>";
	echo "alert('There are no products in this category');";
	echo "</script>";
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



?>









