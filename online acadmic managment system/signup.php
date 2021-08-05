
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Online Academic Management System</title>

</head>

<body onload="UR_Start()">
<div id="logo">
			<h1 style="margin-top:20px;"></h1>
		</div>
<div id="container">
	<div id="header">
	<img src="images/header.gif"; width="979" height="152" />

	</div>
	<div id="border">
	<div id="main">
			<div id="left">
				<div id="menu">
					<ul>
						<p align="center" style="font-family:Georgia; font-size:50px">Features</p><br />
						<li><a href="signup.php"> Student SignUp</a></li>
						<li><a href="user_login.php">Student Login</a></li>
						
						<li><a href="admin_access.php">Admin Control Panel</a></li>
					</ul>
				</div>
				<div id="menubottom">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
			<div id="right">
				<div class="content">
				
<?php
session_start();
if(isset($_SESSION['user_login']))
{
$_SESSION['user_login']=NULL;
unset($_SESSION['user_login']);
}
?>
<html>
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>

<script language = "Javascript">
/**
 * DHTML email validation script. Courtesy of SmartWebby.com (http://www.smartwebby.com/dhtml/)
 */

function echeck(str) {

		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1){
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1){
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	}
	
	
function ValidateForm(){

	var emailID=document.myform.email
	
	if ((emailID.value==null)||(emailID.value=="")){
		alert("Please Enter your Email ID")
		emailID.focus()
		return false
	}
	if (echeck(emailID.value)==false){
		emailID.value=""
		emailID.focus()
		return false
	}
	if(document.myform.name.value=="") 
   { 
      alert("Plz enter your name!"); 
      document.myform.name.focus(); 
      return false; 
   } 
   
   
      var iChars = "!@#$%^&*()+=-[]\\\'`;,/{}|\":<>?1234567890";
        for (var i = 0; i < document.myform.name.value.length; i++) {
                if (iChars.indexOf(document.myform.name.value.charAt(i)) != -1) {
                alert ("The box has special characters. \nThese are not allowed.\n");
                return false;
        }
                }

   
   if(document.myform.fname.value=="") 
   { 
      alert("Plz enter your Father name!"); 
      document.myform.fname.focus(); 
      return false; 
   } 
 var iChars = "!@#$%^&*()+=-[]\\\'`;,/{}|\":<>?1234567890";
        for (var i = 0; i < document.myform.fname.value.length; i++) {
                if (iChars.indexOf(document.myform.fname.value.charAt(i)) != -1) {
                alert ("The box has special characters. \nThese are not allowed.\n");
                return false;
        }
                }

   if(document.myform.password.value=="") 
   { 
      alert("Plz enter your Password!"); 
      document.myform.password.focus(); 
      return false; 
   } 
   
   if(document.myform.cpassword.value=="") 
   { 
      alert("Plz enter your RePassword!"); 
      document.myform.cpassword.focus(); 
      return false; 
   } 
  
 
   if(document.myform.class.value=="-select class-") 
   { 
      alert("Plz select your class!"); 
      document.myform.class.focus(); 
      return false; 
   } 
   if(document.myform.rollno.value=="") 
   { 
      alert("Plz enter your Rollno!"); 
      document.myform.rollno.focus(); 
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
   if(document.myform.sanswer.value=="") 
   { 
      alert("Plz enter  security answer!"); 
      document.myform.sanswer.focus(); 
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
data.innerHTML='<option>select semester </option><option>1st </option><option>2nd </option><option>3rd </option><option>4th </option><option>5th semester </option><option>6th </option><option>7th </option><option>8th </option>';
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
<body>

<table  class="mainForm">
<tr><td colspan="2" style="color:#FF0000" align="center">* Required field</td></tr>
<tr>
	<th colspan="3" style="font-size:24px; font-family:Georgia" align="center"> Student SignUp</th>
</tr>
<form  action="signup0.php" method="post" enctype="multipart/form-data" onSubmit="return ValidateForm()" name="myform">
<input type="hidden" name="form_validation_rules" value="
rollno : mcs-len == 2-len==2;
rollno : bcs-len == 2-len==2;;
" />
  
  <tr><td>Full Name:</td><td><input name="name" type="text" /><label style="color:#FF0000">*</label></td></tr>
  <tr><td>Father's Name:</td><td><input name="fname" type="text" /><label style="color:#FF0000">*</label></td></tr>
  <tr><td>E-mail:</td><td><input name="email" type="text" /><label style="color:#FF0000">*</label></td></tr>
  <tr><td>Password:</td><td><input name="password" type="password" /><label style="color:#FF0000">*</label></td></tr>
  <tr><td>Confirm Password:</td><td><input name="cpassword" type="password" /><label style="color:#FF0000">*</label></td></tr>
  
  <tr>
	<td>Class:</td>
	<td colspan="2">
	<select name="class" onchange="fun()" id="class">
	<option>-select class-</option>
    <option value="BSCS">BSCS</option>
    <option value="MCS(M)">MCS(M)</option>
    <option value="MCS(E)">MCS(E)</option>
    </select><label style="color:#FF0000">*</label></td>
  </tr>
  <tr><td>RollNo:</td><td colspan="2"><input name="rollno" type="text" id="rollno" /><label style="color:#FF0000">*</label><label style="color:#999999; font-weight:normal">e.g MCS-09-85</label>&nbsp;&nbsp;<label></label></td></tr>
  <tr>
	<td>semester:</td>
	<td colspan="2">
	
    <select name="semester" id="text"></select>
	  <label style="color:#FF0000">*</label></td>
</tr>	   
<tr>
	<td>Enter Session:</td>
	<td colspan="2">
	<select name="session">
	<option>-select session-</option>
	  <option>2009</option>
	  <option>2010</option>
	  <option>2011</option>
	  <option>2012</option>
	  <option>2013</option>
	  <option>2014</option>
	  <option>2015</option>
      </select><label style="color:#FF0000">*</label></td>
</tr>
<tr><td>Security Question</td><td><select name="squestion">
<option>what is your pet name?</option>
<option>What is your mother name?</option>
<option>your favourite place?</option>
<option>What is your mother toung?</option>
<option>Other</option>
</select><label style="color:#FF0000">*</label></td></tr>
<tr><td>Security Answer</td><td><input type="text" name="sanswer"/><label style="color:#FF0000">*</label></td></tr>
 <tr>
	<td colspan="3" align="center"><input type="reset" value="Reset" style="width:130px" /><input type="submit" value="submit" style="width:130px"/>
	</td>
</tr>
</form>
</table>
</body>
</html>
<?php include ('footer.php') ?>

