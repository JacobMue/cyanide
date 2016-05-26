<html>
    <?php include 'header.php';?>
    <?php include 'title.php';?>
   <!-- Exiting User -->
   <div class="registration_left">
		<h2>Existing User</h2>
		 <div class="registration_form">
		 <!-- Form -->
         <!--experimenting-->
			<form id="registration_form" action="db/users.php" method="post">
				<div>
					<label>
						<input placeholder="email:" type="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input placeholder="password" type="password" tabindex="4" required>
					</label>
				</div>						
				<div>
					<input type="submit" value="sign in" id="register-submit">
				</div>
				<div class="forget">
					<a href="#">forgot your password</a>
				</div>
			</form>
			<!-- /Form -->
			<!--Experimental code-->
			<?php
				include 'db/init.php';
				
				if (empty ($_POST)===false)
				{
					$username=$_POST['username'];
					$password=$_POST['password'];
					
					echo $username;
				}	
			?>
			<!-- End of experimenatl code-->
			</div>
    </div>
    
</html>

