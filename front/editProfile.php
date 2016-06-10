<?php 
include'variables.php';

$orpass="";
$customerID=0;
$message="";
if(isset($_GET['id'])){
 	$customerID=$_GET['id'];
}
if(isset($_GET['pass'])){
	$orpass=$_GET['pass'];
}

if(isset($_POST['editsubmit'])){
	$newfname=$_POST['newfname'];
	$newlname=$_POST['newlname'];
	$newphone=$_POST['newphone'];
	$password=$_POST['password'];
	$conpass=$_POST['confirmpassword'];
	$oldpass=$_POST['oldpassword'];
	if($oldpass!=""){
		if($orpass==md5($oldpass)){
			if($password==$conpass){
				$pass=md5($password);
				$sql="UPDATE `customer` SET `FirstName` = '$newfname', `LastName` = '$newlname', `Password` = '$pass', `        Telephone` = '$newphone' WHERE `CustomerID` = '$customerID';";
		        $query=mysqli_query($con,$sql);
		        $message="Changes saved successful";
		        header("Location:index.php");
		        echo $message;

		    }
		}
	}else{

		$message="Passwords do not match";
	}
	mysqli_close($con);
}
echo "<script>";
echo alert($message);
echo "</script>";
?>