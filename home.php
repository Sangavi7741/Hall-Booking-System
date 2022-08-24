<?php
include ('connection.php');
session_start();
$q='select * from user where UserId = "'.$_SESSION['user'].'"';
$res=$link->query($q);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>Hall Booking</title>
	<meta name="verify-v1" content="8Fcv4zU4kEpmqFt1JgX8TNobfjaWLWwA7/MpesGh5B4=" />
	<link rel="stylesheet" media="screen" type="text/css" href="home_includes/a.css" />
	<script type="text/javascript" src="home_includes/mootools.js"></script><script type="text/javascript" src="home_includes/core.js"></script>
	<!--[if IE]><meta http-equiv="imagetoolbar" content="no" /><meta http-equiv="X-UA-Compatible" content="IE=8" /><![endif]-->
</head>
<body>
	<div id="menu">
		<h1><a href=""><b>Hall Booking</b></a></h1>
		<div >
			<ul style="font-size:16px; padding:16px 0px 0px 0px">
				<li><a href="logout.php">Logout</a></li>
			</ul>
            
		</div>
	</div>
		<div id="cont";><div class="box large left">
		<h2><b>HALL BOOKING</b></h2 >
		<h4>
		<?php
		echo "WELCOME," ." "; 
		echo $row['UserName']
		?>
		</h4>
		<br /><br />
        <i>Click Any One:</i><br /><br />
		<h4><a href="check.php">CHECK AVAILIBILITY</a></h4><br />
        <h4><a href="Requision of Seminar Hall.php">FILL FORM</a></h4>
		</div>
	</div>	
    
    <div id="bg"><div><table cellpadding="0" cellspacing="0"><tr><td><img alt="" src="home_includes/library.jpg" /></td></tr></table></div></div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct="UA-2741865-7";urchinTracker();</script>
</body>
</html>