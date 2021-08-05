<?php include ('header_afterteacherlogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['teacher_login'])))
{
header("location:teacher_login.php");
}
?>
<html>
<head><html>
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body></head>
<body>
<table  class="mainForm">
	<tr>
	<th colspan="2" style="font-size:24px; font-family:Georgia" align="center">View Student Assignment</th> 
	</tr>
                       <?php
					   if(isset($_POST['class']) and (isset($_POST['semester']))and (isset($_POST['session'])) and (isset($_POST['rollno']))and (isset($_POST['subject'])) and (isset($_POST['assigno'])))
						{
$class=$_POST['class'];
$semester=$_POST['semester'];	
$session=$_POST['session'];
$rollno=$_POST['rollno'];
$subject=$_POST['subject'];
$assigno=$_POST['assigno'];
?>
<?php
$connect=mysql_connect("localhost","root","")or die("unable to connect to server");
$connectdb=mysql_select_db("oams",$connect)or die("unable to connect to database");
//$sql="select * from student_upload_assignment";
$sql="select * from student_upload_assignment where (class='".$class."' and semester='".$semester."' and session='".$session."'and roll_no='".$rollno."'and subject='".$subject."'and assignment_no='".$assigno."')";
$result = mysql_query($sql) or die('not exi');

while($row=mysql_fetch_array($result))
{

?>

        <tr><th>Class:</th><td><?php echo $row['class'];?></td></tr>
		<tr><th>Semester:</th><td><?php echo $row['semester'];?></td></tr>
		<tr><th>Session:</th><td><?php echo $row['session'];?></td></tr>
		<tr><th>Roll No:</th><td><?php echo $row['roll_no'];?></td></tr>
		<tr><th>Assignemt:</th><td><?php echo $row['assignment_no'];?></td></tr>
		<tr><th>View:</th><td><a href="<?php echo $row['location'];?>"><?php echo $row['title']; ?></a></td></tr>
		
<?php
       }
	    mysql_close($connect);
		}
       ?>
</table>
</body>
</html>
<?php include ('footer.php')?>