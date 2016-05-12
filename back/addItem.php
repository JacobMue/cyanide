<?php  include'./iframeImporter.php';  ?>

<form action="addItem.php" method="POST" enctype="multipart/form-data" class="form-horizontal">

<table class="table table-bordered" id="addItemTable">
	<thead><h4 style="margin-left: 20%;margin-top: 5%;">Add a new Item</h4></thead>
	<tr><td>Category</td><td><select name="category">
			<option>Men</option>
			<option>Women</option>
			<option>Kids</option>
		</select></td>
	</tr>
	<tr><td>Item Name</td><td><input type="text" name="itemName" placeholder="Like V neck"></td></tr>
	<tr><td>Item Description</td><td><input type="text" name="itemDes" placeholder="Like new Polo design v neck shirts"></td></tr>
	<tr><td>Item Price</td><td><input type="text" name="itemPrice" placeholder="in KSH"></td></tr>
	<tr><td>Item Quantity</td><td><input type="text" name="itemQuantity" placeholder="the in Available stock "></td></tr>
	<tr><td>Item Picture</td><td><input type="file" name="itemImage"></td></tr>
	<tr><td><input type="submit" name="submit" value="Add Item"></td><td><input type="reset" value="Clear"></td></tr>
</table>

</form>

<?php

include_once 'database.php';

if ( isset( $_POST['submit'] ) ) {

$category=$_POST['category'];
$ItemName=$_POST['itemName'];
$des=$_POST['itemDes'];
$price=$_POST['itemPrice'];
$Quantity=$_POST['itemQuantity'];


    $name = $_FILES['itemImage']['name']; 
    $extension = strtolower(substr($name, strpos($name, '.') + 1));
    $size = $_FILES['itemImage']['size'];
    $type = $_FILES['itemImage']['type'];
    $temp_name = $_FILES['itemImage']['tmp_name'];


    
    //moving file to specified location
    if($extension=='jpg'||$extension=='png'){
    $location = '../images/';
    if(move_uploaded_file($temp_name, $location.$name)){

        $path=$location.$name;
        $addItem="INSERT INTO `cyanide`.`Product` (`ProductID`, `ProductName`, `Description`, `UnitPrice`, `UnitStock`, `CategoryName`, `Picture`) VALUES (NULL, '$ItemName', '$des', '$price', '$Quantity', '$category', '$path');";
        mysql_query($addItem);

    }
}
mysql_close();

//close issets
}


?>













