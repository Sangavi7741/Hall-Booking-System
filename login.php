<?php
session_start();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>Hall Booking</title>
	<meta name="verify-v1" content="8Fcv4zU4kEpmqFt1JgX8TNobfjaWLWwA7/MpesGh5B4=" />
	<link rel="stylesheet" media="screen" type="text/css" href="home_includes/a.css" />
	<script type="text/javascript" src="home_includes/mootools.js"></script><script type="text/javascript" src="home_includes/core.js"></script>
	<!--[if IE]><meta http-equiv="imagetoolbar" content="no" /><meta http-equiv="X-UA-Compatible" content="IE=8" /><![endif]-->
	<link rel="stylesheet" type="text/css" href="login_includes/screen.css">
	<link rel="stylesheet" type="text/css" href="login_includes/dropdown.css">
	<script type="text/javascript" src="login_includes/helpers.js"></script>
	<script type="text/javascript" src="login_includes/date.js"></script>
	<script type="text/javascript" src="login_includes/form.js"></script>   
</head>
<body>
	<div id="menu">
		<h1><a href=""><b>HALL BOOKING</b></a></h1>
		<div >
			<ul style="font-size:16px; padding:16px 0px 0px 0px">
				<li ><a href="register.php">Register</a></li><br />
			
			</ul>
            
		</div>
	</div>
		<div id="cont"><div class="box large left">
		<form action="checklogin.php" method="POST">
			
			<legend style="color:blue;font-size: 26px"><b>LOGIN<b></legend>
			<div>				
			<label for="username" style="font-size: 16px">Username</label> 
			<input type="text" id="username" name="username" required="required" style="width:120px;height:15px" placeholder="Eg. Rani">
			</div>
			<div>
			<label for="password" style="font-size: px">Password</label> 
			<input type="password" id="password" name="password" required="required" style="width:120px;height:15px" placeholder="Eg. a42359G@">
			</div>
		
			<div><button type="submit" id="submit-go" >Submit</button> </div>
			<?php
			if(isset($_SESSION['fail']))
			{
			echo "Wrong Username or Password or You are not Registered";
			unset($_SESSION['fail']);
			}
			?>
			</form> 
		</div>
	</div>	<div id="bg"><div><table cellpadding="0" cellspacing="0"><tr><td><img alt="" src="home_includes/library.jpg" /></td></tr></table></div></div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct="UA-2741865-7";urchinTracker();</script>
</body>
</html>