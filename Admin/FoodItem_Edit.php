<?php
	require("Header_Admin.php");

	$id=$_GET['Edit'];
	$query="select * from food_category where fid=".$id;
	
	$rs=$conn->query($query);
	$count=mysqli_num_rows($rs);

	if($count>0)
	{
		$row=$rs->fetch_array();
?>

<form action="FoodItem_Update.php"  method="post">
	<table align="center" width="50%" class="dispform">
<tr>
		<td>Food Name</td>
		<td>
			<input type="text" name="food_nm" value="<?php echo $row['fname']; ?>" />
		</td>
	</tr>

	<tr>
		<td>Food Price</td>
		<td>
			<input type="text" name="price" value="<?php echo $row['price']; ?>" />
		</td>
	</tr>
    
    <tr>
		<td>Id</td>
		<td>
			<input type="text" name="id" value="<?php echo $row['id']; ?>" />
		</td>
	</tr>

	<tr>
		<td colspan="5" align="center">
			<input type="hidden" name="fid" value="<?php echo $row['fid']; ?>"/>
			<input type="submit" name="submit" value="Update" /> 
		</td>
	</tr>
</table>
</from>
<?php
	}
	require("Footer_Admin.php");
?>
