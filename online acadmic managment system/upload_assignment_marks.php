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
<title>ResultForm</title>
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
    if(document.myform.sub.value=="-select subject-") 
   { 
      alert("Plz select  subject!"); 
      document.myform.sub.focus(); 
      return false; 
   } 
    if(document.myform.rollno.value=="") 
   { 
      alert("Plz enter rollno!"); 
      document.myform.rollno.focus(); 
      return false; 
   }
    if(document.myform.assno.value=="") 
   { 
      alert("Plz enter assignment no!"); 
      document.myform.assno.focus(); 
      return false; 
   }
   if(document.myform.marks.value=="") 
   { 
      alert("Plz enter assignment marks!"); 
      document.myform.marks.focus(); 
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
	<th colspan="2" style="font-size:24px; font-family:Georgia" align="center">Upload Assignment Marks</th> 
	</tr>
<form action="upload_assignment_marks0.php" method="post" name="myform" onSubmit="return ValidateForm();">
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
<tr><td>Enter Subject:</td><td><select name="sub"><option>-select subject-</option>
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
<tr><td>Enter Rollno:</td><td><input type="number" name="rollno" min="1"/></td></tr>
<tr><td>Enter Assignment No:</td><td><input type="number" name="assno" min="1" /></td></tr>
<tr><td>Enter Assignment marks:</td><td><input type="number" name="marks" min="1"/></td></tr>
<tr ><td colspan="2" align="center"><input type="reset" value="Reset" style="width:130px" /><input type="submit" value="submit" style="width:130px"/></td></tr>
</form>
</table>
</body>
</html>
<?php include ('footer.php')?>