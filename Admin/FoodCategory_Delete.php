<?php
	require("../connection.php");

	$id=$_GET["Delete"];

	$query="delete from food_zone where id=".$id;

	$conn->query($query);
	header("Location: FoodCategory_View.php");
?>