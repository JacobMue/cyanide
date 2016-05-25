<?php 


include_once'variables.php';

$productID="";
if(isset($_GET['id'])){
	$productID=$_GET['id'];
}

$sql="DELETE FROM `product` WHERE `ProductID`='$productID';";
$query=mysqli_query($con,$sql);
mysqli_close($con);
header('Location:Trash.php');


?>