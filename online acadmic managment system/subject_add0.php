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
  if ( (isset($_POST['sbname'])) and (isset($_POST['despt'])) and (isset($_POST['cdhour'])))
  {
  $sql="INSERT INTO subjects_info(sub_name,description,credit_hours)VALUES('$_POST[sbname]',
  '$_POST[despt]','$_POST[cdhour]')";
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