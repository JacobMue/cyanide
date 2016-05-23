<?php  include'./iframeImporter.php'; 

$productID="";
$productName="";
$productImage="";

$sqlProduct="SELECT `ProductID`,`ProductName`,`Picture` FROM `product` WHERE `active`=0";
$queryProduct=mysqli_query($con,$sqlProduct);
$rowProduct=mysqli_num_rows($queryProduct);


?>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Products</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
<?php
      if($rowProduct!=0){
		while ($rs=mysqli_fetch_assoc($queryProduct)) {
			$productID=$rs['ProductID'];
			$ProductName=$rs['ProductName'];
			$productImage=$rs['Picture'];
      	echo '<div id="ProductDisplay" onmouseleave="closeProductName()" onmouseenter="displayProductName()">';
      	echo "<img class='img img-rounded' src='$productImage'>";
      	echo "<h3 id='hide' style='margin-top:-36px;display:none;'>Okay</h3>";
      	echo "<a href='restore.php?id=$productID'><button class='btn btn-success'>Restore</button></a>";
      	echo "<a href='permanent.php?id=$productID'><button class='btn btn-danger'>Delete Permanently</button></a>";
        echo "</div>";
      	}
	}
	else{
		echo "<script>";
		echo "alert('No deactivated Products')";
		echo "</script>";
	}

?>
     

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Customers</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body"><table class="table table-hover">
	<tr><td>Id</td><td>Title</td><td>First Name</td><td>Last Name</td><td>Email</td><td>Telephone</td><td><a href="DeactivateCustomer.php"><button class="btn btn-danger"><i class="fa fa-ban"></i></button></a></td></tr>
</table></div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Orders</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body"><table class="table table-hover">
	<tr><td>Id</td><td>Title</td><td>First Name</td><td>Last Name</td><td>Email</td><td>Telephone</td><td><a href="DeactivateCustomer.php"><button class="btn btn-danger"><i class="fa fa-ban"></i></button></a></td></tr>
</table></div>
    </div>
  </div>
</div>





