<?php include ('header_afterclerklogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['login'])))
{
header("location: clerk_login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<LINK href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function ValidateForm(){
   if(document.myform.class.value=="-select class-") 
   { 
      alert("Plz select your class!"); 
      document.myform.class.focus(); 
      return false; 
   } 
   if(document.myform.semester.value=="-select semester-") 
   { 
      alert("Plz select your semester!"); 
      document.myform.semester.focus(); 
      return false; 
   } 
   if(document.myform.session.value=="-select session-") 
   { 
      alert("Plz select your session!"); 
      document.myform.session.focus(); 
      return false; 
   } 
   
	return true;
 }
</script>
<script type="text/javascript">
function fun(){
var cls=document.getElementById('class').value;
if(cls=='BSCS'){
var data=document.getElementById('text');
data.innerHTML='<option>select semester </option><option>1st </option><option>2nd </option><option>3rd </option><option>4th </option><option>5th </option><option>6th </option><option>7th </option><option>8th </option>';
}
else if(cls=='MCS(M)'){
var data=document.getElementById('text');
data.innerHTML='<option>select semester </option><option>1st </option><option>2nd </option><option>3rd </option><option>4th </option>';
}
else{
var data=document.getElementById('text');
data.innerHTML='<option>select semester </option><option>1st </option><option>2nd </option><option>3rd </option><option>4th </option>';
}




}

</script>
</head>
<body>
<table  class="mainForm">
	<tr>
	<th colspan="2"style="font-size:24px; font-family:Georgia" align="center">View DateSheet</th> 
	</tr>
<form method="post" action="view_datesheet0.php"  name="myform" onSubmit="return ValidateForm()">
<tr><td>Class:</td>
<td>  <select name="class" onchange="fun()" id="class">
	<option>-select class-</option>
    <option value="BSCS">BSCS</option>
    <option value="MCS(M)">MCS(M)</option>
    <option value="MCS(E)">MCS(E)</option>
    </select>
</td></tr>
<tr><td>semester:</td>
<td>
       <select name="semester" id="text"></select></td>
</td>
<tr><td>Enter Session:</td><td>
 <select name="session">
 <option>-select session-</option>
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
      <option>2015</option>
      </select>
</td></tr>
			    <tr align="center"><td colspan="2"><input type="Reset"  style="width:150px"><input type="Submit" value="Submit"  style="width:150px"></td></tr> 
				 
		  		 </form>
				 </table>
</body>
</html>
<?php include ('footer.php')?>