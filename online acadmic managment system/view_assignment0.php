<?php include ('header_afteruserlogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['user_login'])))
{
header("location:user_login.php");
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
	<th colspan="2" style="font-size:24px; font-family:Georgia" align="center">View Assignment</th> 
	</tr>
 <?php include('cons.php') ?>
<?php 
		if(isset($_POST['subject'])&&($_POST['assigno']))
		{
			$subject=$_POST['subject'];
			$assignmentNo=$_POST['assigno'];
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
$sql="select * from upload_assignment where (class='".$class."' and semester='".$semester."' and session='".$classSession."'and subject='".$subject."'and assignment_no='".$assignmentNo."')";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?>


        <tr><th>Class:</th><td><?php echo $row['class'];?></td></tr>
		<tr><th>Semester:</th><td><?php echo $row['semester'];?></td></tr>
		<tr><th>Session:</th><td><?php echo $row['session'];?></td></tr>
		<tr><th>Subject:</th><td><?php echo $row['subject'];?></td></tr>
		<tr><th>Assignemt:</th><td><?php echo $row['assignment_no'];?></td></tr>
		<tr><th>View:</th><td><a href="<?php echo $row['location'];?>" target="_blank"><?php echo $row['title']; ?></a></td></tr>
		
<?php
       }
	    mysql_close($connect);
		}
		
       ?>
</table>
</body>
</html>
<?php include ('footer.php')?>