<?php include ('header_afteruserlogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['user_login'])))
{
header("location: user_login.php");
}
?>
<html>
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table  class="mainForm">
<tr>
	<th colspan="4"style="font-size:24px; font-family:Georgia" align="center">View Attendence</th> 
	</tr>
<?php include('cons.php') ?>
<?php 
			if(isset($_POST['subject']))
		{
			$subject=$_POST['subject'];
			$class='';
			$semester='';
			$classSession='';
			$rollNo='';
			 $session=$_SESSION['user_login'];
		$qry="SELECT *
FROM bcs_mcs
WHERE email = '$session'";
		$result=mysql_query($qry);
		while($row=mysql_fetch_array($result))
						{
							$class=$row['class'];
							 $semester=$row['semester'];
							 $classSession=$row['session'];
							  $rollNo=$row['rollno'];
						}
?>
<?php
$connect=mysql_connect("localhost","root","")or die("unable to connect to server");
$connectdb=mysql_select_db("oams",$connect)or die("unable to connect to database");
$sql="select * from attendence where (class='".$class."' and semester='".$semester."' and session='".$classSession."' and rollno='".$rollNo."' and subject='".$subject."' )";
$result = mysql_query($sql);
?>
		<tr><th>Class:</th><td colspan="3"><?php echo $class ?></td></tr>
		<tr><th>Semester:</th><td colspan="3"><?php echo $semester ?></td></tr>
		<tr><th>Session:</th><td colspan="3"><?php echo $classSession ?></td></tr>
		<tr><th>Subject:</th><th>Roll NO</th><th>Date</th><th>Status:</th></tr>
<?php

while($row=mysql_fetch_array($result))
{
?>


        
		<tr><td><?php echo $row['subject'];?></td><td><?php echo $row['rollno'];?></td><td><?php echo $row['date'];?></td><td><?php echo $row['status'];?></td></tr>
		
		
<?php
       }
	    mysql_close($connect);
	  }
       ?>
</table>
</body>
</html>
<?php include ('footer.php')?>