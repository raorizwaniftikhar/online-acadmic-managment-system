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
	<th colspan="4" style="font-size:24px; font-family:Georgia" align="center">View Subjects</font></th> 
	</tr>
           
                        <?php
	
      
        $con=mysql_connect("localhost","root","");
  		if(!$con)
  		{
  			echo " Error is ".mysql_error();
  		}
  		mysql_select_db("oams",$con);
   
  		$qry=mysql_query("Select *from subjects_info");
		?>
					   <tr>
					   <th>No#</th>
					   <th>Subject Name</th>
					   <th>Description</th>
					   <th>Credit Hours</th>
					   </tr>
					   <?php
					    while($row=mysql_fetch_array($qry))
	   {
	   ?>
	    <tr align="center">
		<td><?php echo $row['SubjectId'];?></td>
		<td><?php echo $row['sub_name'];?></td>
		<td><?php echo $row['class'];?></td>
		<td><?php echo $row['credit_hours'];?></td>
		</tr>
		<?php
		      }
	    mysql_close($con);
       ?>
       
</table>
</body>
</html>
<?php include ('footer.php')?>