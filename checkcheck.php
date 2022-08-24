<?php
include ('connection.php');
session_start();
$d=$_POST['date'];

$q='select * from halls where Date = "'.$d.'"';
$res=$link->query($q);
$row=mysqli_fetch_array($res,MYSQLI_ASSOC);
$num=mysqli_num_rows($res);
if($num>0)
{
$_SESSION['success']=TRUE;
echo $row['Hall'];
header('location:checkhalls.php');
}
else
{
$_SESSION['fail']=TRUE;
header('location:check.php');
}
?>