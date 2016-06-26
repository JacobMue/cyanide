
<!DOCTYPE HTML>
<html>
<?php
 include 'title.php';
 include 'header.php';
include_once'variables.php';

	$category="";
	if(isset($_GET['category'])){
		$category=$_GET['category'];

	}
	$sort="";
	$sqlProduct="";
	$sqlProduct1="";
	if(isset($_GET['sort'])){
		$sort=$_GET['sort'];
		$sqlProduct1="SELECT * FROM `product` WHERE `active`=1 ORDER BY";
	}else{
		$sqlProduct1="SELECT * FROM `product` WHERE `active`=1; ";
	}
	if($category=="Arrival"){
		$query1=mysqli_query($con,$sqlProduct1);
		$row1=mysqli_num_rows($query1);
		if($row1>5){
		$arrivals=$row1-5;
		}else{
			echo "No new Arrivals";
		}
		if(isset($_GET['sort'])){
			$sort=$_GET['sort'];
			$sqlProduct="SELECT * FROM `product` WHERE `active`=1 AND `ProductID`>'$arrivals' ORDER BY `$sort`";
		}else{
			$sqlProduct="SELECT * FROM `product` WHERE `active`=1 AND `ProductID`>'$arrivals'; ";
		}
	}else{
	if(isset($_GET['sort'])){
		$sort=$_GET['sort'];
		$sqlProduct="SELECT * FROM `product` WHERE `CategoryName`='$category' AND `active`=1 ORDER BY `$sort`";
	}else{
		$sqlProduct="SELECT * FROM `product` WHERE `CategoryName`='$category' AND `active`=1; ";
	}	
	}
	$productID="";
	$productName="";
	$productImg="";
	$query=mysqli_query($con,$sqlProduct);
	$row=mysqli_num_rows($query);

?>
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
<!-- content -->
<div class="container">
<div class="women_main">
	<!-- start sidebar -->
	<div class="col-md-3 s-d">
	  <div class="w_sidebar">
		<h3>filter by</h3>
		<section  class="sky-form">
					<h4>Sub categories</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
<?php 
	$sql="SELECT `subCategory` FROM `category` WHERE `mainCategory`='$category' ORDER BY `subCategory`;";
	$queryCat=mysqli_query($con,$sql);
	$rowCat=mysqli_num_rows($queryCat);
	if($rowCat!=0){
		while($cats=mysqli_fetch_assoc($queryCat)){
			$subcategory=$cats['subCategory'];
			echo '<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>'.$subcategory.'</label>';
		}
	}else{
		echo "No Sub categories Available";
	}
?>
							</div>
						</div>
		</section>
		<section class="sky-form">
			<h4>colour</h4>
			<ul class="w_nav2">
				<li><a class="color1" href="#"></a></li>
				<li><a class="color2" href="#"></a></li>
				<li><a class="color3" href="#"></a></li>
				<li><a class="color4" href="#"></a></li>
				<li><a class="color5" href="#"></a></li>
				<li><a class="color6" href="#"></a></li>
				<li><a class="color7" href="#"></a></li>
				<li><a class="color8" href="#"></a></li>
				<li><a class="color9" href="#"></a></li>
				<li><a class="color10" href="#"></a></li>
				<li><a class="color12" href="#"></a></li>
				<li><a class="color13" href="#"></a></li>
				<li><a class="color14" href="#"></a></li>
				<li><a class="color15" href="#"></a></li>
				<li><a class="color5" href="#"></a></li>
				<li><a class="color6" href="#"></a></li>
				<li><a class="color7" href="#"></a></li>
				<li><a class="color8" href="#"></a></li>
				<li><a class="color9" href="#"></a></li>
				<li><a class="color10" href="#"></a></li>
			</ul>
		</section>
	</div>
   </div>
	<!-- start content -->
		<!-- DOWNLOAD PDF-->
	<div class="pdf">
		<div class="pdfmessage">
			<p>
				Would you like a brochure?
				<a href="javascript:genPDF()">
					<button class="btn btn-success">Download PDF</button>
				</href>
			</p>
		</div>
	</div>
	<!-- End of PDF Div-->

	<div class="col-md-9 w_content">
		<div class="women">
			<a href="#"><h4>Viewing - <span><?=$row;?> items</span> </h4></a>
			<ul class="w_nav">
						<li>Sort By: </li>
		     			<li><a href="viewProduct.php?category=<?php echo $category; ?>&sort=ProductName"><button class="btn btn-default">Name</button></a></li> |
		     			<li><a href="viewProduct.php?category=<?php echo $category; ?>&sort=UnitPrice"><button class="btn btn-default">Price</button></a></li> |
		     			<li><a href="viewProduct.php?category=<?php echo $category; ?>&sort=Description"><button class="btn btn-default">Latest Update</button></a></li> 
		     			<div class="clear"></div>	
		     </ul>
		     <div class="clearfix"></div>	
		</div>
<?php 
	$rs="";
	if($row!=0){
		while($rs=mysqli_fetch_assoc($query)){
			$productID=$rs['ProductID'];
			$productName=$rs['ProductName'];
			$productImg=$rs['Picture'];
			$price=number_format($rs['UnitPrice']);
			$productImg = '../images/'.$productImg;
			echo '<div class="viewProduct" style="text-align: center;width:31%;margin-top: 10px;float: left;">';
			echo  "<a id='linkImg' href='details.php?id=$productID'>
			<img src='$productImg' class='img img-rounded' width='250' height='150'></a>";
			echo "<a id='linkAnchor' href='details.php?id=$productID'>$productName</a>";
			echo "<div><p style='float:left;width:80%;margin-top:10px;'>KES $price</p>";
			echo "<a style='float:left;width:20%;' id='linkCart' href='cartV2.php?id=$productID'><button style='color:black;' class='btn btn-info'><i class='fa fa-cart-plus'></i></button></a></div></div>";
		}
	}
	else{
		echo "No Products in this Category";
	}
?>
<!-- 
		<div class="viewProduct" style="
	text-align: center;
	width:23%;
	margin-right: 2%;
	margin-top: 10px;
	float: left;">
			<a id="linkImg" href="details.php"><img src="../images/1.jpg" class="img img-rounded" width="200" height="140"></a>
			<a id="linkAnchor" href="details.php">The New Boots</a>
			<a id="linkCart" href="cart.php"><button class="btn btn-info">Add to Cart</button></a>
		</div> -->

	<!-- end content -->
	</div>
</div>
</div>


<!-- PDF-->
<script type="text/javascript">
	function genPDF()
	{
		var cat="Category: <?php echo $category; ?>";
		var prodname="Name: <?php echo $productName; ?>";
		var prodprice="Price: <?php echo $price; ?>"
		var logo="<?php echo $logo?>";
		var doc=new jsPDF();
		doc.text(20,20,"BOTQ Online Clothing Store");
		doc.text(20,40,cat);
		doc.text(20,50,prodname);
		doc.text(20,60,prodprice);
		doc.save("BOTQ Catalogue.pdf");
	}
</script>


<!-- End of PDF-->
<?php include_once'footer.php';
	mysqli_close($con); ?>
</body>
</html>