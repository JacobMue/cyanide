
<!DOCTYPE HTML>
<html>
<?php

 include 'title.php';
 include 'header.php';
 include_once'variables.php';

$productID="";

$customerID="";
if(isset($_SESSION['fName'])){
	$customerID=$_SESSION['CustomerID'];
}
 //if(isset($_GET['id'])){
 //	$productID=$_GET['id'];
 //}

$name="";
$Description="";
$price="";
$stock="";
$Category="";
$picture="";
$total=0;
$delivery=0;
$no_of_products="";
$cartID="";

				echo '	<div class="row">
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
<div class="container">
	<div class="check">	 
			 
		 <div class="col-md-9 cart-items">
			 <h1>My Shopping Bag</h1>
				
';
$sqlPro="SELECT * FROM `cart` WHERE `customerID`='$customerID'";
$queryPro=mysqli_query($con,$sqlPro);
if(mysqli_num_rows($queryPro)!=0){
	while ($rs=mysqli_fetch_assoc($queryPro)) {
		$cartID=$rs['CartID'];
		$productID=$rs['ProductID'];
		$no_of_products=$rs['No_Of_Product'];
if($productID!=""){

$sql="SELECT * FROM `product` WHERE `ProductID`='$productID';";
$query=mysqli_query($con,$sql);
$row=mysqli_num_rows($query);

	while ($rs=mysqli_fetch_assoc($query)) {
		$name=$rs['ProductName'];
		$Description=$rs['Description'];
		$stock=$rs['UnitStock'];
		$Category=$rs['CategoryName'];
		$picture=$rs['Picture'];
		$price=$rs['UnitPrice'];
		$total+=$price;
		$picture="../images/".$picture;
		echo '<div class="cart-header">
				 <div class="close1"> </div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">';
					    echo "<img src='$picture' class='img-responsive'/>";
						echo '</div>
					   <div class="cart-item-info">';
						echo "<h3><a href='#''>$name</a><a href='removeCart.php?id=$productID' style='float:right;
    margin-right: 40px;' title='Remove Product'><buttton class='btn btn-danger'><i class='fa fa-trash-o'></i></button></a><span>Model No: md$productID</span></h3>
						<ul class='qty'>
							<li><p>Stock : $stock</p></li>
							<li><p>Quantity : <input type='number' name='newQty' value=$no_of_products min='1' max='$stock'</p></li>
						</ul>";
						
							 echo '<div class="delivery">
							 <span>Delivered in 2-3 bussiness days</span>
							 <div class="clearfix"></div>
				        </div>	
					   </div>
					   <div class="clearfix"></div>
											
				  </div>

		</div>';
	}

}else{
	echo "Database under service Try Again Later";
}

}
}else{
	echo "Your Bag is Empty";
}


if($total>10){
	$delivery=$total*0.01;
}

$fTotal=$total+$delivery;
echo "</div>";
echo '<div class="col-md-3 cart-total">
			 <div class="price-details">
				 <h3>Price Details</h3>
				 <span>Total</span>';
				 echo "<span class='total1'>KES $total</span>";
				 echo '<span>Discount</span>
				 <span class="total1">KES 0.0</span>
				 <span>Delivery Charges</span>';
				 echo "<span class='total1'>KES $delivery</span>";
				 echo '<div class="clearfix"></div>				 
			 </div>	
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>';
			   echo "<li class='last_price'><span>KES  $fTotal</span></li>";
			   echo'
			   <div class="clearfix"> </div>
			 </ul>
			
			 
			 <div class="clearfix"></div>
			 <a class="order" href="placeOrder.php?id=$customerID">Place Order</a>
			 <a class="order" href="wishlist.php?id=$cartID">Add to Wishlist</a>
			 
			</div>';


?>
			 		
		 </div>
		 
		
			<div class="clearfix"> </div>
	 </div>
	 </div>
<?php include_once 'footer.php';
mysqli_close($con);
 ?>
</body>
</html>