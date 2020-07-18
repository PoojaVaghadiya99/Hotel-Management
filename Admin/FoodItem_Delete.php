<?php
	require("../connection.php");

	$id=$_GET["Delete"];

	$query="delete from food_category where fid=".$id;

	$conn->query($query);
	header("Location: FoodItem_View.php");
?>