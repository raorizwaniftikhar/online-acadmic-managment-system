<?php include ('header.php')?>
<html>
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>

<script language = "Javascript">
function ValidateForm(){
	if(document.myform.name.value=="") 
   { 
      alert("Plz enter username"); 
      document.myform.name.focus(); 
      return false; 
   } 
	
	if(document.myform.opasswd.value=="") 
   { 
      alert("Plz enter your old password!"); 
      document.myform.opasswd.focus(); 
      return false; 
   } 
   if(document.myform.npasswd.value=="") 
   { 
      alert("Plz enter your new password!"); 
      document.myform.npasswd.focus(); 
      return false; 
   } 
   if(document.myform.cpasswd.value=="") 
   { 
      alert("Plz enter your confirm password!"); 
      document.myform.cpasswd.focus(); 
      return false; 
   } 
	return true;
 }
</script>
<body>
<table  class="mainForm">
<tr>
	<th colspan="3" style="font-size:24px; font-family:Georgia" align="center">Change Password</th>
</tr>
<form  action="user_chpass0.php" method="post" enctype="multipart/form-data" onSubmit="return ValidateForm()" name="myform">
  
  <tr><td>UserName:</td><td><input name="name" type="text" /></td></tr>
  <tr><td>Old Password:</td><td><input type="password" name="opasswd" /></td></tr>
  <tr><td>New Password:</td><td><input  type="password" name="npasswd" /></td></tr>
  <tr><td>Confirm Password:</td><td><input type="password" name="cpasswd" /></td></tr>
  <tr>
	<td colspan="3" align="center"><input type="reset" value="Reset" style="width:130px" /><input type="submit" value="submit" style="width:130px"/>
	</td>
</tr>
</form>
</table>
</body>
</html>
<?php include ('footer.php')?>
