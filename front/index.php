<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Botik Online Clothing Store</title>
<link href="../css/front/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="../js/front/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="../css/front/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="../assets/css/front/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="../js/front/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="../js/front/menu_jquery.js"></script>
<script src="../js/front/simpleCart.min.js"> </script>
</head>
<body>
<!-- header_top -->
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">help</a></li>|
					<li><a href="contact.html">Contact</a></li>|
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
			<a href="index.html">
				<img src="../images/logo.jpg" class="img-responsive" alt=""/>
			 </a>
		</div>
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				<div class="log">
					<div class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
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
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						            <span><a href="#">Forgot your password?</a></span>
								</form>
								<?php
			mysql_connect("localhost","root","") or die("NO server");
			mysql_select_db("cyanide");

			if ( isset( $_POST['Submit'] ) ) {
			$email=$_POST['email'];
			$password=$_POST['password'];
			$password=md5($password);
			$query="SELECT * FROM Administrators WHERE `Email`='$email'";
			$result=mysql_query($query);
			$row=mysql_num_rows($result);

			if($row==1){
				while($re=mysql_fetch_assoc($result)){
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
			mysql_close();
			//close the isset
			}
		?>
							</div>
						</div>
					</div>
				</div>
				<div class="reg">
					<a href="register.html">REGISTER</a>
				</div>
			<div class="cart box_1">
				<a href="checkout.html">
					<h3> <span class="simpleCart_total">KSH 0.00</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> items)<img src="../images/bag.png" alt=""></h3>
				</a>	
				<p><a href="javascript:;" class="simpleCart_empty">(empty card)</a></p>
				<div class="clearfix"> </div>
			</div>
			<div class="create_btn">
				<a href="checkout.html">CHECKOUT</a>
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
		<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li class="active grid"><a class="color1" href="index.html">Home</a></li>
			<li class="grid"><a class="color2" href="#">new arrivals</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			<li><a class="color4" href="#">TUXEDO</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
				<li><a class="color5" href="#">SWEATER</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color6" href="#">SHOES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color7" href="#">GLASSES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">Pools&Tees</a></li>
									<li><a href="women.html">shirts</a></li>
									<li><a href="women.html">shorts</a></li>
									<li><a href="women.html">twinsets</a></li>
									<li><a href="women.html">kurts</a></li>
									<li><a href="women.html">jackets</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">Handbag</a></li>
									<li><a href="women.html">Slingbags</a></li>
									<li><a href="women.html">Clutches</a></li>
									<li><a href="women.html">Totes</a></li>
									<li><a href="women.html">Wallets</a></li>
									<li><a href="women.html">Laptopbags</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">Belts</a></li>
									<li><a href="women.html">Pens</a></li>
									<li><a href="women.html">Eyeglasses</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">Watches</a></li>
									<li><a href="women.html">Jewellery</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
			
				<li><a class="color8" href="#">T-SHIRT</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color9" href="#">WATCHES</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Clothing</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>kids</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Bags</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="#">login</a></li>
									<li><a href="register.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Accessories</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Footwear</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
		 </ul> 
	</div>
</div>
</div>
<div class="arriv">
	<div class="container">
		<div class="arriv-top">
			<div class="col-md-6 arriv-left">
				<img src="../images/1.jpg" class="img-responsive" alt="">
				<div class="arriv-info">
					<h3>NEW ARRIVALS</h3>
					<p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
					<div class="crt-btn">
						<a href="details.html">TAKE A LOOK</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 arriv-right">
				<img src="../images/2.jpg" class="img-responsive" alt="">
				<div class="arriv-info">
					<h3>TUXEDO</h3>
					<p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
					<div class="crt-btn">
						<a href="details.html">SHOP NOW</a>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-bottm">
			<div class="col-md-8 arriv-left1">
				<img src="../images/3.jpg" class="img-responsive" alt="">
				<div class="arriv-info1">
					<h3>SWEATER</h3>
					<p>REVIVE YOUR WARDROBE WITH CHIC KNITS</p>
					<div class="crt-btn">
						<a href="details.html">SHOP NOW</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 arriv-right1">
				<img src="../images/4.jpg" class="img-responsive" alt="">
				<div class="arriv-info2">
					<a href="details.html"><h3>Trekking Shoes<i class="ars"></i></h3></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="arriv-las">
			<div class="col-md-4 arriv-left2">
				<img src="../images/5.jpg" class="img-responsive" alt="">
				<div class="arriv-info2">
					<a href="details.html"><h3>Casual Glasses<i class="ars"></i></h3></a>
				</div>
			</div>
			<div class="col-md-4 arriv-middle">
				<img src="../images/6.jpg" class="img-responsive" alt="">
				<div class="arriv-info3">
					<h3>FRESH LOOK T-SHIRT</h3>
					<div class="crt-btn">
						<a href="details.html">SHOP NOW</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 arriv-right2">
				<img src="../images/7.jpg" class="img-responsive" alt="">
				<div class="arriv-info2">
					<a href="details.html"><h3>Elegant Watches<i class="ars"></i></h3></a>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="special">
	<div class="container">
		<h3>Special Offers</h3>
		<div class="specia-top">
			<ul class="grid_2">
		<li>
				<a href="details.html"><img src="../images/8.jpg" class="img-responsive" alt=""></a>
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h5>Lorem ipsum dolor</h5>
					<div class="item_add"><span class="item_price"><h6>ONLY $40.00</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
				</div>
		</li>
		<li>
				<a href="details.html"><img src="../images/9.jpg" class="img-responsive" alt=""></a>
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h5>Consectetur adipis</h5>
					<div class="item_add"><span class="item_price"><h6>ONLY $60.00</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
			</div>
		</li>
		<li>
				<a href="details.html"><img src="../images/10.jpg" class="img-responsive" alt=""></a>
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h5>Commodo consequat</h5>
					<div class="item_add"><span class="item_price"><h6>ONLY $14.00</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
			</div>
		</li>
		<li>
				<a href="details.html"><img src="../images/11.jpg" class="img-responsive" alt=""></a>
				<div class="special-info grid_1 simpleCart_shelfItem">
					<h5>Voluptate velit</h5>
					<div class="item_add"><span class="item_price"><h6>ONLY $37.00</h6></span></div>
					<div class="item_add"><span class="item_price"><a href="#">add to cart</a></span></div>
				</div>
		</li>
		<div class="clearfix"> </div>
	</ul>
		</div>
	</div>
</div>
<div class="foot-top">
	<div class="container">
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h5>follow us on</h5>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
						<li><a href="#"><i class="pp"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 s-c">
			<div class="stay">
						<div class="stay-left">
							<form>
								<input type="text" placeholder="Enter your email to join our newsletter" required="">
							</form>
						</div>
						<div class="btn-1">
							<form>
								<input type="submit" value="join">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 cust">
			<h4>CUSTOMER CARE</h4>
				<li><a href="#">Help Center</a></li>
				<li><a href="#">FAQ</a></li>
				<li><a href="buy.html">How To Buy</a></li>
				<li><a href="#">Delivery</a></li>
		</div>
		<div class="col-md-2 abt">
			<h4>ABOUT US</h4>
				<li><a href="#">Our Stories</a></li>
				<li><a href="#">Press</a></li>
				<li><a href="#">Career</a></li>
				<li><a href="contact.html">Contact</a></li>
		</div>
		<div class="col-md-2 myac">
			<h4>MY ACCOUNT</h4>
				<li><a href="register.html">Register</a></li>
				<li><a href="#">My Cart</a></li>
				<li><a href="#">Order History</a></li>
				<li><a href="buy.html">Payment</a></li>
		</div>
		<div class="col-md-5 our-st">
			<div class="our-left">
				<h4>OUR STORES</h4>
			</div>
			<div class="our-left1">
				<div class="cr_btn">
					<a href="#">SOLO</a>
				</div>
			</div>
			<div class="our-left1">
				<div class="cr_btn1">
					<a href="#">BOGOR</a>
				</div>
			</div>
			<div class="clearfix"> </div>
				<li><i class="add"> </i>Jl. Haji Muhidin, Blok G no.69</li>
				<li><i class="phone"> </i>025-2839341</li>
				<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
			
		</div>
		<div class="clearfix"> </div>
			<p>Copyrights © 2015 Gretong. All rights reserved</p>
	</div>
</div>
</body>
</html>
