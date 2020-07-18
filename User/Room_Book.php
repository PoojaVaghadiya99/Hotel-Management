<body>

<?php
	require("Header.php");
	
	$id=$_GET["Room"];
	$query="select * from room where id=".$id;
	
	$rs=$conn->query($query);
	$count=mysqli_num_rows($rs);

	if($count>0)
	{
		$row=$rs->fetch_array();	
?>

	<div class="headertext">Book Room<hr color="#036"></div>
	<div class="reg_form">
    	
	<form method="post" action="Room_Insert.php"  name="Registration" onSubmit="return(validate());">
	
    	
        <table class="info_room_select">
        
        	<?php
		
	       		echo "<tr><td class='book_img'>"; ?><img src=" <?php echo $row["img"]; ?>" height="200px" width="80%"  /><?php echo "</td>";
				echo "<td colspan='2' class='room_info' height='250'><h2>".$row["room_category"]."</h2>".$row["info"]."<p class='price'>".$row["price"]." &#8377</p>
			      </td></tr>";
			?>
       
	   </table>
       
       <table class="detail">
       
       		<tr><td colspan="2"><div class="inner_headertext">Room Detail</div></td></tr>
       			        
        	<tr class="indetail"><td>Check In</td>
        		<td><input type="date" name="check_in"></td>
            </tr>	
        
        	<tr><td>Check Out</td>
        		<td> <input type="date" name="check_out"></td>
            </tr>
            
			<tr>
            	<td>No. Of Rooms</td>
        		<td><input type="text" name="room" placeholder="Enter Number Of Rooms"></td>
            </tr>
            
			<input type="hidden" value=" <?php echo $row['room_category']; ?> " name="type" />
			<input type="hidden" value=" <?php echo $row['price']; ?> " name="price" />

			<tr>
            	<td>No. Of Person</td>
        		<td><input type="text" name="person" placeholder="Enter Number Of Person"></td>
            </tr>
        
		</table>
<?php
	}
?>

			
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
             
    		<tr><td>Birth Date</td>
        		<td><input type="date" name="bdate"></td>
            </tr>
    
    		<tr><td>Address</td>
        		<td><input type="text" name="add" size="45" placeholder="Street Name"><br>
        			<input type="text" name="pincode" placeholder="Pin-Code">&nbsp;&nbsp;
        			<input type="text" name="city" placeholder="City"><br>
        			<input type="text" name="state" placeholder="State">&nbsp;&nbsp;
        			<input type="text" name="country" placeholder="Country"></td>
            </tr>        
            

    		<tr><td>E-Mail Id</td>
        		<td><input type="text" name="mail_id" placeholder="Enter E-Mail Id"></td>
            </tr>
    
    		<tr><td>Mo.No.</td>
        		<td><input type="text" name="mo_no" placeholder="Enter Mobile Number"></td>
            </tr>
    </table>
    
    <table width="100%">
    		<tr><input type="submit" value="Submit" name="submit"></tr> 
	</table>	 	        
	
    
    </form>
    </div>
    
<?php
	require("Footer.php");
?>
    
</body>