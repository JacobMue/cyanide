<!DOCTYPE HTML>
<html>
<link href="../css/front/bootstrap.css" rel='stylesheet' type='text/css' />
<script type='text/javascript' src="../js/front/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/back/materialize.min.css">
<link href="../css/front/style.css" rel='stylesheet' type='text/css' />
<link href="../css/front/xtncv.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="../css/fonts/font-awesome-4.6.2/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="../css/fonts/font-awesome-4.6.2/css/font-awesome.min.css">
<link href="../css/front/design.css" rel='stylesheet' type='text/css' />

<?php



?>

<style type="text/css">
	*
	{
		background-color:#00BCD4;
	}
	.registration_form
	{
		
		margin:10%;
		margin-left: 28%;
		margin-bottom: 0px;
	}
	h2
	{
		font-family: "algerian";
		margin:12%;
		margin-left: 25%;
		margin-bottom: 0px;
	}
	#loginemail
	{
		font-size: 20px;
		font-family: "segoe ui";
		height: 20px;
		width: 20px;
	}
	#loginpassword
	{
		font-size: 20px;
		height: 20px;
		width: 20px;
	}
</style>

 <div class="registration_left" onmouseenter="loginfocused()" onmouseout="loginfocused()">
		 <div class="registration_form">	
		 <h2>ADMIN</h2>
<form id="registration_form" style="margin-left:0px;" action="login.php" method="post">
				<div>
					<label>
						<input style="width:52%;margin-bottom:10px; margin-left:80px;" id="loginemail" placeholder="email:" type="email" name="email" tabindex="3" required>
					</label>
				</div>
				<div>
					<label>
						<input style="width:52%;margin-bottom:15px;margin-left:80px;" id="loginpassword" placeholder="password" type="password" name="password" tabindex="4" required>
					</label>
				</div>						
				<div>
					<button onclick="loginHome()" style="width:52%;margin-left:80px;" class="btn btn-success" type="submit" id="register-submit" name="SUbmit">Sign In</button>
				</div>
				<div class="forget" style="width:50%;">
					<a href="#">forgot your password?</a>
				</div>
			</form>
			</div>
			</div>	

</html>