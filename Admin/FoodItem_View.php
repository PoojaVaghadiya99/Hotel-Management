<?php
	require("Header_Admin.php");
	$query="select * from food_category";
	$rs=$conn->query($query);
?>

<h3></h3>
<center><a class='link_button' href="FoodItem_Insert_Form.php">Add Item</a></center>		
		
		
<table width="95%" class="disptable">
	<tr >
		<th width="40%" align="center">food_name</th>
		<th width="15%" align="center">Price</th>
		<th width="10%" align="center">Id</th>
		<th width="30%" align="center" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
	</tr>
	<?php
		while($row=$rs->fetch_array())
		{
						
			echo "<tr><td>".$row["fname"]."</td>";
			echo "<td>".$row["price"]."</td>";
			echo "<td>".$row["id"]."</td>";
			echo "<td align='center'><a class='link_button' href='FoodItem_Edit.php?Edit=".$row["fid"]."'>Edit</a></td><td><a class='link_button' href='FoodItem_Delete.php?Delete=".$row["fid"]."'>Delete</a></td></tr>";

		}
	?>
</table>
		

<?php
	require("Footer_Admin.php");
?>