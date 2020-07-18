<body>

<?php
	require("Header.php");	
?>

<div class="headertext">HALL<hr color="#036"></div>

<?php

	$q="select * from hall";
	$rs=$conn->query($q);
	$count=mysqli_num_rows($rs);
	
	if($count > 0)
	{
		while($row=$rs->fetch_array())
		{
			$query2="select * from hall where id=".$row["id"];
			$r2=$conn->query($query2);
	
	?>
	
		<table class="room">
	
	<?php    
			while($row=$r2->fetch_array())
			{
				echo "<tr><td class='room_img'>";
				
				echo "<a href='Hall_Info.php?Hall=".$row["id"]."'>
					  <img src='".$row["img"]."' height='100%' width='100%'  /></a>";
				
				echo "</td>";
				
				echo "<td class='room_info'><h2>".$row["hall_category"]."</h2>
					 <br>".$row["info"]."<br>
					 <p class='price'>".$row["price"]." &#8377</p>
					 <a class='link_button' href='Hall_Book.php?Hall=".$row["id"]."'>Book Now</a>
					 </td>
					 </tr>"; 
				
			}
	
?>

	</table>

<?php
		}
	}
	require("Footer.php");
?>

</body>