<?php
	require("Header.php");
?>

<div class="headertext">Feed Back<hr color="#036"></div>

<form method="post" action="Feedback_Insert.php">
	<table class="feedback" align="center">
    	<tr><td class="feedtext">Title</td></tr>
        <tr><td><input type="text" name="feedbacktitle" /></td></tr>
        <tr><td class="feedtext">About Your Experience</td></tr>
        <tr><td><textarea name="feedbackdescription"></textarea></td></tr>
        <tr><td><center><input type="submit" name="feedback" value="Send" /></center></td></tr>
    </table>
</form>
        
		
<?php   
	require("Footer.php");
?>
