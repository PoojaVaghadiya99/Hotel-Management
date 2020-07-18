<?php
	require("Header_Admin.php");
	$query="select * from food_zone";
	$rs=$conn->query($query);
?>
<h3></h3>
<center><a class='link_button' href="FoodCategory_Insert_Form.php">Add Item</a></center>
	
		
<table width="95%" align="center" class="disptable">
	<tr >
		<th width="10%" align="center">ID</th>
		<th width="35%" align="center">Food Category</th>
		<th width="50%" align="center" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</th>
	</tr>
    <?php
	
		while($row=$rs->fetch_array())
		{
						
			echo "<tr><td>".$row["id"]."</td>";
			echo "<td>".$row["food_category"]."</td>";
			echo "<td align='center'><a class='link_button' href='FoodCategory_Edit.php?Edit=".$row["id"]."'>Edit</a></td><td><a class='link_button' href='FoodCategory_Delete.php?Delete=".$row["id"]."'>Delete</a></td></tr>";

		}
	?>
			
		
</table>
		

<?php
	require("Footer_Admin.php");
?>