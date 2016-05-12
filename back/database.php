<?php

// $con=mysqli_connect("localhost","root","","cyanide");

// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }

  mysql_connect("localhost","root","") or die("Cannot connect to the server");
  mysql_select_db("cyanide") or die("NO database found");

?>