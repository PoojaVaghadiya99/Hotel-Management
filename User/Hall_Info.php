<body>

<?php
	require("Header.php");
	
	$id=$_GET["Hall"];
	$query="select * from hall where id=".$id;
	
	$rs=$conn->query($query);
	$count=mysqli_num_rows($rs);

	if($count>0)
	{
		$row=$rs->fetch_array();
?>

	<div class="headertext">Book Hall<hr color="#036"></div>
	<div class="reg_form">
    	
	<form method="post" action="Hall_Insert.php" name="Registration" onSubmit="return(validate());">
    
		
        <table class="info_room_select">
        
        	<?php
		
	       		echo "<tr><td class='book_img'>"; ?><img src=" <?php echo $row["img"]; ?>" height="200px" width="90%"  /><?php echo "</td>";
				echo "<td colspan='2' class='room_info' height='250'><h2>".$row["hall_category"]."</h2>".$row["info"]."<p class='price'>".$row["price"]." &#8377</p>
			      </td></tr>";
			?>
       
	   </table>
       <table align="center" width="100%">
       		<tr><td>
       			<?php echo "<center><a align='center' class='link_button' href='Hall_Book.php?Hall=".$row["id"]."'>Book Now</a></center>";
				  } ?>
             </td></tr>
       </table>
       </form>
       </div>
       </body>
       
