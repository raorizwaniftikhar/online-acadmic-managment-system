<?php include ('header_afteruserlogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['user_login'])))
{
header("location:user_login.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<LINK href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function ValidateForm(){
	var subject=document.getElementById('subject').value; 
		if(subject=='' || subject=='-select subject-')
			{
				alert('Select your Subject');
				document.getElementById('subject').focus();
				return false;
			}
   
	return true;
 }
</script>
</head>

<body>
<table  class="mainForm">
	<tr>
	<th colspan="2" style="font-size:24px; font-family:Georgia" align="center">Result</th> 
	</tr>
<form method="post" action="result_view0.php" enctype="multipart/form-data" name="myform" onSubmit="return ValidateForm()">
<?php include('cons.php') ?>
<?php 
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
<tr><td>Class:</td>
<td>
	     <?php echo $class ?>
</td></tr>
<tr><td>semester:</td>
<td>
     <?php echo $semester ?>
</td>
<tr><td> Session:</td><td>
 <?php echo $classSession?>
</td></tr>
<tr><td>Subject:</td><td>
<select name="subject" id="subject">
<option>-select subject-</option>
<?php include('cons.php') ?>

		<?php   $sub1='';
		$sub2='';
		$sub3='';
		$sub4='';
		$sub5='';
		$sub6='';
		$qry="SELECT * FROM classes_timetable WHERE class='$class' and semester='$semester' and session='$classSession'";
		$result=mysql_query($qry);
		while($row=mysql_fetch_array($result))
		{
		?>
		     <?php $sub1=$row['sub1'];
			  		 $sub2=$row['sub2'];
					 $sub3=$row['sub3'];
					 $sub4=$row['sub4'];
					 $sub5=$row['sub5'];
					 $sub6=$row['sub6'];?>
		        <?php
		}
		?>
        <option><?php echo $sub1 ?></option>
        <option><?php echo $sub2 ?></option>
        <option><?php echo $sub3 ?></option>
        <option><?php echo $sub4 ?></option>
        <option><?php echo $sub5 ?></option>
        <option><?php echo $sub6 ?></option>
	        </select></td></tr>
<tr><td>Roll No:</td><td><?php echo $rollNo;?></td></tr>
			    <tr align="center"><td colspan="2"><input type="Reset"  style="width:150px"><input type="Submit" value="Submit"  style="width:150px"></td></tr>  <form/>
				 </table>
		  		
</body>
</html>
<?php include ('footer.php')?>