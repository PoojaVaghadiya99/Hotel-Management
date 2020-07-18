<?php
	require("../connection.php");
	
	$title=$_POST['feedbacktitle'];
	$desc=$_POST['feedbackdescription'];
	
	
	$a="insert into feedback(title,description)values('".$title."','".$desc."')";
	
    
	$conn->query($a);
		
	require("Home.php");
	
?>