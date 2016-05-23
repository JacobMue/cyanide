<?php
$environment=$_SERVER['SERVER_NAME'];
$server="localhost";
if($environment=="localhost"){
  $user="root";
  $password="";
  $database="cyanide";  
}
else 
{
   $user="83823";
   $password="ThasTup8";
   $database="db83823";
    
}


$con=mysqli_connect($server,$user,$password,$database) or die("NO server and database");


?>
