<head>
<link type="text/css" rel="stylesheet" href="../src/Style.css"/>
<script src="../src/jquery-3.4.1.min.js"></script>
<script src="../src/Valid.js"></script>
<script>
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
</head>

<?php	
	require("../connection.php");
?>

<header>
    	<nav>
        	<div class="logo2"><a href="Home_Admin.php"><img src="../img/Sunrise Hotel.png"  /></a></div>
        	<div class="menu">
            	<ul class="menu_list">
                	<li class="menu_iteam"><a href="Home_Admin.php">HOME</a></li>
           	  	  <li class="menu_iteam"><a href="Food_Admin.php">FOOD ZONE</a></li>
           	  	  <li class="menu_iteam"><a href="Room_Admin.php">ROOMS</a></li>
           	  	  <li class="menu_iteam"><a href="Hall_Admin.php">HALL</a></li>
                  <li class="menu_iteam"><a href="Feedback_Admin.php">FEADBACK</a></li>
   		    	  <li class="menu_iteam"><a href="Detail_Admin.php">DETAIL</a></li>
                    <li class="menu_iteam"><a href="../User/Home.php">LOG OUT</a></li>
                </ul>
         	</div>
		</nav>
</header>
