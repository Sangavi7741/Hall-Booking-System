<?php
include ('connection.php');
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
<html>
    <head>
        <title>Requisition Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
     <link rel="stylesheet" type="text/css" href="login_includes/screen1.css">
	
<link rel="stylesheet" type="text/css" href="login_includes/dropdown.css">

	

<script type="text/javascript" src="home_includes/helpers.js">
</script>
	
<script type="text/javascript" src="home_includes/date.js">
</script>
	
<script type="text/javascript" src="home_includes/form.js">
</script>   
<style>
#main{
	width:100%;
	background-color:#FFF;
	margin:auto;
	text-align: center;
	display:flex;
  	justify-content: center;
}

#printbn{
	position: absolute;
	text-align: center;
    bottom: 10px;
    left: 50%;
    margin-left: -104.5px;
	width: 207px;
}
@page{
    size:A4;
    margin:0;
}
</style>

    </head>
    <body>
   <div id="print">
        <h1><center style="background-color:#FFF">Requisition for Hall</center></h1>
        <div id="main">  
        <form action="fillform.php" method="POST">
		
		

<fieldset class="">
			
<legend>Form
</legend>			
<div>
				
<label for="hall">Requirement of Hall</label> 
<select id="hall" name="hall">
<option value="A1 Auditorium">A1 Auditorium</option><option value="A2 Auditorium">A2 Auditorium</option><option value="A3 Auditorium">A3 Auditorium</option><option value="A1 Seminar Hall">A1 Seminar Hall</option><option value="A2 Seminar Hall">A2 Seminar Hall</option><option value="A3 Seminar Hall">A3 Seminar Hall</option>
</select>
			
</div>
			
<div>
				
<label for="namep">Name of programme</label>
<input type="text" id="namep" name="namep" required="required">
</div>

<!--<div class="">
				<fieldset>
					<legend><span>Date</span></legend>
					<div>
						<label for="day">Day</label>
						<select id="day" name="day">
							<option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
						</select>
					</div>
					<div>
						<label for="month">Month</label>
						<select id="month" name="month">
							<option value="1">January</option><option value="2">February</option><option value="3">March</option><option value="4">April</option><option value="5">May</option><option value="6">June</option><option value="7">July</option><option value="8">August</option><option value="9">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option>
						</select>
					</div>
					<div>
						<label for="year">Year</label>
						<select id="year" name="year">
							<option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option>
						</select>
					</div>
				</fieldset>
			</div> 
 -->
<div>
				
<label for="date">Date</label>
<input type="date" id="date" name="date" required="required">
</div>
         

<div>
				
<label for="time">Time Duration</label>
<input type="text" id="time" name="time" required="required">
</div>
    
<div>
				
<label for="purpose">Purpose</label>
<input type="text" id="purpose" name="purpose" required="required">
</div>   
</fieldset>
<br>
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
<br>
<fieldset class="">
			
<legend>Event Co-ordinator Details</legend>
			
<div>
				
<label for="fname">First Name</label> 
<input type="text" id="fname" name="fname" required="required">
			
</div>
			
<div>
				
<label for="lname">Last Name</label> 
<input type="text" id="lname" name="lname" required="required">
</div>  

<div>
				
<label for="roll">Staff no./ roll no.</label> 
<input type="text" id="roll" name="roll" required="required">
</div> 

<div>
				
<label for="no">Contact No.</label> 
<input type="text" id="no" name="no" required="required">
</div> 

<div>
				
<label for="dpt">Department</label> 
<input type="text" id="dpt" name="dpt" required="required">
</div> 
</fieldset> 
<br />

<center><button onclick="window.print()" type="submit" id="submit-go" > Submit</a></center>
	</form>
</div>
 
    </body>
</html>
