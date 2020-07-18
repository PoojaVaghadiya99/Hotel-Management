<?php
	require("../connection.php");
	
	if($_POST["submit"])
	{
		$filename=$_FILES["img"]["name"];
		$tempname=$_FILES["img"]["tmp_name"];
		$folder="../img/Hall/".$filename;
		move_uploaded_file($tempname,$folder);
		
	}
	
	$hall_nm=$_POST['hall_nm'];
	$price=$_POST['price'];
	$info=$_POST['info'];
	$img=$_POST['img'];
	
		$query="insert into hall(hall_category,price,info,img)values('".$hall_nm."','".$price."','".$info."','".$folder."')";
		
	
	

	$conn->query($query);
	header("Location: Hall_View.php");
?>
