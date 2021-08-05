<?php include ('header.php')?>
<html>
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
</body></html>
<?php
$usrnme= $_POST['name'];
$fname= $_POST['fname'];
$email= $_POST['email'];
$passwrd=$_POST['password'];

$Encryptedpassword = base64_encode($passwrd);
$class= $_POST['class'];
$rollno= $_POST['rollno'];
$semester= $_POST['semester'];
$session= $_POST['session'];
$squestion= $_POST['squestion'];
$sanswer= $_POST['sanswer'];
$ps=$_POST['password'];
$cps=$_POST['cpassword'];
if(strcmp ($ps,$cps)!=0){

echo "password not match";


}
else{
$con= mysql_connect("localhost", "root", "");

if(!$con)
{
die ("Not Connected : " . mysql_error());
}
mysql_select_db("oams", $con);
$qry = "select * from bcs_mcs where email = '$_POST[email]'";


			$result = mysql_query($qry);

			if (mysql_num_rows($result) > 0)
			{
				echo "<br /><br /><h2>Email already exists , Please Change Email Address ,Try again</h2>";
			}
else
			{
				$qry = "select * from bcs_mcs where rollno = '$_POST[rollno]'";
				$result = mysql_query($qry);
				if (mysql_num_rows($result) > 0)
				{
					echo "<br /><br /><h2>Roll already exists, Please Change rollno , Try again</h2>";
				}
else
{
$sql="INSERT INTO bcs_mcs( name, fname, email, password,class,rollno,semester,session,squestion,sanswer)VALUES
( '$usrnme', '$fname', '$email', '$Encryptedpassword','$class','$rollno','$semester','$session','$squestion','$sanswer')";

if (!mysql_query($sql,$con))
  {
   die('Error: ' . mysql_error());
   }
  }
header("location:user_verify.php");
}
}

?>
<?php include ('footer.php')?>