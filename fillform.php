<?php
include ('connection.php');
session_start();
if(isset($_POST['hall'])&&
   isset($_POST['namep'])&&  
   isset($_POST['date'])&&
   isset($_POST['time'])&&
   isset($_POST['purpose'])&&
   isset($_POST['fname'])&&
   isset($_POST['lname'])&&
   isset($_POST['roll'])&&
   isset($_POST['no'])&&
   isset($_POST['dpt']))
{ $hal=$_POST['hall'];
  $np=$_POST['namep'];
  $d=$_POST['date'];
  $tm=$_POST['time'];
  $p=$_POST['purpose'];
  $fn=$_POST['fname'];
  $ln=$_POST['lname'];
  $rollno=$_POST['roll'];
  $no=$_POST['no'];
  $dept=$_POST['dpt'];
  if(!empty($hal)&&!empty($np)&&!empty($d)&&!empty($tm)&&!empty($p)&&!empty($fn)&&!empty($ln)&&!empty($rollno)&&!empty($no)&&!empty($dept))
  { 
     $q='select * from halls where Hall = "'.$hal.'" AND Date = "'.$d.'"';
  $res=$link->query($q);
  $num=mysqli_num_rows($res);
   if($num==1)
   { header('location:finishfail.php');
   } 
   else
   {
	    $query="INSERT INTO halls VALUES('".mysqli_real_escape_string($link,$hal)."','".mysqli_real_escape_string($link,$d)."','".mysqli_real_escape_string($link,$fn)."','".mysqli_real_escape_string($link,$ln)."','".mysqli_real_escape_string($link,$rollno)."','".mysqli_real_escape_string($link,$no)."','".mysqli_real_escape_string($link,$dept)."')";																																																																																																																												
	 if($query_run=$link->query($query))
	  { 
	    header('location:finish.php');
	  }
	  else
	  { echo 'Sorry, Try again later.';
	  }
   }
 }
  
  else
  { echo 'All fields are required.';
  }
  
}

?>