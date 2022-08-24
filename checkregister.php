<?php
include ('connection.php');
session_start();
if(isset($_POST['name'])&&
   isset($_POST['rollno'])&&
   isset($_POST['userid'])&&
   isset($_POST['password'])&&
   isset($_POST['password2'])&&
   isset($_POST['dpt'])&&
   isset($_POST['mail'])&&
   isset($_POST['phoneno']))
{ $uname=$_POST['name'];
  $roll=$_POST['rollno'];
  $uid=$_POST['userid'];
  $pwd=$_POST['password'];
  $pwd2=$_POST['password2'];
  $dept=$_POST['dpt'];
  $wmail=$_POST['mail'];
  $no=$_POST['phoneno'];
  if(!empty($uname)&&!empty($roll)&&!empty($uid)&&!empty($pwd)&&!empty($pwd2)&&!empty($dept)&&!empty($wmail)&&!empty($no))
  { if($pwd!=$pwd2)
  { echo'Passwords do not match.';
    $_SESSION['fail']=TRUE;
    header('location:register.php');
  }
  else
  { $query ='select * from user where UserId = "'.$uid.'"';
    $query_run=$link->query($query);
    if(mysqli_num_rows($query_run)==1)
	{
        $_SESSION['fail']=TRUE;
        header('location:register.php');
	}
	else
	{ $query="INSERT INTO user VALUES('".mysqli_real_escape_string($link,$uname)."','".mysqli_real_escape_string($link,$roll)."','".mysqli_real_escape_string($link,$uid)."','".mysqli_real_escape_string($link,$pwd)."','".mysqli_real_escape_string($link,$dept)."','".mysqli_real_escape_string($link,$wmail)."','".mysqli_real_escape_string($link,$no)."')";
	  if($query_run=$link->query($query))
	  { $_SESSION['user']=$uid;
	    header('location:home.php');
	  }
	  else
	  { echo 'Sorry, Try again later.';
	  }
	}
  }
  }
  else
  { echo 'All fields are required.';
  }
}
?>