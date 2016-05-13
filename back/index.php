<?php
session_start();
if($_SESSION['firstName']==null){
	header('Location:../front/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Administration Panel</title>
	<link rel="icon" href="../images/webLogo.jpg" type="image/jpg" sizes="16x16"><!--Logo in the tab-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/back/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/back/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts/font-awesome-4.6.2/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/fonts/font-awesome-4.6.2/css/font-awesome.css">


	<link rel="stylesheet" type="text/css" href="../css/back/back.css">
</head>

<body>
<!-- Start  The header part -->
<div class="container-fluid">
	<div class="row" id="adm_header">
		<div class="col-xs-12 col-sm-1 col-md-1" id="header_navigation">
			<button type="button" class="btn btn-primary btn-lg" id="header_navigation_toggle" onclick="navigationDrawerToggle()">
  				<span class="glyphicon glyphicon-list" aria-hidden="true"></span>
			</button>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-9" id="header_heading">
			<h3>Administration Panel</h3>
		</div>
		<div class="col-xs-6 col-sm-2 col-md-1" id="header_user_image">
			<img class="img-circle" width="80px" height="60px" src="<?php echo $_SESSION['image'];?>">
			
		</div>
		<div class="col-xs-6 col-sm-2 col-md-1" id="header_user_name" style="padding: 0px;">
			<p><?php $fname=$_SESSION['firstName'];
					$lname=$_SESSION['lastName'];
					echo $fname;
					echo " ";
					echo $lname; ?></p>
		</div>
	</div>
</div>
<!--End The header Part-->
<div class="row" style="width:100%;">
<!-- Start of the naviagtion drawer-->

<div class="col-xs-12 col-sm-12 col-md-2" style="padding-right: 0px;">
<div class="container" id="navigation_drawer">
    <ul class="nav nav-list">
		<li><a href="dashboard.php" target="contentViewer"><span class="glyphicon glyphicon-dashboard"></span><span1>Dashboard</span1></a></li><hr>
		<li><a href="DisplayProduct.php?category=Men" target="contentViewer"><i class="fa fa-male" aria-hidden="true"></i><span1>Men</span1></a></li><hr>
		<li><a href="DisplayProduct.php?category=Women" target="contentViewer"><i class="fa fa-female" aria-hidden="true"></i><span1>Women</span1></a></li><hr>
		<li><a href="DisplayProduct.php?category=Kids" target="contentViewer"><i class="fa fa-truck" aria-hidden="true"></i><span1>Kids</span1></a></li><hr>	
		<li><a href="Orders.php" target="contentViewer"><i class="fa fa-area-chart" aria-hidden="true"></i><span1>Orders</span1></a></li><hr>
		<li><a href="Customers.php" target="contentViewer"><i class="fa fa-users" aria-hidden="true"></i><span1>Customers</span1></a></li><hr>
		<li><a href="Add_Admin.php" target="contentViewer"><i class="fa fa-user-plus" aria-hidden="true"></i><span1>Add Administrator</span1></a></li><hr>	
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span><span1>Log Out</span1></a></li><hr>
	</ul>

</div>
</div>
<!--End of navigation drawer-->
<div class="col-xs-12 col-sm-12 col-md-10" style="padding-left: 0px;">
	<div class="container-fluid">
		<div id="contentViewFilter">
			<a href="addItem.php" id="addButton" target="contentViewer"><button class="btn btn-primary">Add an Item</button></a>
			<form class="form-search" method="POST" action="SearchResults.php">
  				<input type="text" class="input-medium search-query" name="searchInput" placeholder="Search...">
  				<button type="submit" class="btn" formtarget="contentViewer">Search</button>
			</form>
			<div id="filter">
				<p>View</p>
				<a href="FilterResults.php" target="contentViewer"><button class="btn btn-default">All</button></a>
				<a href="#" target="contentViewer">Most Bought</a>
			</div>
		</div>
    	<iframe name="contentViewer" id="contentView" src="./dashboard.php"></iframe>
	</div>
</div>
<script type="text/javascript" src="../js/back/bootstrap.js"></script>
<script type="text/javascript" src="../js/back/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/back/back.js"></script>
</body>
</html>