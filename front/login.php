<html>
    <?php include 'title.php';
    include 'header.php';
	if ( isset( $_POST['submit'] ) ) 
		{

			$fname=$_POST['F_Name'];
			$lname=$_POST['L_Name'];
			$email=$_POST['Uemail'];
			$email=strtolower($email);
			$fpass=$_POST['fpass'];
			$spass=$_POST['spass'];
			$title=$_POST['title'];
			if($spass==$fpass){
			$fpass=md5($fpass);
		
			$phone=$_POST['UPhone'];
			
			$sql="INSERT INTO customer (FirstName, LastName, Email, Password, Telephone, TitleID, active) Values ('$fname','$lname','$email','$fpass','$phone','$title','1')";
			$query=mysqli_query($con,$sql);
		}else{
echo"<script>";
echo "alert('Password dont match')";
echo "</script>";
		}
		
		}


    ?>
<style type="text/css">
.registration_form input,span{
	float: left;
	width: 45%;
	margin-right: 1%;
}
</style>
   <!-- Exiting User -->
   <div class="registration_left" onmouseenter="loginfocused()" onmouseout="loginfocused()">
		<h2>Existing User</h2>
		 <div class="registration_form">
		 <!-- Form -->
         <!--experimenting-->
			<form id="registration_form" style="margin-left:0px;" action="login.php" method="post">
				<div>
					<label>
						<input style="width:50%;margin-bottom:10px;" id="loginemail" placeholder="email:" type="email" name="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input style="width:50%;margin-bottom:15px;" id="loginpassword" placeholder="password" type="password" name="password" tabindex="4" required>
					</label>
				</div>						
				<div>
					<button onclick="loginHome()" style="width:50%;" class="btn btn-success" type="submit" id="register-submit" name="SUbmit">Sign In</button>
				</div>
				<div class="forget" style="width:50%;">
					<a href="#">forgot your password</a>
				</div>
			</form>
			<!-- /Form -->
			<!--Experimental code-->
			<?php
				
				if ( isset( $_POST['SUbmit'] ) ) {
			$email=$_POST['email'];
			$email=strtolower($email);
			$password=$_POST['password'];
			$password=md5($password);
			$query="SELECT * FROM `customer` WHERE `Email`='$email'";
			$result=mysqli_query($con,$query);
			$row=mysqli_num_rows($result);

			if($row!=0){
				while($re=mysqli_fetch_assoc($result)){
					$dbpass=$re['Password'];
					$fname=$re['FirstName'];
					$customerID=$re['CustomerID'];
				}
				if($dbpass==$password){
					$_SESSION['fName']=$fname;
					$_SESSION['CustomerID']=$customerID;
				}else{
					echo "<script>";
					echo "alert('Wrong Password')";
					echo"</script>";
				}
			}else{
				echo "<script>";
				echo "alert('Unknown Email Address ')";
				echo"</script>";
			}
			mysqli_close($con);
			//close the isset
			}
			?>
			<!-- End of experimenatl code-->
			</div>
    </div>
    
</html>

