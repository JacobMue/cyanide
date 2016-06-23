<?php 
session_start();
include_once'variables.php';
$customerID="";
if(isset($_SESSION['fName'])){
	$customerID=$_SESSION['CustomerID'];
}
if(isset($_POST['porder'])){
$shipamt="";
if(isset($_GET['del'])){
	$shipamt=$_GET['del'];
}
$amount="";
if(isset($_GET['amt'])){
	$amount=$_GET['amt'];
}
$add=$_POST['shipAdd'];
$paymethod=$_POST['payment'];
$date=date("Y-m-d");
$sqlo="INSERT INTO `customerorder` VALUES (NULL, '$customerID', '$date', '$amount', '$add', '$shipamt','$paymethod', '1');";
$quer=mysqli_query($con,$sqlo);
$sql="DELETE FROM `cart` WHERE `CustomerID`='$customerID'";
$query=mysqli_query($con,$sql);

header("Location:checkout.php?po=1");;

mysqli_close($con);
}
?>
