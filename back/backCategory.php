<?php 
include_once'variables.php';

$type="";
if(isset($_GET['type'])){
	$type=$_GET['type'];
}
echo "<script>alert(".$type.");</script>";


?>






