<body>
<?php
	require("Header_Admin.php");
	$query="select * from hall_book_admin ORDER BY id DESC";
	$rs=$conn->query($query);
?>

<div class="headertext_gallary">HALL BOOKING<hr color="#036" width="206%"></div>
<a href="#" class="scroll"><p class="arrow"></p></a>		
<table class="disptable" width="200%">
	<tr>
		<th width="6%" align="center">First Name</th>
		<th width="6%" align="center">Last Name</th>
		<th width="4%" align="center">Gender</th>
		<th width="6%" align="center">Birth Date</th>
        <th width="*" align="center">Address</th>
        <th width="12%" align="center">E-Mail Id</th>
        <th width="8%" align="center">Mobile No.</th>
        <th width="6%" align="center">Check-In</th>
        <th width="6%" align="center">Ckech-Out</th>
        <th width="5%" align="center">No. Of Person</th> 
        <th width="10%" align="center">Hall Type</th>
        <th width="5%" align="center">Price</th>
        <th width="5%" align="center">Total</th>   
	</tr>
    
<?php
	while($row=$rs->fetch_array())
	{				
		echo "<td>".$row["fname"]."</td>";
		echo "<td>".$row["lname"]."</td>";
		echo "<td>".$row["gender"]."</td>";
		echo "<td>".$row["bdate"]."</td>";
		echo "<td>".$row["address"]."</td>";
		echo "<td>".$row["mail"]."</td>";
		echo "<td>".$row["mo_no"]."</td>";
		echo "<td>".$row["checkin"]."</td>";
		echo "<td>".$row["checkout"]."</td>";
		echo "<td>".$row["nperson"]."</td>";
		echo "<td>".$row["hall_category"]."</td>";
		echo "<td>".$row["price"]."</td>";
		echo "<td>".$row["total"]."</td></tr>";	
	}
?>
				
</table>

<?php
	require("Footer_Admin.php");
?>

</body>