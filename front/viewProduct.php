
<!DOCTYPE HTML>
<html>
<?php include 'header.php';?>
<?php include 'title.php';
include_once'variables.php';

	$category="";
	if(isset($_GET['category'])){
		$category=$_GET['category'];

	}
	$productID="";
	$productName="";
	$productImg="";

	$sqlProduct="SELECT * FROM `product` WHERE `CategoryName`='$category' AND `active`=1;";
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
<!-- PDF-->
<script type="text/javascript">
	function genPDF()
	{
		var doc=new jsPDF();
		doc.text(20,20,"BOTQ Online Clothing Store");
		doc.addPage();
		doc.text(20,20, "This is page no. 2");
		doc.save("BOTQ Catalogue.pdf");
	}
</script>
<!-- End of PDF-->
<!-- content -->
<div class="container">
<div class="women_main">
	<!-- start sidebar -->
	<div class="col-md-3 s-d">
	  <div class="w_sidebar">
		<h3>filter by</h3>
		<section  class="sky-form">
					<h4>categories</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>kurtas</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>kutis</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>churidar kurta</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>salwar</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>printed sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>fashion sari</label>	
							</div>
						</div>
		</section>
		<section  class="sky-form">
					<h4>brand</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>vishud</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>amari</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>shree</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>biba</label>																								
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
		<section class="sky-form">
						<h4>discount</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio" checked=""><i></i>60 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>50 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>40 % and above</label>
							</div>
							<div class="col col-4">
								<label class="radio"><input type="radio" name="radio"><i></i>30 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>20 % and above</label>
								<label class="radio"><input type="radio" name="radio"><i></i>10 % and above</label>
							</div>
						</div>						
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
					<button>Download PDF</button>
				</href>
			</p>
		</div>
	</div>
	<!-- End of PDF Div-->

	<div class="col-md-9 w_content">
		<div class="women">
			<a href="#"><h4>Viewing - <span><?=$row;?> items</span> </h4></a>
			<ul class="w_nav">
						<li>Sort : </li>
		     			<li><a class="active" href="#">popular</a></li> |
		     			<li><a href="#">new </a></li> |
		     			<li><a href="#">discount</a></li> |
		     			<li><a href="#">price: Low High </a></li> 
		     			<div class="clear"></div>	
		     </ul>
		     <div class="clearfix"></div>	
		</div>
<?php 
	
	if($row!=0){
		while($rs=mysqli_fetch_assoc($query)){
			$productID=$rs['ProductID'];
			$productName=$rs['ProductName'];
			$productImg=$rs['Picture'];
			$price=number_format($rs['UnitPrice']);
			$productImg = '../images/'.$productImg;
			echo '<div class="viewProduct" style="text-align: center;width:31%;margin-top: 10px;float: left;">';
			echo  "<a id='linkImg' href='details.php?id=$productID'>
			<img src='$productImg' class='img img-rounded' width='250' height='200'></a>";
			echo "<a id='linkAnchor' href='productDetails.php?id=$productID'>$productName</a>";
			echo "<div><p style='float:left;width:80%;margin-top:10px;'>KES $price</p>";
			echo "<a style='float:left;width:20%;' id='linkCart' href='cartV2.php?id=$productID'><button style='color:black;' class='btn btn-info'><i class='fa fa-cart-plus'></i></button></a></div></div>";
		}
	}
	else{
		echo "No Products in this Category";
	}
	mysqli_close($con);
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
<?php include_once'footer.php'; ?>
</body>
</html>