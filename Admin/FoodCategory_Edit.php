<?php
	require("Header_Admin.php");

	$id=$_GET['Edit'];
	$query="select * from food_zone where id=".$id;
	
	$rs=mysql_query($query);
	$count=mysql_num_rows($rs);

	if($count>0)
	{
		$row=mysql_fetch_array($rs);
?>

<form action="FoodCategory_Update.php"  method="post">
	<table align="center" width="50%" class="dispform">

	<tr>
		<td>Food Category</td>
		<td>
			<input type="text" name="food_nm" value="<?php echo $row['food_category']; ?>" />
		</td>
	</tr>

	<tr>
		<td colspan="5" align="center">
			<input type="hidden" name="id" value="<?php echo $row['id']; ?>"/>
			<input type="submit" name="submit" value="Update" /> 
		</td>
	</tr>
</table>
</from>

<?php
	}
	require("Footer_Admin.php");
?>
