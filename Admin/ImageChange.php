<?php
	require("../connection.php");
	
	if($_POST["change"])
	{
		$filename=$_FILES["img"]["name"];
		$tempname=$_FILES["img"]["tmp_name"];
		$folder="../img/Hall/".$filename;
		move_uploaded_file($tempname,$folder);
		
	}

	$id=$_POST['id'];
	$img=$_POST['img'];

	$query="update hall set img='".$folder."' where id=".$id; 

	$a=$conn->query($query);
	if($a)
	{
		echo "Image Changed";
	}
	else
	{
		echo "Image Not Changed";
	}
	//header("Location: Hall_View.php");
?>
