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
	$no_rooms=$_POST['room'];
	$no_person=$_POST['person'];
	$room_nm=$_POST['type'];
	$room_price=$_POST['price'];
	$a=$_POST['room'];
	$b=$_POST['price'];
	$total=(int)$a*(int)$b;
	
	
	$a="insert into room_book_admin(fname,lname,gender,bdate,address,mail,mo_no,checkin,checkout,nperson,nroom,room_category,price,total)values('".$fname."','".$lname."','".$gender."','".$birthdate."','".$add."','".$mail."','".$mo_no."','".$checkin."','".$checkout."','".$no_person."','".$no_rooms."','".$room_nm."','".$room_price."','".$total."')";
	
    
	$conn->query($a);
		
	require("Room_Conform.php");
	
?>
