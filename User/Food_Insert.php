<?php
session_start();

	require("../connection.php");
	
	$fname=$_POST['name1'];
	$lname=$_POST['name2'];
	$gender=$_POST['Gender'];
	$add=$_POST['add']." , ".$_POST['city']." - ".$_POST['pincode']." , ".$_POST['state']." , ".$_POST['country'];
	$mo_no=$_POST['mo_no'];
	$food=$_POST['food'];
	$qty=$_POST['qty'];
	$price=$_POST['price'];
	$total=$_POST['total'];
	
	
	$a="insert into food_order(fname,lname,gender,address,mo_no,food_detail,qty,price,total)values('".$fname."','".$lname."','".$gender."','".$add."','".$mo_no."','".$food."','".$qty."','".$price."','".$total."')";
	
    
	$conn->query($a);
		
	require("Food_Conform.php");
	
?>