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
	<link rel="stylesheet" type="text/css" href="login_includes/screen2.css">
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
				<li ><a href="index.php">Home</a></li><br />
			
			</ul>
            
		</div>
	</div>
		<div id="cont"><div class="box left">
		 <form action="checkregister.php" method="POST">
		
<legend style="color:blue;font-size: 26px"><b>User Details<b></legend>
<div>
<label for="name">Name</label>
<input type="text" id="name" name="name" required="required" placeholder="Eg. Nikita">
</div>
<div>
<label for="rollno">Staff no./ Roll no.</label> 
<input type="text" id="rollno" name="rollno" required="required" placeholder="Eg. 205112002" >
</div>
<div>
<label for="userid">UserId</label>
<input type="text" id="userid" name="userid" required="required" placeholder="Eg. Niki">
</div>
<div>
<label for="password">Password</label> 
<input type="password" id="password" name="password" required="required" placeholder="Eg. a42359G@">
</div>
<div>
<label for="password2">Retype Password</label> 
<input type="password" id="password2" name="password2">
</div>
<div>
<label for="dpt">Department</label> 
<input type="text" id="dpt" name="dpt" required="required" placeholder="Eg. CA">
</div> 
<div>
<label for="mail">Webmail</label> 
<input type="text" id="mail" name="mail" required="required" placeholder="Eg. 205112002@nitt.edu">
</div> 
<div>
<label for="phoneno">Contact No.</label> 
<input type="number" id="phoneno" name="phoneno" required="required" placeholder="Eg. 8220186425">
</div> 
<div><button type="submit" id="submit-go"><i>Register</i></button></div>
<?php
                  if(isset($_SESSION['fail']))
			{
			echo "User is already exist Or Password Not Matching";
			unset($_SESSION['fail']);
			}
			?>
</form> 
		</div>
	</div>	
	<div id="bg"><div><table cellpadding="0" cellspacing="0"><tr><td><img alt="" src="home_includes/library.jpg" /></td></tr></table></div></div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct="UA-2741865-7";urchinTracker();</script>
</body>
</html>