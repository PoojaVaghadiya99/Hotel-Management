<?php
	require("../connection.php");
	
	$food_nm=$_POST['food_nm'];
	$price=$_POST['price'];
	$id=$_POST['id'];
	

	$query="insert into food_category(fname,price,id)values('".$food_nm."','".$price."','".$id."')";
	$conn->query($query);
	
	header("Location: FoodItem_View.php");

?>
