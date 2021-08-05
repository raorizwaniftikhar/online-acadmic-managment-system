<?php include ('header_afterteacherlogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['teacher_login'])))
{
header("location:teacher_login.php");
}
?>
<html>
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("oams", $con);
  
  if(isset($_POST['class']) and (isset($_POST['semester']))and (isset($_POST['session'])) and (isset($_POST['sub'])) and (isset($_POST['rollno'])) and (isset($_POST['assno'])) and (isset($_POST['marks'])))
						{
  $sql="INSERT INTO assignment_marks (class,semester, session,subject,rollno,assignment_no,assignment_marks)VALUES('$_POST[class]',
  '$_POST[semester]','$_POST[session]','$_POST[sub]','$_POST[rollno]','$_POST[assno]','$_POST[marks]')";
  if(!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
 }
   
mysql_close($con);
}

echo"Assignment marks Successfully uploaded";
?>
</body>
</html>
<?php include ('footer.php')?>