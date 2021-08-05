<?php include ('teacher_header.php')?>
<?php
 if(isset($_POST['name']) and (isset($_POST['opasswd']))and(isset($_POST['npasswd']))and (isset($_POST['cpasswd'])))
						{
$username=$_POST['name'];
$oldpassword=$_POST['opasswd'];
$newpassword=$_POST['npasswd'];
$confirmpassword=$_POST['cpasswd'];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("oams", $con);
$result = mysql_query("SELECT password FROM teacher_login WHERE username='$username'");
if(!$result)
{
echo "username you entered does not exist. <a href=\"teacher_chpass.php\">Try Again</a>";
}
else if($oldpassword!= mysql_result($result,0))
{
echo "you entered an incorrect password. <a href=\"teacher_chpass.php\">Try Again</a>";
}
else if($newpassword!=$confirmpassword)
{
echo "you confirm password does not Match. <a href=\"teacher_chpass.php\">Try Again</a>";
}

else if($newpassword=$confirmpassword)
{

$sql=mysql_query("UPDATE teacher_login SET password='$newpassword' where username='$username'"); 


if ($sql)
{
echo "congratulation! you have sucessfully chaged password. ";
}
}
}
?>
<?php include ('footer.php')?>