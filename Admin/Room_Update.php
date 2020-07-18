<?php
	require("../connection.php");
	
	if($_POST["submit"])
	{
		$filename=$_FILES["img"]["name"];
		$tempname=$_FILES["img"]["tmp_name"];
		$folder="../img/Room/".$filename;
		move_uploaded_file($tempname,$folder);
		
	}
	
	$id=$_POST['id'];
	$room_name=$_POST['room_nm'];
	$price=$_POST['room_price'];
	$info=$_POST['info'];
	$img=$_POST['img'];

	$query="update room set room_category='".$room_name."',price='".$price."',info='".$info."',img='".$folder."' where id=".$id; 

	$conn->query($query);
	header("Location: Room_View.php");
?>
