<?php include ('header.php')?>
<html>
<head><html>
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body></head>
<body>
<table  class="mainForm">
	<tr>
	<th colspan="4" style="font-size:24px; font-family:Georgia" align="center">Password</th> 
	</tr>
                       <?php
$email=$_POST['email'];
$squestion=$_POST['squestion'];	
$sanswer=$_POST['sanswer'];
?>
<?php
$connect=mysql_connect("localhost","root","")or die("unable to connect to server");
$connectdb=mysql_select_db("oams",$connect)or die("unable to connect to database");
$sql="select * from bcs_mcs where (email='".$email."' and squestion='".$squestion."' and sanswer='".$sanswer."')";
$result = mysql_query($sql);
while($row=mysql_fetch_array($result))
{
?>


        <tr><th>Email:</th><td colspan="3"><?php echo $row['email'];?></td></tr>
		<tr><th>Password:</th><td colspan="3"><?php echo base64_decode($row['password']); ?></td></tr>
		
		
<?php
       }
	    mysql_close($connect);
       ?>
</table>
</body>
</html>
<?php include ('footer.php')?>