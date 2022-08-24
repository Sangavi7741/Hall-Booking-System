<?php
include ('connection.php');
session_start();
$d=$_POST['date'];

$q='select * from halls where Date = "'.$d.'"';
$res=$link->query($q);

$num=mysqli_num_rows($res);
$h=array("A1 Auditorium","A2 Auditorium","A3 Auditorium","A1 Seminar Hall","A2 Seminar Hall","A3 Seminar Hall");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>FORM</title>
	<meta name="verify-v1" content="8Fcv4zU4kEpmqFt1JgX8TNobfjaWLWwA7/MpesGh5B4=" />
	<link rel="stylesheet" media="screen" type="text/css" href="home_includes/a.css" />
	<link rel="stylesheet" type="text/css" href="login_includes/screen2.css">
	<script type="text/javascript" src="home_includes/mootools.js"></script><script type="text/javascript" src="home_includes/core.js"></script>
	<!--[if IE]><meta http-equiv="imagetoolbar" content="no" /><meta http-equiv="X-UA-Compatible" content="IE=8" /><![endif]-->
</head>
<body>
	<div id="menu">
		<h1><a href=""><b>Hall Booking</b></a></h1>
		<div >
			<ul style="font-size:16px; padding:6px 0px 0px 0px">
				<li><a href="logout.php">Logout</a></li>< /br>
                <li><a href="Requision of Seminar Hall.php">Fill Form</a></li>
			</ul>
            
		</div>
	</div>
		<div id="cont";><div class="box large left">
        <h2><b>HALL BOOKING</b></h2>
        <h4>
         <?php
		     
			 $i=0;
			 while($row = mysqli_fetch_array($res, MYSQLI_ASSOC))
			 {if($i==0)
			  {
               $temp=array($row['Hall']);
			   $result = array_diff($h, $temp);
			  }
			  else if($i==1)
			  {  $temp1=array($row['Hall']);
			     $result1 = array_diff($result, $temp1);
			  }
			  else if($i==2)
			  {  $temp2=array($row['Hall']);
			     $result2 = array_diff($result1, $temp2);
			  }
			  else if($i==3)
			  {  $temp3=array($row['Hall']);
			     $result3 = array_diff($result2, $temp3);
			  }
			  else if($i==4)
			  {  $temp4=array($row['Hall']);
			     $result4 = array_diff($result3, $temp4);
			  }
			  else if($i==5)
			  {  $temp5=array($row['Hall']);
			     $result5 = array_diff($result4, $temp5);
			  }
			  $i++; 
			 }
			  if($i==0)
			  { $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
                      
			    $temp=array(isset($row['Hall']));
			   $result = array_diff($h, $temp);
			    $comma_separated = implode(",<br>", $result);
			  }
			 if($i==1)
			 $comma_separated = implode(",<br>", $result);
			  if($i==2)
			 $comma_separated = implode(",<br>", $result1);
			  if($i==3)
			 $comma_separate = implode(",<br>", $result2);
			  if($i==4)
			 $comma_separated = implode(",<br>", $result3);
			  if($i==5)
			 $comma_separated = implode(",<br>", $result4);
			 if($i==6)
			 $comma_separated = implode(",<br>", $result5);
             echo $comma_separated;
			 if($i==6)
			 echo "None of the hall is available on this date.";
			 else if($i==5)
			 echo " is available on this date.";
			 else
			 echo "<br><br> Above Halls are available on this date.";
		?>
		</h4>
		<br>
		<div><button type="submit" id="submit-go"><i><li><a href="check.php">Back</a></li></i></button> </div>
		</div>
       
	</div>	<div id="bg"><div><table cellpadding="0" cellspacing="0"><tr><td><img alt="" src="home_includes/library.jpg" /></td></tr></table></div></div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct="UA-2741865-7";urchinTracker();</script>
</body>
</html>