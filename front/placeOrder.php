<?php 
session_start();
include_once'variables.php';
$customerID="";
if(isset($_SESSION['fName'])){
	$customerID=$_SESSION['CustomerID'];
}
if(isset)
$amount=$_POST['total'];
$add=$_POST['shipAdd'];
$shipamt=$_POST['shipbilll'];
$paymethod=$_POST['payment'];
$sqlOrder="SELECT * FROM `cart` WHERE `CustomerID`='$customerID'";
$queryOrder=mysqli_query($con,$sqlOrder);
$numOrder=mysqli_num_rows($queryOrder);
if($numOrder!=0){
	while ($rs=mysqli_fetch_assoc($queryOrder)) {
		$productID=$rs['ProductID'];
		$date=date("Y-m-d");
		$sqlo="INSERT INTO `customerorder`VALUES (NULL, '$CustomerID', '$date', '$amount', '$add', '$shipamt', '$paymethod', '1');";
		die($sqlo);
	}
}
$sql="DELETE FROM `cart` WHERE `CustomerID`='$customerID'";
$query=mysqli_query($con,$sql);

header("Location:index.php?po=1");;

mysqli_close($con);
?>
