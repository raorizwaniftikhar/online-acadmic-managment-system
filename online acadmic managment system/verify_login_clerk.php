<?php include ('header_afterclerklogin.php')?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
//$no=0;
$email=$_POST['login'];
$password=$_POST['password'];
$connect=mysql_connect("localhost","root","")or die("unable to connect to server");
$connectdb=mysql_select_db("oams",$connect)or die("unable to connect to database");
$myquery="select * from clerk_login where email='".$email."'" ;
$result=mysql_query($myquery);
$row=mysql_fetch_array($result);
$myquery="select * from clerk_login where password='".$password."'" ;
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
if ($_POST['login'] == $row['email'] && $_POST['password'] == $row['password']) {
$_SESSION['login'] = $_POST['login'];
header("location: clerk_index.php");
}
else
{
echo '<script language="javascript">';
echo 'alert("Not Accessable");';
echo "window.location='clerk_login.php';";
echo "</script>";
//header("location: login.php");
}
?>
</body></html>
<?php include ('footer.php')?>