<?php 

include_once'variables.php';
$productID="";
if(isset($_GET['id'])){
	$productID=$_GET['id'];
}

$sql="UPDATE `product` SET `active`=0 WHERE `ProductID`='$productID'";
mysqli_query($con,$sql);
mysqli_close($con);

 ?>