<?php
	require("../connection.php");
	
	if($_POST["submit"])
	{
		$filename=$_FILES["img"]["name"];
		$tempname=$_FILES["img"]["tmp_name"];
		$folder="../img/Room/".$filename;
		move_uploaded_file($tempname,$folder);
		
	}
	
	$room_nm=$_POST['room_nm'];
	$price=$_POST['price'];
	$info=$_POST['info'];
	

	$query="insert into room(room_category,price,info,img)values('".$room_nm."','".$price."','".$info."','".$folder."')";

	$conn->query($query);
	header("Location: Room_View.php");
?>
