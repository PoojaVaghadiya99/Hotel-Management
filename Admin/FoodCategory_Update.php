<?php
	require("../connection.php");

	$id=$_POST['id'];
	$food_name=$_POST['food_nm'];
	
	$query="update food_zone set food_category='".$food_name."' where id=".$id; 

	$conn->query($query);
	header("Location: FoodCategory_View.php");
?>
