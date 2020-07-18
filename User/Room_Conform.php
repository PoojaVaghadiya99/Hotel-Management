<?php
	require("Header.php");
?>

	
	<div class="headertext">Conform Detail<hr color="#036"></div>
    <div class="conform">
	<table class="personal_info">

<?php	
	echo "<tr><th colspan='2'>Conform Your Detail</th></tr>";
	echo "<tr><td>First Name</td><td>".$_POST["name1"]."</td></tr>";
	echo "<tr><td>Last Name</td><td>".$_POST["name2"]."</td></tr>";
	echo "<tr><td>Gender</td><td>".$_POST["Gender"]."</td></tr>";
	echo "<tr><td>Birth Date</td><td>".$_POST["bdate"]."</td></tr>";
	echo "<tr><td>Street Name</td><td>".$_POST["add"]."</td></tr>";
	echo "<tr><td>Pin-Code</td><td>".$_POST["pincode"]."</td></tr>";
	echo "<tr><td>City</td><td>".$_POST["city"]."</td></tr>";
	echo "<tr><td>State</td><td>".$_POST["state"]."</td></tr>";
	echo "<tr><td>Country</td><td>".$_POST["country"]."</td></tr>";
	echo "<tr><td>E-Mail Id</td><td>".$_POST["mail_id"]."</td></tr>";
	echo "<tr><td>Mobile No.</td><td>".$_POST["mo_no"]."</td></tr>";
?>

	</table>
	<table class="detail_info">

<?php
	echo "<tr><th colspan='2'>Payment</th></tr>";
	echo "<tr><td>Room Type</td><td>".$_POST["type"]."</td></tr>";
    echo "<tr><td>Price</td><td>".$_POST["price"]."</td></tr>";
    echo "<tr><td>No Of Room</td><td>".$_POST["room"]."</td></tr>";
	echo "<tr><td>check_in</td><td>".$_POST["check_in"]."</td></tr>";
	echo "<tr><td>check_out</td><td>".$_POST["check_out"]."</td></tr>";	
    echo "<tr><td>Total Price</td><td>".$total."</td></tr>";
    echo "<tr><td>Payment Type</td><td>
					<label class='container1'>
  					<input type='radio' name='Gender' value='Visit on Hotel'>Visit on Hotel</label>
                    
					<label class='container1'>
 		 			<input type='radio' name='Gender' value='Online payment'>Online payment</label></td></tr>";
	?>

	</table>
    </div>
	<table class="conformbutton" align="center">

<?php
	echo "<tr>
			<td><center><a class='link_button' href='Room.php'>Conform</a></center></td>
		</tr>";
?>

	</table>
	
<?php

	require("Footer.php");
?>