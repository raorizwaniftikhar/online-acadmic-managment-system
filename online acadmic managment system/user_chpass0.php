<?php include ('header.php')?>
<?php
$username=$_POST['name'];
$oldpassword=$_POST['opasswd'];
$oldpassword=base64_encode($oldpassword);
$newpassword=base64_encode($_POST['npasswd']);
$confirmpassword=base64_encode($_POST['cpasswd']);
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("oams", $con);
$result = mysql_query("SELECT password FROM bcs_mcs WHERE name='$username'");
if(!$result)
{
echo "username you entered does not exist. <a href=\"user_chpass.php\">Try Again</a>";
}
else if($oldpassword!=mysql_result($result,0))
{
echo "you entered an incorrect password. <a href=\"user_chpass.php\">Try Again</a>";
}
else if($newpassword!=$confirmpassword)
{
echo "you confirm password does not Match. <a href=\"user_chpass.php\">Try Again</a>";
}

else if($newpassword=$confirmpassword)

$sql=mysql_query("UPDATE bcs_mcs SET password='$newpassword' where name='$username'"); 


if ($sql)
{
echo "congratulation! you have sucessfully chaged password. ";

}

?>
<?php include ('footer.php')?>