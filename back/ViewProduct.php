<?php
include_once'iframeImporter.php';

$productID="";
if(isset($_GET['id'])){
	$productID=$_GET['id'];
}





?>


<h4 style="text-align:center;margin-bottom:5px;">Viewing product  click to <a href="ModifyProduct.php?id={$productID}"><button class="btn btn-warning">Modify</button></a></h4>
<div class="row">
	<div class="col-xs-12 col-sm-6 col-md-6">
		<table class="table">
			<tr><td>Name</td><td>High Boots</td></tr>
			<tr><td>Category</td><td>Men</td></tr>
			<tr><td>Price per Item </td><td>4500</td></tr>
			<tr><td>Unit in Stock</td><td>5</td></tr>
			<tr><td>Sold Item(s)</td><td>2</td></tr>
		</table>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-6">
		<img class="img-rounded" src="../images/3d_inspiration-1366x768.jpg" style="width:480px;">
	</div>
	
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">Desccription of Item</div>
			<div class="panel-body">Remember, if you have a string which was read as a line from a text file using the fgets() function, you need to use substr($string, -3, 1) so that you get the actual character and not part of the CRLF (Carriage Return Line Feed).

I don't think the person who asked the question needed this, but for me, I was having trouble getting that last character from a string from a text file so I'm sure others will come across similar problems.Remember, if you have a string which was read as a line from a text file using the fgets() function, you need to use substr($string, -3, 1) so that you get the actual character and not part of the CRLF (Carriage Return Line Feed).

I don't think the person who asked the question needed this, but for me, I was having trouble getting that last character from a string from a text file so I'm sure others will come across similar problems.</div>
		</div>
	</div>
</div>
		







