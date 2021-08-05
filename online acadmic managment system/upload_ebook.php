<?php include ('header_afterteacherlogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['teacher_login'])))
{
header("location:teacher_login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Assignment</title>
<LINK href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function ValidateForm(){
   if(document.myform.title.value=="") 
   { 
      alert("Plz enter assignment title!"); 
      document.myform.title.focus(); 
      return false; 
   } 
   if(document.myform.tname.value=="-select name-") 
   { 
      alert("Plz select your name!"); 
      document.myform.tname.focus(); 
      return false; 
   } 
	return true;
 }
</script>

</head>

<body>
  <table  class="mainForm">
	<tr>
	<th colspan="2" style="font-size:24px; font-family:Georgia" align="center">Upload Ebook</th> 
	</tr>
<form method="post" action="upload_ebook0.php" enctype="multipart/form-data" name="myform" onSubmit="return ValidateForm()">
<tr><td>Title:</td>
<td><input type="text" name="title" /></td></tr>
<tr><td>Teacher Name:</td><td>
<select name="tname">
<option>-select name-</option>
<?php include('cons.php') ?>
<?php
		$qry="Select * from teachers_info";
		$result=mysql_query($qry);
		while($row=mysql_fetch_array($result))
		{
		?>
		      <option><?php echo $row['teacher_name'];?></option>
		        <?php
		}
		?>
	        </select></td></tr>
 <tr><td>Filename:</label></td><input type="hidden" name="MAX_FILE_SIZE" value="2000000"><td><input name="file" type="file" id="file"></td></tr>
    <tr><td colspan="2" align="center"><input type="reset" style="width:140px"><input name="upload" type="submit" class="box" id="upload" value=" Upload " style="width:140px"></td></tr>
</form>
</table>
</body>
</html>
<?php include ('footer.php')?>