<?php include ('header_afteruserlogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['user_login'])))
{
header("location:user_login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload Assignment</title>
<LINK href="style.css" rel="stylesheet" type="text/css">
<script>
  var i = document.createElement("input");
  i.setAttribute("type", "date");
  if (i.type == "text") {
    // No native date picker support :(
    // Use Dojo/jQueryUI/YUI/Closure to create one,
    // then dynamically replace that <input> element.
  }
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
   if(document.myform.rollno.value=="") 
   { 
      alert("Plz enter your Rollno!"); 
      document.myform.rollno.focus(); 
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
   
	return true;
 }
</script>
</script>
</head>

<body>
  <table  class="mainForm">
	<tr>
	<th colspan="2" style="font-size:24px; font-family:Georgia" align="center">Upload Assignment Answer</th> 
	</tr>
<form method="post" action="upload_assignment_answer0.php" enctype="multipart/form-data" name="myform" onSubmit="return ValidateForm()">
<?php include('cons.php') ?>
<?php 
			$class='';
			$semester='';
			$classSession='';
			$rollNo='';
			 $session=$_SESSION['user_login'];
		$qry="SELECT *
FROM bcs_mcs
WHERE email = '$session'";
		$result=mysql_query($qry);
		while($row=mysql_fetch_array($result))
						{
							$class=$row['class'];
							 $semester=$row['semester'];
							 $classSession=$row['session'];
							  $rollNo=$row['rollno'];
						}
?>
<tr><td>Class:</td>
<td>
	   <?php echo $class ?>
</td></tr>
<tr><td>semester:</td>
<td>
      <?php echo $semester ?>
</td>
<tr><td>Enter Session:</td><td>
 <?php echo $classSession?>
</td></tr>
<tr><td>Roll No:</td><td><?php echo $rollNo;?></td></tr>
<tr><td>Subject:</td><td>
<select name="subject">
 <option>-select subject-</option>
<?php include('cons.php') ?>
<?php
		$sub1='';
		$sub2='';
		$sub3='';
		$sub4='';
		$sub5='';
		$sub6='';
		$qry="SELECT * FROM classes_timetable WHERE class='$class' and semester='$semester' and session='$classSession'";
		$result=mysql_query($qry);
		while($row=mysql_fetch_array($result))
		{
		?>
		      <?php  $sub1=$row['sub1'];
			  		 $sub2=$row['sub2'];
					 $sub3=$row['sub3'];
					 $sub4=$row['sub4'];
					 $sub5=$row['sub5'];
					 $sub6=$row['sub6'];
			  
			  
			  
			  
			  ?>
		        <?php
		}
		?>
        <option><?php echo $sub1 ?></option>
        <option><?php echo $sub2 ?></option>
        <option><?php echo $sub3 ?></option>
        <option><?php echo $sub4 ?></option>
        <option><?php echo $sub5 ?></option>
        <option><?php echo $sub6 ?></option>
        
	        </select></td></tr>
<tr><td>Assignment No:</td><td><input type="number" name="assigno" min="1" /></td></tr>
<tr><td>Title:</td><td><input type="text" name="title" /></td></tr>

<tr><td>submission Date:</td><td><input type="date" name="sbdate" /><label style="font-size:11px; color:#999999; font-weight:normal">e.g YYYY-MM-DD</label></td></tr>
 <tr><td>Filename:</label></td><input type="hidden" name="MAX_FILE_SIZE" value="2000000"><td><input name="file" type="file" id="file"></td></tr>
    <tr><td colspan="2" align="center"><input type="reset" style="width:140px"><input name="upload" type="submit" class="box" id="upload" value=" Upload " style="width:140px"></td></tr>
</form>
</table>
</body>
</html>
<?php include ('footer.php')?>