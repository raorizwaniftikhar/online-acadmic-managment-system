<?php include ('header.php')?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
//$no=0;
$email=$_POST['user_login'];
$password=$_POST['password'];
$hash= base64_encode($password);
$connect=mysql_connect("localhost","root","")or die("unable to connect to server");
$connectdb=mysql_select_db("oams",$connect)or die("unable to connect to database");
$myquery="select * from bcs_mcs where email='".$email."'" ;
$result=mysql_query($myquery);
$row=mysql_fetch_array($result);
$myquery="select * from bcs_mcs where password='".$hash."'" ;
$result=mysql_query($myquery);
$row=mysql_fetch_array($result);

/*if($row[7]==$password )
{
$no=$no+1;
}
if($no==1)
{*/
session_start();
//if (isset($_POST['email']) && isset($_POST['password']) ) {
if ($_POST['user_login'] == $row['email'] && base64_encode($_POST['password']) == $row['password']) {
$_SESSION['user_login'] = $_POST['user_login'];
header("location: user_index.php");
}
else
{
echo '<script language="javascript">';
echo 'alert("Not Accessable");';
echo "window.location='user_login.php';";
echo "</script>";
//header("location: login.php");
}
?>
</body></html>
<?php include ('footer.php')?>