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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add New Subject</title>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table  class="mainForm">
	<tr>
	<th colspan="2" style="font-size:24px; font-family:Georgia" align="center">Add New Subject</th> 
	</tr>
<form method="post" action="subject_add0.php">
  <tr><td>Subject Name:</td><td><input name="sbname" type="text" /></td></tr>
  <tr><td>Description:</td><td><textarea rows="5" cols="15" name="despt" ></textarea></td></tr>
  <tr><td>Credit Hours:</td><td><input name="cdhour" type="text" /></td></tr>
 <tr ><td colspan="2" align="center"><input type="reset" value="Reset" style="width:130px" /><input type="submit" value="submit" style="width:130px"/></td></tr>
</form>
</table>
</body>
</html>
<?php include ('footer.php')?>