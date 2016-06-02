<?php include_once'iframeImporter.php'; ?>
<div>

	<h2 style="text-align:center;">Add a category </h2>
	
	<form action="category.php" method="POST">
		<table class="table table-bordered">
			<tr><td>Main Catregory</td><td><select name="mainCategory">
				<option>Men</option>
				<option>Women</option>
				<option>Kids</option>
			</select></td></tr>

			<tr><td>Sub category</td><td><input type="text" name="subCategory"></td></tr>
			<tr><td>Description</td><td><textarea name="description"></textarea></td></tr>
			<tr><td><button class="btn btn-success" type="submit" name="addCategory">Add Category</button></td><td><button class="btn btn-warning" type="reset">Clear table</button></a></td></tr>
		</table>
	</form>
	<button class="btn btn-info">View Categories</button>
	<div id="showCategory" style="margin-top:10px;">
	<form action="b " method="POST">
		<table class="table table-stripped">
			<tr><td>Main Category</td><td>Sub category</td><td>Description</td><td></td></tr>
			<?php 

				$sql="SELECT * FROM `category`";
				$query=mysqli_query($con,$sql);
				$row=mysqli_num_rows($query);
				if($row!=0){
					while($rs=mysqli_fetch_assoc($query)){
						$mainCategory=$rs['mainCategory'];
						$subCategory=$rs['subCategory'];
						$Description=$rs['Description'];
						echo "<tr><td>$mainCategory</td><td><input type='text' name='newCat' value=$subCategory></td><td><textarea name='newDes'>$Description</textarea></td><td>
						<a href='backCategory.php?type=Modify' target='contentViewer'><button class='btn btn-warning'><i class='fa fa-pencil'></i></button></a>
						<a href='backCategory.php?type=delete'><button class='btn btn-danger'><i class='fa fa-trash-o'></i></button></a></td></tr>";
					}
				}
				mysqli_close($con);
			 ?>
		</table>
	</form>
	</div>
</div>









