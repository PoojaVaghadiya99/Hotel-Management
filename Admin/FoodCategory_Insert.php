<?php
	require("../connection.php");
	
	$food_nm=$_POST['food_nm'];
	

	$query="insert into food_zone(food_category)values('".$food_nm."')";
	$conn->query($query);
	
	header("Location: FoodCategory_View.php");
	
?>
