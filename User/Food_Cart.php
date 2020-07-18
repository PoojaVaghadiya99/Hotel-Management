<?php
	session_start();
	
	
	if(isset($_GET['food']))
		{
			$_SESSION['cart'][]=array("food"=>$_GET['food'],"price"=>$_GET['price'],"qty"=>1);
			//echo "<pre>";
			//print_r($_SESSION);
			//echo $_SESSION['cart'][0]['food'];
		}
		else if(isset($_GET['id']))
		{
			unset($_SESSION['cart'][$_GET['id']]);
		}
		else if(isset($_POST))
		{
			foreach($_POST as $id=>$val)
			{
				$_SESSION['cart'][$id]['qty']=$val;
			}
		}
		
		
		header("location: Food_Order.php");
?>
       
