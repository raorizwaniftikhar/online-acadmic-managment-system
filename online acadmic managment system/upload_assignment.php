<?php include ('../header_teacher.php')?>
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
<LINK href="../style.css" rel="stylesheet" type="text/css">
</head>

<body>
  <table  class="mainForm">
	<tr>
	<th colspan="2" style="font-size:24px; font-family:Georgia" align="center">Upload Assignment</th> 
	</tr>
<form method="post" action="upload_assignment0.php" enctype="multipart/form-data">
<tr><td>Class:</td>
<td>
	  <select name="class">
      <option>Bscs</option>
      <option>Mcs(M)</option>
      <option>Mcs(E)</option>
      </select>
</td></tr>
<tr><td>semester:</td>
<td>
      <select name="semester">
      <option>1st</option>
      <option>2nd</option>
      <option>3rd</option>
      <option>4th</option>
      <option>5th</option>
      <option>6th</option>
      <option>7th</option>
      <option>8th</option>
      </select>
</td>
<tr><td>Enter Session:</td><td>
 <select name="session">
      <option>2009</option>
      <option>2010</option>
      <option>2011</option>
      <option>2012</option>
      <option>2013</option>
      <option>2014</option>
      <option>2015</option>
      </select>
</td></tr>
<tr><td>Subject:</td><td>
<select name="subject">
<?php include('cons.php') ?>
<?php
		$qry="Select * from subjects_info";
		$result=mysql_query($qry);
		while($row=mysql_fetch_array($result))
		{
		?>
		      <option><?php echo $row['sub_name'];?></option>
		        <?php
		}
		?>
	        </select></td></tr>
<tr><td>Assignment No:</td><td><input type="text" name="assigno" /></td></tr>
<tr><td>Title:</td><td><input type="text" name="title" /></td></tr>
<tr><td>Start Date:</td><td><input type="text" name="sdate" /></td></tr>
<tr><td>submission Date:</td><td><input type="text" name="sbdate" /></td></tr>
<tr><td>Total Marks:</td><td><input type="text" name="total" /></td></tr>
 <tr><td>Filename:</label></td><input type="hidden" name="MAX_FILE_SIZE" value="2000000"><td><input name="file" type="file" id="file"></td></tr>
    <tr><td colspan="2" align="center"><input type="reset" style="width:140px"><input name="upload" type="submit" class="box" id="upload" value=" Upload " style="width:140px"></td></tr>
</form>
</table>
</body>
</html>
<?php include ('../footer.php')?>