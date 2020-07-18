<?php
	require("../connection.php");

	$id=$_GET["Delete"];

	
	$query1="select img from hall where id=".$id;
	$q1=$conn->query($query1);
	$row=$q1->fetch_array();
	$currentimg=$row["img"];
	
	$query2="delete from hall where id=".$id;

	$q2=$conn->query($query2);
	if($q2)
	{
		unlink($currentimg);
		header("Location: Hall_View.php");
	}
?>