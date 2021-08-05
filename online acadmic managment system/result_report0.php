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
	window.location='result.xls';
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
$sql="select * from student_result where (class='".$class."' and semester='".$semester."' and session='".$classSession."'and subject='".$subject."'and rollno='".$rollNo."')";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?>


        <tr><th>Class:</th><td colspan="3"><?php echo $row['class'];?></td></tr>
		<tr><th>Semester:</th><td colspan="3"><?php echo $row['semester'];?></td></tr>
		<tr><th>Session:</th><td colspan="3"><?php echo $row['session'];?></td></tr>
		<tr><th>Subject:</th><td colspan="3"><?php echo $row['subject'];?></td></tr>
		<tr><th>Roll No:</th><td colspan="3"><?php echo $row['rollno'];?></td></tr>
		<tr><th>Mid</th><th>Final</th><th>Sessional</th><th>Total</th>
		<tr><td><?php echo $row['mid_marks'];?></td><td><?php echo $row['final_marks'];?></td><td><?php echo $row['sessional_marks'];?></td><td><?php echo $row['total'];?></td></tr>
		
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

$excel=new ExcelWriter("result.xls");
if($excel==false)	
echo $excel->error;

$myArr=array("S.No.","Subject","Roll No","Mid","Final","Sessional","Total");
$excel->writeLine($myArr);
$rollNo=$_POST['rollno'];
$subject=$_POST['subject'];
$qry=mysql_query("select * from student_result where subject='$subject' and rollno='$rollNo'");
if($qry!=false)
{
	$i=1;
	while($res=mysql_fetch_array($qry))
	{
		$myArr=array($i,$res['mid_marks'],$res['final_marks'],$res['sessional_marks'],$res['total']);
		$excel->writeLine($myArr);
		$i++;
	}
}
?>
<?php include ('footer.php')?>