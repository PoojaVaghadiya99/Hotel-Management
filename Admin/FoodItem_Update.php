<?php
	require("../connection.php");

	$fid=$_POST['fid'];
	$food_name=$_POST['food_nm'];
	$price=$_POST['price'];
	$id=$_POST['id'];
	

	$query="update food_category set fname='".$food_name."',price='".$price."',id='".$id."' where fid=".$fid; 

	$conn->query($query);
	header("Location: FoodItem_View.php");
?>
