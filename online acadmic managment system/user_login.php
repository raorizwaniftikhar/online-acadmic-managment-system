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
						
						<li class="lastchild"><a href="admin_access.php">Admin Control Panel</a></li>
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
   if(document.myform.password.value=="") 
   { 
      alert("Plz enter your Password!"); 
      document.myform.password.focus(); 
      return false; 
   } 
   
	return true;
 }
</script>
<body>
<table  class="mainForm">
	<tr>
	<th colspan="2" style="font-size:24px; font-family:Georgia" align="center">Student Login</th> 
	</tr>
                       <form name="myform" action="verify_login.php" method="post" onSubmit="return ValidateForm()" >
                 
	<tr><td>E-Mail Address</td><td ><input type="text" name="user_login" id="email"></td></tr>
	<tr><td>Password</td><td><input type="password" name="password" ></td></tr>
    <tr align="center"><td colspan="2"><input type="reset" style="width:130px"><input type="submit" value="Submit"  onClick="return func(myform)"; style="width:130px" ></td></tr>
	<tr><td align="center"><a href="user_chpass.php">Change Password</a></td><td align="center"><a href="user_forgot.php">Forgot your Password</a></td></tr>
    			</form>
               </table>
				
	    
</body>
</html>
<?php include ('footer.php')?>