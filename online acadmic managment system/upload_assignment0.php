<?php include ('../header_teacher.php')?>
<?php
session_start();
if(!(isset($_SESSION['teacher_login'])))
{
header("location: teacher_login.php");
}
?>
<html>
<head>
<LINK href="../style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("oams", $con);
  
   if(isset($_POST['upload']) && $_FILES['file']['size'] > 0)
{
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
	$fileName = $_FILES['file']['name'];
$tmpName  = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileType = $_FILES['file']['type'];
	
	
	if( $_FILES["file"]["type"]=='application/msword')
{
if ($_FILES["file"]["error"] > 0)
{
echo "Error: " . $_FILES["file"]["error"] . "<br />";
}

    else
    if (file_exists("assignment/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
	  echo " Thesis doesnt uploaded";
      }
	  else
      {
	  $location="assignment/" . $_FILES["file"]["name"];
      move_uploaded_file($_FILES["file"]["tmp_name"],"assignment/" . $_FILES["file"]["name"]);
  
  $sql="INSERT INTO upload_assignment(class,semester,session,subject,assignment_no,title,start_date,submission_date,total_marks,name, size, type,location)VALUES('$_POST[class]',
  '$_POST[semester]','$_POST[session]','$_POST[subject]','$_POST[assigno]','$_POST[title]','$_POST[sdate]','$_POST[sbdate]','$_POST[total]','$fileName', '$fileSize', '$fileType','$location')";
 
 mysql_query($sql) or die('Error, query failed'); 

}
}
else
  {
   die("That format is not allowed!");
  }
mysql_close($con);

//verify page;
header("location:upload_assignment.php");
}
?>
</body>
</html>
 <?php include ('../footer.php')?>