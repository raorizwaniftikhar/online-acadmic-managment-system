<?php include ('header_afteruserlogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['user_login'])))
{
header("location: userlogin.php");
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
 

$title=$_POST['title'];	

$connect=mysql_connect("localhost","root","")or die("unable to connect to server");
$connectdb=mysql_select_db("oams",$connect)or die("unable to connect to database");
$sql="select * from upload_ebook where title='$title'";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?>
       <tr><th>Title:</th><td><?php echo $row['title'];?></td></tr>
		<tr><th>Teacher Name:</th><td><?php echo $row['teacher_name'];?></td></tr>
		<tr><th>View:</th><td><a href="<?php echo $row['location'];?>"><?php echo $row['file_name']; ?></a></td></tr>
<?php
       }
	    mysql_close($connect);
       ?>
</table>
</body>
</html>
<?php include('footer.php')?>