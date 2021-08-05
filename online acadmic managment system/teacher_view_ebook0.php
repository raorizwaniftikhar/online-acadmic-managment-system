<?php include ('header_afterteacherlogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['teacher_login'])))
{
header("location: teacher_login.php");
}
?>
<html>
<head>
<title>view Ebook</title>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table  class="mainForm">
	<tr>
	<th colspan="2" style="font-size:24px; font-family:Georgia" align="center">View Ebook</th> 
	</tr>
                       <?php
					    if (isset($_POST['tname']))
						{
$tname=$_POST['tname'];	

$connect=mysql_connect("localhost","root","")or die("unable to connect to server");
$connectdb=mysql_select_db("oams",$connect)or die("unable to connect to database");
$sql="select * from upload_ebook where teacher_name='".$tname."'";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?>
       <tr><th>Title:</th><td><?php echo $row['title'];?></td></tr>
		<tr><th>Teacher Name:</th><td><?php echo $row['teacher_name'];?></td></tr>
		<tr><th>View:</th><td><a href="<?php echo $row['location'];?>"><?php echo $row['title']; ?></a></td></tr>
<?php
       }
	    mysql_close($connect);
		}
       ?>
</table>
</body>
</html>
<?php include('footer.php')?>