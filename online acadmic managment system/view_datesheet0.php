<?php include ('header_afterclerklogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['login'])))
{
header("location: clerk_login.php");
}
?>
<html>
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table  class="mainForm">
<tr>
	<th colspan="3"style="font-size:24px; font-family:Georgia" align="center">View DateSheet</th> 
	</tr>
                       <?php
					     if(isset($_POST['class']) and (isset($_POST['semester']))and (isset($_POST['session'])))
						{
$class=$_POST['class'];
$semester=$_POST['semester'];	
$session=$_POST['session'];
?>
<?php
$connect=mysql_connect("localhost","root","")or die("unable to connect to server");
$connectdb=mysql_select_db("oams",$connect)or die("unable to connect to database");
$sql="select * from datesheet where (class='".$class."' and semester='".$semester."' and session='".$session."')";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?>


        <tr><th>Class:</th><td colspan="2"><?php echo $row['class'];?></td></tr>
		<tr><th>Semester:</th><td colspan="2"><?php echo $row['semester'];?></td></tr>
		<tr><th>Session:</th><td colspan="2"><?php echo $row['session'];?></td></tr>
		<tr><th>Subject:</th><th>Date:</th><th>Timing:</th></tr>
		<tr><td><?php echo $row['sub1'];?></td><td><?php echo $row['day1'];?></td><td><?php echo $row['timing1'];?></td></tr>
		<tr><td><?php echo $row['sub2'];?></td><td><?php echo $row['day2'];?></td><td><?php echo $row['timing2'];?></td></tr>
		<tr><td><?php echo $row['sub3'];?></td><td><?php echo $row['day3'];?></td><td><?php echo $row['timing3'];?></td></tr>
		<tr><td><?php echo $row['sub4'];?></td><td><?php echo $row['day4'];?></td><td><?php echo $row['timing4'];?></td></tr>
		<tr><td><?php echo $row['sub5'];?></td><td><?php echo $row['day5'];?></td><td><?php echo $row['timing5'];?></td></tr>
		<tr><td><?php echo $row['sub6'];?></td><td><?php echo $row['day6'];?></td><td><?php echo $row['timing6'];?></td></tr>
		
<?php
       }
	    mysql_close($connect);
	   }
       ?>
</table>
</body>
</html>
<?php include ('footer.php')?>