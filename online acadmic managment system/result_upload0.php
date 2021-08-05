<?php include ('header_afterclerklogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['login'])))
{
header("location: clerk_login.php");
}
?>

<html>
<head><LINK href="style.css" rel="stylesheet" type="text/css"></head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("oams", $con);
  
   if(isset($_POST['class']) and (isset($_POST['semester']))and (isset($_POST['session'])) and (isset($_POST['sub']))  and (isset($_POST['rollno']))  and (isset($_POST['mid']))  and (isset($_POST['final']))  and (isset($_POST['sessional']))  and (isset($_POST['total'])))
						{
  
  $sql="INSERT INTO student_result (class,semester, session,subject,rollno,mid_marks,final_marks,sessional_marks,total)VALUES('$_POST[class]',
  '$_POST[semester]','$_POST[session]','$_POST[sub]','$_POST[rollno]','$_POST[mid]','$_POST[final]','$_POST[sessional]','$_POST[total]')";
  if(!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
 }
  ?> 
<table  class="mainForm">
<th ><?php echo "Record Successfully Added"?></th></table>
<?php
mysql_close($con);
}
?>

</body></html>
<?php include ('footer.php')?>