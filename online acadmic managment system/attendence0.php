<?php include ('header_afterteacherlogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['teacher_login'])))
{
header("location: teacher_login.php");
}
?>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("oams", $con);
  
  
  
    if(isset($_POST['class']) and (isset($_POST['semester']))and (isset($_POST['session'])) and (isset($_POST['subject'])) and (isset($_POST['rollno'])) and (isset($_POST['date'])) and (isset($_POST['attend'])))
	{
	
  $sql="INSERT INTO attendence (class,semester, session,subject,rollno,date,status)VALUES('$_POST[class]',
  '$_POST[semester]','$_POST[session]','$_POST[subject]','$_POST[rollno]','$_POST[date]','$_POST[attend]')";
  if(!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
 }
 echo"Attendence Successfully updated";
mysql_close($con);
}
?>
<script language="javascript">
function download()
{
	window.location='report.xls';
}
</script>

<table  class="mainForm">
<tr>
	<th colspan="4"style="font-size:24px; font-family:Georgia" align="center">View Attendence</th> 
	</tr>
<?php include('cons.php') ?>
<?php 
			if(isset($_POST['subject']))
		{
			$subject=$_POST['subject'];
			$class=$_POST['class'];
			$semester=$_POST['semester'];
			$classSession=$_POST['session'];
			$rollNo=$_POST['rollno'];
			 
	
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
<h1 align="center"><a href="javascript:void(0);" onClick="download();">Attendence Report</a></h1>
<?php
/*
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	* Developed By : [ Saqib Sattar ] *
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
*/
include('cons.php'); 
require_once("excelwriter.class.php");

$excel=new ExcelWriter("report.xls");
if($excel==false)	
echo $excel->error;

$myArr=array("S.No.","Subject","Date","status");
$excel->writeLine($myArr);
$rollNo=$_POST['rollno'];
$subject=$_POST['subject'];
$qry=mysql_query("select * from attendence where subject='$subject' and rollno='$rollNo'");
if($qry!=false)
{
	$i=1;
	while($res=mysql_fetch_array($qry))
	{
		$myArr=array($i,$res['subject'],$res['date'],$res['status']);
		$excel->writeLine($myArr);
		$i++;
	}
}
?>
<?php include ('footer.php')?>