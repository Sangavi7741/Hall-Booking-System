<?php
session_start();

?>

<script type="text/javascript">
<!--
function printContent(id){
str=document.getElementById(id).innerHTML
newwin=window.open('','printwin','left=100,top=100,width=400,height=400')
newwin.document.write('<HTML>\n<HEAD>\n')
newwin.document.write('<TITLE>Print Page</TITLE>\n')
newwin.document.write('<script>\n')
newwin.document.write('function chkstate(){\n')
newwin.document.write('if(document.readyState=="complete"){\n')
newwin.document.write('window.close()\n')
newwin.document.write('}\n')
newwin.document.write('else{\n')
newwin.document.write('setTimeout("chkstate()",2000)\n')
newwin.document.write('}\n')
newwin.document.write('}\n')
newwin.document.write('function print_win(){\n')
newwin.document.write('window.print();\n')
newwin.document.write('chkstate();\n')
newwin.document.write('}\n')
newwin.document.write('<\/script>\n')
newwin.document.write('</HEAD>\n')
newwin.document.write('<BODY onload="print_win()">\n')
newwin.document.write(str)
newwin.document.write('</BODY>\n')
newwin.document.write('</HTML>\n')
newwin.document.close()
}
//-->
</script>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>Hall Booking</title>
	<meta name="verify-v1" content="8Fcv4zU4kEpmqFt1JgX8TNobfjaWLWwA7/MpesGh5B4=" />
	<link rel="stylesheet" media="screen" type="text/css" href="home_includes/a.css" />
	<script type="text/javascript" src="home_includes/mootools.js"></script><script type="text/javascript" src="home_includes/core.js"></script>
	<!--[if IE]><meta http-equiv="imagetoolbar" content="no" /><meta http-equiv="X-UA-Compatible" content="IE=8" /><![endif]-->
	<link rel="stylesheet" type="text/css" href="login_includes/screen1.css">
	<link rel="stylesheet" type="text/css" href="login_includes/dropdown.css">
	<script type="text/javascript" src="login_includes/helpers.js"></script>
	<script type="text/javascript" src="login_includes/date.js"></script>
	<script type="text/javascript" src="login_includes/form.js"></script>   
</head>
<body>
	<div id="menu">
		<h1><a href=""><b>Hall Booking</b></a></h1>
		<div >
			<ul style="font-size:16px; padding:16px 0px 0px 0px">
				<li ><a href="index.php">HOME</a></li><br />
			
			</ul>
            
		</div>
	</div>
		<div id="cont"><div class="box large left">
		<h2><b>Hall BOOKING</b></h2>
		<form action="fillform.php" method="POST">
		
	 <div id="print">	
<div id="rs"><b><center><i>Requisition for Seminar Halls</i></center></b></div>
<fieldset class="">
			
<legend>Form
</legend>			
<div>
				
<label for="hall">Requirement of Hall</label> 
<select id="hall" name="hall">
<option value="EEE Auditorium">EEE Auditorium</option><option value="Barn Hall">Barn Hall</option><option value="A2 Hall">A2 Hall</option><option value="A13 Hall">A13 Hall</option><option value="A11 Hall">A11 Hall</option><option value="A12 Hall">A12 Hall</option>
</select>
			
</div>
			
<div>
				
<label for="namep">Name of programme</label>
<input type="text" id="namep" name="namep" required="required" placeholder="Eg. Festember">
</div>


<div>
				
<label for="date">Date</label>
<input type="date" id="date" name="date" required="required">
</div>
         

<div>
				
<label for="time">Time Duration</label>
<input type="text" id="time" name="time" required="required" placeholder="Eg. 6 hrs">
</div>
    
<div>
				
<label for="purpose">Purpose</label>
<input type="text" id="purpose" name="purpose" required="required" placeholder="Eg. College Event">
</div>   
</fieldset>
<fieldset class="requirement">
<legend>Requirements</legend>  

<div class="radio">
<fieldset>
<legend><span>Audio system</span></legend>
<div>
<input type="radio" id="yes" name="audio" value="yes"> <label for="yes">Yes</label>
</div>
<div>
<input type="radio" id="no" name="audio" value="no"> <label for="no">No</label>
</div>
</fieldset>
</div>  
  
<div class="radio">
<fieldset>
<legend><span>LCD Projector</span></legend>
<div>
<input type="radio" id="yes" name="lcd" value="yes"> <label for="yes">Yes</label>
</div>
<div>
<input type="radio" id="no" name="lcd" value="no"> <label for="no">No</label>
</div>
</fieldset>
</div> 
    
</fieldset>
		
<fieldset class="">
			
<legend>Event Co-ordinator Details</legend>
			
<div>
				
<label for="fname">First Name</label> 
<input type="text" id="fname" name="fname" required="required" placeholder="Eg. Nikita">
			
</div>
			
<div>
				
<label for="lname">Last Name</label> 
<input type="text" id="lname" name="lname" required="required" placeholder="Eg. Khandelwal">
</div>  

<div>
				
<label for="roll">Staff no./ roll no.</label> 
<input type="text" id="roll" name="roll" required="required" placeholder="Eg. 205112002">
</div> 

<div>
				
<label for="no">Contact No.</label> 
<input type="text" id="no" name="no" required="required" placeholder="Eg. 8220186425">
</div> 

<div>
				
<label for="dpt">Department</label> 
<input type="text" id="dpt" name="dpt" required="required" placeholder="Eg. CA">
</div> 
</fieldset> 
 </div>
<br />
&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" id="submit-go"> Submit</button>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button onClick="printContent('print')">Print out</button>
	</form>
		</div>
	</div>	<div id="bg"><div><table cellpadding="0" cellspacing="0"><tr><td><img alt="" src="home_includes/library.jpg" /></td></tr></table></div></div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
	<script type="text/javascript">_uacct="UA-2741865-7";urchinTracker();</script>
</body>
</html>