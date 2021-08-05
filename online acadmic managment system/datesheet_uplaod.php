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
<title>Date Sheet</title>
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
	<th colspan="3" style="font-size:24px; font-family:Georgia" align="center">Upload DateSheet</th>
</tr>
<form method="post" action="datesheet_uplaod0.php" name="myform" onSubmit="return ValidateForm()">
<tr>
	<td>Class:</td>
	<td colspan="2">
	<select name="class" onchange="fun()" id="class">
	<option>-select class-</option>
    <option value="BSCS">BSCS</option>
    <option value="MCS(M)">MCS(M)</option>
    <option value="MCS(E)">MCS(E)</option>
    </select></td>
</tr>
<tr>
	<td>semester:</td>
	<td colspan="2">
    <select name="semester" id="text"></select></td>
</tr>	   
<tr>
	<td>Enter Session:</td>
	<td colspan="2">
	<select name="session">
	 <option>-select session-</option>
      <option value="2009">2009</option>
      <option value="2010">2010</option>
      <option value="2011">2011</option>
      <option value="2012">2012</option>
      <option value="2013">2013</option>
      <option value="2014">2014</option>
      <option value="2015">2015</option>
      </select></td>
</tr>

<tr>
	<th>Subjects</th>
	<th>Date</th>
	<th>Timing</th>
</tr>
<tr>
	<td><select name="sub1">
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
	        </select></td>
	<td><input type="date" name="day1"></td>
	<td><input type="time" name="timing1"/></td>
</tr>
<tr>
	<td><select name="sub2">
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
	        </select></td>
	<td><input type="date" name="day2"></td>
	<td><input type="time" name="timing2" /></td>
</tr>
<tr>
	<td><select name="sub3">
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
	        </select></td>
	<td><input type="date" name="day3"></td>
	<td><input type="time" name="timing3" /></td>
</tr>
<tr>
	<td><select name="sub4">
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
	        </select></td>
	<td><input type="date" name="day4"></td>
	<td><input type="time" name="timing4" /></td>
</tr>
<tr>
	<td><select name="sub5">
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
	        </select></td>
	<td><input type="date" name="day5"></td>
	<td><input type="time" name="timing5" /></td>
</tr>
<tr>
	<td><select name="sub6">
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
	        </select></td>
	<td><input type="date" name="day6"></td>
	<td><input type="time" name="timing6" /></td>
</tr>
<tr>
	<td colspan="3" align="center"><input type="reset" value="Reset" style="width:130px" /><input type="submit" value="submit" style="width:130px"/>
	</td>
</tr>
</form>
</table>
</body>
</html>
<?php include ('footer.php')?>