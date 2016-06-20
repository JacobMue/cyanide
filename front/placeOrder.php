<?php 
//session_start();
include_once'variables.php';
$customerID="";
if(isset($_SESSION['fName'])){
	$customerID=$_SESSION['CustomerID'];
}

// $sqlOrder="SELECT * FROM `cart` WHERE `CustomerID`='$customerID'";
// $queryOrder=mysqli_query($con,$sqlOrder);
// $numOrder=mysqli_num_rows($queryOrder);
// if($numOrder!=0){
// 	while ($rs=mysqli_fetch_assoc($queryOrder)) {
// 		$
// 	}
// }
$sql="DELETE FROM `cart` WHERE `CustomerID`='$customerID'";
$query=mysqli_query($con,$sql);

header("Location:index.php?po=1");;

mysqli_close($con);
?>
