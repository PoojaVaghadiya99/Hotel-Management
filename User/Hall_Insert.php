<?php
	require("../connection.php");
	
	$fname=$_POST['name1'];
	$lname=$_POST['name2'];
	$gender=$_POST['Gender'];
	$birthdate=$_POST['bdate'];
	$add=$_POST['add']." , ".$_POST['city']." - ".$_POST['pincode']." , ".$_POST['state']." , ".$_POST['country'];
	$mail=$_POST['mail_id'];
	$mo_no=$_POST['mo_no'];
	$checkin=$_POST['check_in'];
	$checkout=$_POST['check_out'];
	$no_person=$_POST['person'];
	$hall_nm=$_POST['type'];
	$hall_price=$_POST['price'];
	$total=$_POST['price'];;
	
	
	$a="insert into hall_book_admin(fname,lname,gender,bdate,address,mail,mo_no,checkin,checkout,nperson,hall_category,price,total)values('".$fname."','".$lname."','".$gender."','".$birthdate."','".$add."','".$mail."','".$mo_no."','".$checkin."','".$checkout."','".$no_person."','".$hall_nm."','".$hall_price."','".$total."')";
	
    
	$conn->query($a);
		
	require("Hall_Conform.php");
	
?>
