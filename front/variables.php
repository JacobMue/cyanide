<?php
$environment=$_SERVER['SERVER_NAME'];
$server="localhost";
$base_url="";
if($environment=="localhost"){
  $user="root";
  $password="";
  $database="trial";  
  $base_url=$environment."/".$database;

}
else 
{
   $user="83823";
   $password="ThasTup8";
   $database="db83823";
   $base_url=$environment."/".$user;
    
}


$con=mysqli_connect($server,$user,$password,$database) or die("NO server and database");


?>
