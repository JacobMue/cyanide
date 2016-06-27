<!DOCTYPE HTML>
<html>
<?php 
include 'title.php';
include 'header.php';
include_once'variables.php';

$productID="";
if(isset($_GET['id'])){
	$productID=$_GET['id'];
}

$name="";
$Description="";
$price="";
$stock="";
$Category="";
$picture="";
if($productID!=""){

$sql="SELECT * FROM `product` WHERE `ProductID`='$productID';";
$query=mysqli_query($con,$sql);
$row=mysqli_num_rows($query);

if($row==1){

	while ($rs=mysqli_fetch_assoc($query)) {
		$name=$rs['ProductName'];
		$Description=$rs['Description'];
		$price=$rs['UnitPrice'];
		$stock=$rs['UnitStock'];
		$Category=$rs['CategoryName'];
		$picture=$rs['Picture'];
		$picture="../images/".$picture;
	}

}else{
	echo "Database under maintenace Try Again Later";
}

}else{
	echo "<script>";
	echo "alert('No item selected')";
	echo "</script>";
}
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
	<!-- start content -->
			<div class="row single">
				<div class="col-md-12 det">
				  <div class="single_left">
					
					<img <?php echo "src='$picture'"; ?>width="420" class="img img-rounded">

				  <div class="desc1 span_3_of_2">
					<h3><?php echo $name; ?></h3>
					<br>
					<p>Hurry up while stocks last</p>
						<div class="price">
							<span class="text">Price:</span>
							<span class="price-new">KES.<?php echo number_format($price);?></span>
						</div>
					<div class="btn_form">
						<a <?php echo "href='cartV2.php?id=$productID'"; ?>>Add to cart</a>
					</div>
					<a href="#"><span>login to save in wishlist </span></a>
					
			   	 </div>
          	    <div class="clearfix"></div>
          	   </div>
          	    <div class="single-bottom1">
					<h6>Details</h6>
					<?php echo $Description;?>
					</div>
				<div class="single-bottom2">
					<h6>View Our Other Products</h6>
						<div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="../images/2.jpg" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="viewProduct.php?category=Men">Men's Blazers</a></h5>
		                           <p class="product_descr">Shop our blazers and vests for men! Available in colors from navy, red, gray, and black to casual or business styles.</p>									
							   </div>
							  <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">KES. 1500</span>								
								<button class="button1"><a class="product_link" href="viewProduct.php?category=Men"><span>Shop Now</span></a></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
				     <div class="product">
						   <div class="product-desc">
								<div class="product-img">
		                           <img src="../images/rs.jpe" class="img-responsive " alt=""/>
		                       </div>
		                       <div class="prod1-desc">
		                           <h5><a class="product_link" href="viewProduct.php?category=Women">Skirts</a></h5>
		                           <p class="product_descr">Shop a great selection of Women's Skirts here. Find designer Skirts for Women up to 70% off and get free shipping on orders over KES.5800.</p>									
							   </div>
							   <div class="clearfix"></div>
					      </div>
						  <div class="product_price">
								<span class="price-access">KES. 800</span>								
								<button class="button1"><a class="product_link" href="viewProduct.php?category=Women"><span>Shop Now</span></a></button>
		                  </div>
						 <div class="clearfix"></div>
				     </div>
		   	  </div>
	       </div>	
	
		   <div class="clearfix"></div>		
	  </div>
	<!-- end content -->
</div>
</div>
>
<?php include_once'footer.php'; ?>

</body>
</html>