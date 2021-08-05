<?php include ('header_afterteacherlogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['teacher_login'])))
{
header("location: teacher_login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>resultForm</title>
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
    if(document.myform.mid.value=="") 
   { 
      alert("Plz enter mid marks!"); 
      document.myform.mid.focus(); 
      return false; 
   } 
    if(document.myform.final.value=="") 
   { 
      alert("Plz enter final marks!"); 
      document.myform.final.focus(); 
      return false; 
   } 
    if(document.myform.sessional.value=="") 
   { 
      alert("Plz enter sessional marks!"); 
      document.myform.sessional.focus(); 
      return false; 
   } 
    if(document.myform.total.value=="") 
   { 
      alert("Plz enter total marks!"); 
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

</head>
<body>
<table  class="mainForm">
	<tr>
	<th colspan="2"style="font-size:24px; font-family:Georgia" align="center">Result Upload</th> 
	</tr>
<form action="teacher_resultView0.php" method="post"  name="myform" onSubmit="return ValidateForm()">
<tr><td>Class:</td>
<td><select name="class" onchange="fun()" id="class">
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
<tr><td>Enter Mid marks:</td><td><input type="number" name="mid" min=1 /></td></tr>
<tr><td>Enter Final marks:</td><td><input type="number" name="final" min="1"/></td></tr>
<tr><td>Enter Sessional marks:</td><td><input type="number" name="sessional" min="1"/></td></tr>
<tr><td>Total marks:</td><td><input type="number" name="total" min="1" /></td></tr>
<tr ><td colspan="2" align="center"><input type="reset" value="Reset" style="width:130px" /><input type="submit" value="submit" style="width:130px"/></td></tr>
</form>
</table>
</body>
</html>
<?php include ('footer.php')?>