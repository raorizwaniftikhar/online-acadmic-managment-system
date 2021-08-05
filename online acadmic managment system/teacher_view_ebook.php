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
<script language="javascript">
function validate()
{
if(document.myform.tname.value=="-select name-")
{
alert("Please Select Teacher Name!");
document.myform.tname.focus();
return false;
}
return true;
}
</script>
<script language="javascript">
function validate1()
{
if(document.myform1.title.value=="")
{
alert("Please enter  Title!");
document.myform.title.focus();
return false;
}
return true;
}
</script>
<table  class="mainForm">
	<tr>
	<th colspan="2" style="font-size:24px; font-family:Georgia" align="center">View Ebook</th> 
	</tr>
<form method="post" action="teacher_view_ebook0.php" name="myform" onSubmit="return validate()";>
<tr><th colspan="2">Search By Teacher Name</th></tr>
<tr><td>Teacher Name:</td><td>
<select name="tname">
<option>-select name-</option>
<?php include('cons.php') ?>
<?php
		$qry="Select * from teachers_info";
		$result=mysql_query($qry);
		while($row=mysql_fetch_array($result))
		{
		?>
		      <option><?php echo $row['teacher_name'];?></option>
		        <?php
		}
		?>
	        </select></td></tr>
			     <tr align="center"><td colspan="2"><input type="Reset"  style="width:150px"><input type="Submit" value="Submit"  style="width:150px"></td></tr> 
		  		 </form>
				 </table>
				 
                 
				 <table  class="mainForm">
				 <form action="teacher_view_ebook00.php" method="post" name="myform1" onSubmit="return validate1()";>
				<tr><th colspan="2">Search By Title</th></tr>
                 <tr><td>EBook Title:</td><td ><input type="text"  name="title" size="27%"></td></tr>
			     <tr align="center"><td colspan="2"><input type="Reset"  style="width:150px"><input type="Submit" value="Submit"  style="width:150px"></td></tr> 
		  		 </form>
				 </table>
				 </html> 
<?php include('footer.php')?>