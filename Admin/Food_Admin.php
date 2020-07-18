<body>
<?php
	require("Header_Admin.php");
	$query="select * from food_order ORDER BY id DESC";
	$rs=$conn->query($query);
?>

<div class="headertext_gallary">FOOD ORDER<hr color="#036"  width="103%"></div>
<a href="#" class="scroll"><p class="arrow"></p></a>

<table class="disptable" width="100%">
	<tr>
		<th width="10%" align="center">First Name</th>
		<th width="10%" align="center">Last Name</th>
		<th width="10%" align="center">Gender</th>
        <th width="*" align="center">Address</th>
        <th width="8%" align="center">Mobile No.</th>
        <th width="20%" align="center">Food Detail</th>
        <th width="10%" align="center">Qty</th>
        <th width="10%" align="center">Price</th>
        <th width="10%" align="center">Total</th>   
	</tr>
    
<?php

	while($row=$rs->fetch_array())
	{				
		echo "<td>".$row["fname"]."</td>";
		echo "<td>".$row["lname"]."</td>";
		echo "<td>".$row["gender"]."</td>";
		echo "<td>".$row["address"]."</td>";
		echo "<td>".$row["mo_no"]."</td>";
		echo "<td>".$row["food_detail"]."</td>";
		echo "<td>".$row["qty"]."</td>";
		echo "<td>".$row["price"]."</td>";
		echo "<td>".$row["total"]."</td></tr>";	
	}
	
?>
			
</table>

<?php
	require("Footer_Admin.php");
?>

</body>   