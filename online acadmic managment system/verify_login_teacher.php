<?php include ('header_teacher.php')?>
<html><head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
//$no=0;
$email=$_POST['teacher_login'];
$password=$_POST['password'];
$path = 'teacher/';
$dirName = $_POST['teacher_login'];
$connect=mysql_connect("localhost","root","")or die("unable to connect to server");
$connectdb=mysql_select_db("oams",$connect)or die("unable to connect to database");
if($_POST['submit'])
{
$myquery="select * from teacher_login where email='".$email."'" ;
$result=mysql_query($myquery);
$row=mysql_fetch_array($result);
$myquery="select * from teacher_login where password='".$password."'" ;
$result=mysql_query($myquery);
$row=mysql_fetch_array($result);
}
if (!is_dir($dirName)) {
			// We are good to create this directory:
			if (mkdir($path . $dirName, 0775)) {
				echo "Your directory has been created succesfully!<br /><br />";
			}else {
				echo "Unable to create dir {$dirName}.";
			}
		}else {
			echo "Directory {$dirName} already exists.";
		}
/*if($row[7]==$password )
{
$no=$no+1;
}
if($no==1)
{*/
session_start();
//if (isset($_POST['email']) && isset($_POST['password']) ) {
if ($_POST['teacher_login'] == $row['email'] && $_POST['password'] == $row['password']) {
$_SESSION['teacher_login'] = $_POST['teacher_login'];
header("location: teacher_index.php");
}
else
{
echo '<script language="javascript">';
echo 'alert("Not Accessable");';
echo "window.location='teacher_login.php';";
echo "</script>";
//header("location: login.php");
}
?>
</body></html>
<?php include ('footer.php')?>