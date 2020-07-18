<?php
	require("Header_Admin.php");
	$query="select * from feedback ORDER BY id DESC";
	$rs=$conn->query($query);
?>


<div class="headertext_gallary">FEED BACK<hr color="#036"  width="123%"></div>
<a href="#" class="scroll"><p class="arrow"></p></a>

		
<table width="100%" class="disptable">
	<tr >
		<th width="20%" align="center">Title</th>
		<th width="*" align="center">Description</th>
		
	</tr>
	<?php
		while($row=$rs->fetch_array())
		{
			echo "<tr><td>".$row["title"]."</td>";
			echo "<td>".$row["description"]."</td>";
		}
	?>
		
</table>
		
        

<?php
	require("Footer_Admin.php");
?>


<script type="text/javascript">
	$(window).scroll(function()
							  {
								  if($(window).scrollTop() > 200)
								  {
									  $(".scroll").fadeIn();
								  }
								  else
								  {
									  $(".scroll").fadeOut();
								  }
							  });
	$(".scroll").click(function()
						  {
							  $("html").animate({scrollTop:0},5000);
						  });
</script>