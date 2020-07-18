<?php
	require("Header.php");
	
	$query="select * from gallary";
	
	$rs=$conn->query($query);
	
		
?>

<div class="headertext_gallary">Show Our Hotel<hr color="#036"></div>
<div class="gallary">

<?php
	while($row=$rs->fetch_array())
		{
			
			echo "<div class='box'>"; ?><img class="gallary_img" src=" <?php echo $row["img"]; ?>" height="25%" width="25%"  /><?php echo "</div>";
				
		}
?>

</div>
<?php       
	require("Footer.php");
?>

