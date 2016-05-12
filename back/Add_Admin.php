<?php include_once'./iframeImporter.php'; ?>

<form class="form-horizontal" name="addAdministrator" method="POST" action="Add_Admin.php" enctype="multipart/form-data">

  <div class="control-group">
  		<label class="control-label">First Name</label>
  		<div class="controls">
  			<input type="text" name="firstName" placeholder="Barack">
  		</div>
  </div>	
  <div class="control-group">
  		<label class="control-label">Last Name</label>
  		<div class="controls">
  			<input type="text" name="lastName" placeholder="Obama">
  		</div>
  </div>	
  <div class="control-group">
    <label class="control-label" for="inputEmail">Email</label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Email" name="email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Password" name="password">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Retype Password</label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Confirm Password" name="repassword">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="control-label">Telephone Number</label>
       <div class="controls">
        <input type="number" placeholder="Ignore +254" name="phone"> 
      </div>
    </div>
  </div>
  <div class="control-group">
  		<label class="control-label">
  			Pick a profile picture
  		</label>
  		<div class="controls">
  			<input type="file" name="images">
  		</div>
		<button type="submit" name="Submit" class="btn">Add Administrator</button>
  </div>
</form>

<?php
include_once 'database.php';
if ( isset( $_POST['Submit'] ) ) {
$fname=$_POST['firstName'];
$lname=$_POST['lastName'];
$email=$_POST['email'];
$fpass=$_POST['password'];
$spass=$_POST['repassword'];
$phone=$_POST['phone'];
$password="";

if($fpass==$spass){
	if($fpass!=null){
		$password=md5($fpass);
	}
}

    $name = $_FILES['images']['name']; 
    $extension = strtolower(substr($name, strpos($name, '.') + 1));
    $size = $_FILES['images']['size'];
    $type = $_FILES['images']['type'];
    $temp_name = $_FILES['images']['tmp_name'];


    
    //moving file to specified location
    if($extension=='jpg'||$extension=='png'){
    $location = '../images/';
    if(move_uploaded_file($temp_name, $location.$name)){

        $path=$location.$name;
        $addAdmin="INSERT INTO `cyanide`.`Administrators` (`AdmID`, `FirstName`, `LastName`, `Email`, `Password`, `Phone`, `image`, `lastLogin`) VALUES (NULL,'$fname', '$lname', '$email', '$password', '$phone', '$path', null);";
        mysql_query($addAdmin);

        echo "<script>";
        echo "alert(' $fname $lname has been added as an Administrator ')";
        echo "</script>";
    }else{
    	echo "<script>";
        echo "alert(' There is a problem with the image uploading')";
        echo "</script>";
    }
}else{
		echo "<script>";
        echo "alert(' $fname get a real image ')";
        echo "</script>";
}
mysql_close();
}

?>









