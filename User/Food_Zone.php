<?php
	session_start();
?>
<link type="text/css" rel="stylesheet" href="../src/Style.css"/>

<body>

<?php
	require("Header.php");	
?>

<div class="headertext_foodzone">FOOD ZONE<hr color="#036"></div>
<form method="post" action="Food_Cart.php">
<?php
	$q="select * from food_category";
	$rs=$conn->query($q);
	$countCategory=mysqli_num_rows($rs);

	for($i=1;$i<=$countCategory;$i++)
	{
		$query1="select * from food_category where id=".$i;
		$r1=$conn->query($query1);
		
		$query2="select food_category from food_zone where id=".$i;
		$r2=$conn->query($query2);
		
		
		while($row=$r2 -> fetch_array())
		{
			echo "<p class='view'>".$row["food_category"]."</p>";		
		}
?>

	<div class="content">
	
	<table class="food_room" border="0" width="100%" align="center" >
        
<?php
		while($row=$r1 -> fetch_array())
		{
			echo "<tr><td width='40%'>".$row["fname"]."</td>";
			echo "<td width='10%'>".$row["price"]."&#8377</td>";
			//echo "<td width='10%'>Qty<input type='number' name='q' min='1' value='1'/></td>";
			//$a=$_GET['q'];
			echo "<td width='20%'><center><a class='link_button' href='Food_Cart.php?food=".$row["fname"]."&price=".$row["price"]."' >Add Food</a></center></td></tr>";
		}
		
?>

    </table>
    
    </div>
<?php 
	} 
?>	
       
     
	</form>   

<?php  
	require("Footer.php");
?>
	
<script>
	var coll = document.getElementsByClassName("view");
	var i;

	for (i = 0; i < coll.length; i++) 
	{
  		coll[i].addEventListener("click", function() 
		{
    		this.classList.toggle("active");
    		var content = this.nextElementSibling;
    		if (content.style.display === "block") 
			{
      			content.style.display = "none";
			}
			else 
			{
      			content.style.display = "block";
    		}
  		});
	}
</script>
    
</body>
