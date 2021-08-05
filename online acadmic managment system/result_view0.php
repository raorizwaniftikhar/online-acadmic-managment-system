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
	<th colspan="4" style="font-size:24px; font-family:Georgia" align="center">Result</th> 
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
</body>
</html>
<?php include ('footer.php')?>