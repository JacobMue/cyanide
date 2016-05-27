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
					header("Location:index.php");
		}else{
echo"<script>";
echo "alert('Password dont match')";
echo "</script>";
		}
		
		}


    ?>

   <!-- Exiting User -->
   <div class="registration_left">
		<h2>Existing User</h2>
		 <div class="registration_form">
		 <!-- Form -->
         <!--experimenting-->
			<form id="registration_form" action="login.php" method="post">
				<div>
					<label>
						<input placeholder="email:" type="email" name="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password" name="password" tabindex="4" required>
					</label>
				</div>						
				<div>
					<input type="submit" value="sign in" id="register-submit" name="SUbmit">
				</div>
				<div class="forget">
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

