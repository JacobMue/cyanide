<?php 
include_once'variables.php';
$productID="";
$customerID=1;
if(isset($_GET['id'])){
	$productID=$_GET['id'];
}

$sql="DELETE FROM `cart` WHERE `ProductID`='$productID' AND `CustomerID`='$customerID'";
mysqli_query($con,$sql);
header('Location:checkout.php');
mysqli_close($con);
?>


