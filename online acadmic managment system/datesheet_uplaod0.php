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
  			    if(isset($_POST['class']) and (isset($_POST['semester']))and (isset($_POST['session'])) and (isset($_POST['sub1'])) and (isset($_POST['day1'])) and (isset($_POST['sub2'])) and (isset($_POST['day2'])) and (isset($_POST['sub3'])) and (isset($_POST['day3'])) and (isset($_POST['sub4'])) and (isset($_POST['day4'])) and (isset($_POST['sub5'])) and (isset($_POST['day5'])) and (isset($_POST['sub5'])) and (isset($_POST['day5'])) and (isset($_POST['sub6'])) and (isset($_POST['day6'])))
						{
  $sql="INSERT INTO datesheet (class,semester, session,sub1,day1,timing1,sub2,day2,timing2,sub3,day3,timing3,sub4,day4,timing4,sub5,day5,timing5,sub6,day6,timing6)VALUES('$_POST[class]',
  '$_POST[semester]','$_POST[session]','$_POST[sub1]','$_POST[day1]','$_POST[timing1]','$_POST[sub2]','$_POST[day2]','$_POST[timing2]','$_POST[sub3]','$_POST[day3]','$_POST[timing3]','$_POST[sub4]','$_POST[day4]','$_POST[timing4]','$_POST[sub5]','$_POST[day5]','$_POST[timing5]','$_POST[sub6]','$_POST[day6]','$_POST[timing6]')";
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