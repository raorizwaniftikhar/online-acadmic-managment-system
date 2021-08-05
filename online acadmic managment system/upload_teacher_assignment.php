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
    if(document.myform.subject.value=="-select subject-") 
   { 
      alert("Plz select your subject!"); 
      document.myform.subject.focus(); 
      return false; 
   } 
   if(document.myform.assigno.value=="") 
   { 
      alert("Plz select your assignment no!"); 
      document.myform.assigno.focus(); 
      return false; 
   } 
   if(document.myform.title.value=="") 
   { 
      alert("Plz enter assignemt title!"); 
      document.myform.title.focus(); 
      return false; 
   } 
   if(document.myform.sdate.value=="") 
   { 
      alert("Plz select start date!"); 
      document.myform.sdate.focus(); 
      return false; 
   } 
   if(document.myform.sbdate.value=="") 
   { 
      alert("Plz select submission date!"); 
      document.myform.sbdate.focus(); 
      return false; 
   } 
    if(document.myform.total.value=="") 
   { 
      alert("Plz enter assignment marks!"); 
      document.myform.total.focus(); 
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
data.innerHTML='<option>select semester </option><option>1st </option><option>2nd </option><option>3rd </option><option>4th </option><option>5th</option><option>6th </option><option>7th </option><option>8th </option>';
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
	<th colspan="2" style="font-size:24px; font-family:Georgia" align="center">Upload Assignment</th> 
	</tr>
<form method="post" action="upload_teacher_assignment0.php" enctype="multipart/form-data"  name="myform" onSubmit="return ValidateForm()">
<tr><td>Class:</td>
<td>
	    <select name="class" onchange="fun()" id="class">
	<option>-select class-</option>
    <option value="BSCS">BSCS</option>
    <option value="MCS(M)">MCS(M)</option>
    <option value="MCS(E)">MCS(E)</option>
    </select>
</td></tr>
<tr><td>semester:</td>
<td>
      <select name="semester" id="text"></select>
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
<tr><td>Subject:</td><td>
<select name="subject">
 <option>-select subject-</option>
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
<tr><td>Assignment No:</td><td><input type="number" name="assigno" min="1" /></td></tr>
<tr><td>Title:</td><td><input type="text" name="title" /></td></tr>

<tr><td>submission Date:</td><td><input type="date" name="sbdate" /><label style="font-size:11px; color:#999999;font-weight:normal">e.g YYYY-MM-DD</label></td></tr>
<tr><td>Total Marks:</td><td><input type="number" name="total" min="1" /></td></tr>
 <tr><td>Filename:</label></td><input type="hidden" name="MAX_FILE_SIZE" value="2000000"><td><input name="file" type="file" id="file"></td></tr>
    <tr><td colspan="2" align="center"><input type="reset" style="width:140px"><input name="upload" type="submit" class="box" id="upload" value=" Upload " style="width:140px"></td></tr>
</form>
</table>
</body>
</html>
<?php include ('footer.php')?>