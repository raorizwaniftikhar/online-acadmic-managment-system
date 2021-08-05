<?php include ('header.php')?>
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
	if(document.myform.sanswer.value=="") 
   { 
      alert("Plz enter your security answer!"); 
      document.myform.sanswer.focus(); 
      return false; 
   } 
   
	return true;
 }
</script>
<body>
<table  class="mainForm">
<tr>
	<th colspan="3" style="font-size:24px; font-family:Georgia" align="center">Forgot your password</th>
</tr>
<form  action="user_forgot0.php" method="post" enctype="multipart/form-data" onSubmit="return ValidateForm()" name="myform">
  <tr><td>E-mail:</td><td><input name="email" type="text" /></td></tr>
<tr><td>Security Question</td><td><select name="squestion">
<option>what is your pet name?</option>
<option>What is your mother name?</option>
<option>your favourite place?</option>
<option>What is your mother toung?</option>
<option>Other</option>
</select></td></tr>
<tr><td>Security Answer</td><td><input type="text" name="sanswer"/></td></tr>
 <tr>
	<td colspan="3" align="center"><input type="reset" value="Reset" style="width:130px" /><input type="submit" value="submit" style="width:130px"/>
	</td>
</tr>
</form>
</table>
</body>
</html>
<?php include ('footer.php')?>
