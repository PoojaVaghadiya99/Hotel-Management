<?php
	require("Header_Admin.php");
	$query="select * from hall";
	$rs=$conn->query($query);
?>

<div class="headertext_gallary">HALL BOOKING<hr color="#036"></div>	
<center><a class='link_button' href="Hall_Insert_Form.php">Insert Hall</a></center>		
			
<table width="96%" class="disptable">
	<tr >
		<th width="15%" align="center">Hall Category</th>
		<th width="5%" align="center">Price</th>
		<th width="36%" align="center">Info</th>
		<th width="20%" align="center">Image</th>
		<th width="20%" align="center">Action</th>
	</tr>
	<?php
		while($row=$rs->fetch_array())
		{
			echo "<tr><td>".$row["hall_category"]."</td>";
			echo "<td>".$row["price"]."</td>";
			echo "<td>".$row["info"]."</td>";
			echo "<td>"; ?><img src=" <?php echo $row["img"]; ?>" height="200px" width="300px"  /><?php echo 	"</td>";
			echo "<td align='center'><a class='link_button' href='Hall_Edit.php?Edit=".$row["id"]."'>Edit</a>&nbsp;<a class='link_button' href='Hall_Delete.php?Delete=".$row["id"]."'>Delete</a></td></tr>";

		}
	?>
</table>
		

<?php
	require("Footer_Admin.php");
?>