<style>
body 
{
	margin: 0;
	width: 100%;
	height: 100vh;
	color: #fff;
	background: linear-gradient(-40deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
	background-size: 400% 400%;
	animation: gradientBG 15s ease infinite;
}

@keyframes gradientBG {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}

</style>

<?php
	require("Header.php");		
?>

<body>
	<div class="login-box">
    	<img src="../img/Login.png" class="avatar" />
        	<div class="login">Login</div>
            	<form method="post" name="check" onSubmit="return(validate());" action="../Admin/Home_Admin.php"> 
                	<p>User Name</p>
                    <input type="text" name="username" placeholder="Enter User Name" />
                    
                    <p>Password</p>
                    <input type="password" name="password" placeholder="Enter password" />
                    
                    <input type="submit" name="submit" value="Login" />
                
                </form>
                	
    		</div>
</body>
				
<script>
	function validate()
	{ 
  		if( document.check.username.value == "" || document.check.username.value != "admin" )
  	 	{
			alert( "Please Provide Your Valid User Name !" );
			document.check.username.focus() ;
			return false;
  	 	}
							
  	 	if( document.check.password.value == "" || document.check.password.value != "admin" )
  	 	{
			alert( "Please Provide Your Valid Password !" );
			document.check.password.focus() ;
			return false;
  	 	}
							
  	 	return( true );
	}
</script>
	