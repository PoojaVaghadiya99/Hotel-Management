<?php
	require("../connection.php");
	
	if($_POST["submit"])
	{
		$filename=$_FILES["img"]["name"];
		$tempname=$_FILES["img"]["tmp_name"];
		$folder="../img/Hall/".$filename;
		move_uploaded_file($tempname,$folder);
		
	}

	$id=$_POST['id'];
	$hall_name=$_POST['hall_nm'];
	$price=$_POST['hall_price'];
	$info=$_POST['info'];
	$img=$_POST['img'];

	$query="update hall set hall_category='".$hall_name."',price='".$price."',info='".$info."',img='".$folder."' where id=".$id; 

	$conn->query($query);
	header("Location: Hall_View.php");
?>
