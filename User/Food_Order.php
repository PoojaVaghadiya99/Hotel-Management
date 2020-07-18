<?php session_start();
?>

<link type="text/css" rel="stylesheet" href="../src/Style.css"/>
<script type="text/javascript" src="../src/valid.php"></script>

<body>
<?php
	require("../connection.php");
	require("Header.php");
	
?>
	<div class="headertext">Food Order<hr color="#036"></div>
	<div class="reg_form">
    	
	<form method="post" action="Food_Insert.php" name="Registration" onSubmit="return(validate());">
    
       <table class="food_detail" border="0">
       		<tr><th colspan="6"><div class="inner_headertext">Food Detail</div></th></tr>
            <tr class="food_detail_head">
            <th width="5%">Id</th>
            <th width="*">Food Name</th>
            <th width="10%">Qty</th>
            <th width="15%">Price</th>
            <th width="15%">Total</th>
            <th width="10%">Remove</th>
            </tr>
            <?php
			$a=0;
				if(isset($_SESSION['cart']))
				{
		
					$total=0;
					$c=1;
					
					foreach($_SESSION['cart'] as $id=>$val)
					{
						
						$rat=$val['qty']*$val['price'];
						$total=$total+$rat;
						echo "<tr class='food_detail_tr'><td>".$c."</td>";
						echo "<td>".$val['food']."</td>";
						echo "<td>".$val['qty']."</td>";
						echo "<td>".$val['price']."</td>";
						echo "<td>".$rat."</td>";
						echo "<td><a href='Food_Cart.php?id=".$id."'><img class='remove' src='../img/r.png' height='40px' width='40px' /></a></td></tr>";
						
						$c++;
						$a++;
						
						//echo '<td><a href="Food_Cart.php?id='.$id.'">X</a></td></tr>';
						//echo "<input type='hidden' name='food' value='".$val['food']."' >";
						//echo "<input type='hidden' name='price' value='".$val['price']."' >";
						
						$qty_arr[]=$val['qty'];
						$food_arr[]=$val['food'];
						$price_arr[]=$val['price'];
					}
					
					if($a>0)
					{
						$qty=implode("<br>",$qty_arr);
						$food=implode("<br>",$food_arr);
						$price=implode("<br>",$price_arr);

						echo "<input type='hidden' name='qty' value='".$qty."' >";
						echo "<input type='hidden' name='food' value='".$food."' >";
						echo "<input type='hidden' name='price' value='".$price."' >";
					}
					//echo $price;
					//echo $k;
					//$a=serialize($_SESSION['cart']);
					
				}

				
			?>
        
            
		     <tr><td colspan="4" class="food_detail_tr"><b>Total</b></td><td colspan="2" class="price">&#8377&nbsp;&nbsp;<?php echo $total; ?></td></tr>
             <tr><td colspan="6" align="center"><a href="Food_zone.php" class="add">Add Food</a></td></tr>
             
		
           
			</table>
            
            <input type="hidden" name="total" value="<?php echo $total; ?>" >

		<table class="personal">
        	<tr><td colspan="2"><div class="inner_headertext">Personal Detail</div></td></tr>
		
    		<tr>
            	<td width="16%">Full Name</td>
        		<td width="84%"><input type="text" name="name1" placeholder="First Name">&nbsp;&nbsp;
   			  <input type="text" name="name2" placeholder="Last Name"></td>
            </tr>
            
    		
    		<tr><td>Gender</td>
        		<td>
                    <label class="container1">
  					<input type="radio" name="Gender" value="Male">Male</label>
                    
					<label class="container1">
 		 			<input type="radio" name="Gender" value="Female">Female</label>

					<label class="container1">
  					<input type="radio" name="Gender" value="Other">Other</label></td>

            </tr>
             
    
    		<tr><td>Address</td>
        		<td><input type="text" name="add" size="45" placeholder="Street Name"><br>
        			<input type="text" name="pincode" placeholder="Pin-Code">&nbsp;&nbsp;
        			<input type="text" name="city" placeholder="City"><br>
        			<input type="text" name="state" placeholder="State">&nbsp;&nbsp;
        			<input type="text" name="country" placeholder="Country"></td>
            </tr>        
            
    
    		<tr><td>Mo.No.</td>
        		<td><input type="text" name="mo_no" placeholder="Enter Mobile Number"></td>
            </tr>
    </table>
    
    <table width="100%">
	<?php
			if($total == 0)
			{	
				echo "<tr><td><center><p class='error'>Your Cart Is Empty Please <a href='Food_zone.php' >Add Food</a></p></center></td></tr>";
			}
			else
			{
				echo "<tr><td><center><input type='submit' value='Submit' name='submit'></center></td></tr>"; 
			}
	?>
	</table>	 	        
	
    
    </form>
    </div>
    
<?php
	require("Footer.php");
?>
    
</body>
