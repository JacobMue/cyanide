<!-- header_top -->
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="contact.php">Contact</a></li>|
					<li><a href="#">Delivery information</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> Call ME : +254 702 381 228</h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>

<!-- header -->
<div class="header_bg">
	<div class="container">
		<div class="header">
			<div class="head-t">
		<div class="logo">
			<a href="index.php">
				<img src="../images/logo.jpg" class="img-responsive" alt=""/>
			 </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				<div class="log">
					<div class="login" >
						<div id="loginContainer"><a href="login.php" id="loginButton"><span>Login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm" method="POST" action="index.php">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Email Address</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" name="Submit"value="Sign in">
						            	</fieldset>
						            <span><a href="#">Forgot your password?</a></span>
								</form>
								
		<?php
			include_once'variables.php';
			//mysqli_select_db("cyanide");

			if ( isset( $_POST['Submit'] ) ) {
			$email=$_POST['email'];
			$password=$_POST['password'];
			$password=md5($password);
			$query="SELECT * FROM Administrators WHERE `Email`='$email'";
			$result=mysqli_query($con,$query);
			$row=mysqli_num_rows($result);

			if($row==1){
				while($re=mysqli_fetch_assoc($result)){
					$dbpass=$re['Password'];
					$fname=$re['FirstName'];
					$lname=$re['LastName'];
					$image=$re['image'];
				}
				if($dbpass==$password){
					$_SESSION['firstName']=$fname;
					$_SESSION['lastName']=$lname;
					$_SESSION['image']=$image;
					header('Location:../back/index.php');
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
							</div>
						</div>
					</div>
				</div>
				<div class="reg">
					<a href="register.php">REGISTER</a>
				</div>
			<div class="cart box_1">
				<a href="checkout.php">
					<h3> <span class="simpleCart_total">KES 0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="../images/bag.png" alt=""></h3>
				</a>	
				<p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>
				<div class="clearfix"> </div>
			</div>
			<div class="create_btn">
				<a href="checkout.php">CHECKOUT</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="search...">
				<input type="submit" value="">
			</form>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
			</div>
		</div>

		<!-- the navbar  -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12" id="nav_container">
						<a href="index.php">HOME</a>
						<a href="">NEW ARRIVALS</a>
						<a href="viewProduct.php?category=Men">MEN</a>
						<a href="viewProduct.php?category=Women">WOMEN</a>
						<a href="viewProduct.php?category=Kids">KIDS</a>
				</div>
			</div>
		<!-- the end of the navbar -->
	</div>
</div>