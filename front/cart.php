<?php include 'header.php';?>
    <?php include 'title.php';?>
<?php
// session_start();
require 'variables.php';




if (isset($_GET['ProducID'])) {
	$result = mysqli_query($con, 'SELECT * FROM product WHERE ProducID='.$_GET['ProductID']);
	$product = mysqli_fetch_object($result);
	$item = new Item ();
	$item->$id = $product->ProductID;
	$item->name = $product->ProductName;
	$item->price = $product->UnitPrice;
	$item->UnitStock = 1;
	$index = -1;
	$cart = unserialize(serialize($_SESSION['cart']));
	for($i=0; $i<count($cart); $i++)
		if($cart[$i]->id==$_GET['id'])
		{
			$index = $i;
			break;
		}
		if($index==-1)
	$_SESSION ['cart'][] = $item;
	else
	{
		$cart[$index]->quantity++;
		$_SESSION['cart'] = $cart;
	}

}
if (isset($_GET['index'])) {
	$cart = unserialize(serialize($_SESSION['cart']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}
?>
<table cellpadding="2" cellspacing="2" border="1">
	<tr>
		<th>Option</th>
		<th>ID</th>
		<th>Name</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Sub total</th>
	</tr>
	<?php 
	$cart = unserialize(serialize($_SESSION['cart']));
	$s = 0;
	$index = 0;
	for ($i=0; $i < count ($cart); $i++) { 
		$s +=$cart[$i]->price * $cart[$i]->quantity ;
	?>
	<td><a href = "cart.php?index =<?php echo $index?> onclick = "return confirm ('Are you sure?')"> Delete</a></td>
	<td><?php echo $cart[$i]->ProductID;?></td>
	<td><?php echo $cart[$i]->ProductName;?></td>
	<td><?php echo $cart[$i]->UnitPrice;?></td>
	<td><?php echo $cart[$i]->UnitStock;?></td>
	<td><?php echo $cart[$i]->UnitPrice * $cart[$i]->UnitStock ;?></td>
	<?php 
		$index++;
		}
	 ?>
	<tr>
		<td colspan="4" align="right" >Sum</td>
		<td align="left"><?php echo $s;?></td>
	</tr>
</table>
<br>
<a href="women.php">Continue shopping</a>