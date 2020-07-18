<?php
	require("Header_Admin.php");

	$id=$_GET['Edit'];
	$query="select * from room where id=".$id;
	
	$rs=$conn->query($query);
	$count=mysqli_num_rows($rs);

	if($count>0)
	{
		$row=$rs->fetch_array();
?>

<form action="Room_Update.php"  method="post" enctype="multipart/form-data">
	<table width="50%" align="center" class="dispform">

	<tr>
		<td>Room Category</td>
		<td>
			<input type="text" name="room_nm" value="<?php echo $row['room_category']; ?>" />
		</td>
	</tr>

	<tr>
		<td>Room Price</td>
		<td>
			<input type="text" name="room_price" value="<?php echo $row['price']; ?>" />
		</td>
	</tr>
    
    <tr>
		<td>Description</td>
		<td>
        	<textarea name="info"><?php echo $row['info']; ?></textarea>
		</td>
	</tr>
    
    <tr>
		<td>Upload Image</td>
		<td>
			<input type="File" name="img" />
            <img src="<?php echo $row['img']; ?>" height="60px" width="100px" />
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
