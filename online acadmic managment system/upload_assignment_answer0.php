<?php include ('header_afteruserlogin.php')?>
<?php
session_start();
if(!(isset($_SESSION['user_login'])))
{
header("location: user_login.php");
}
?>
<html>
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
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
	$fileName = $_FILES['file']['name'];
$tmpName  = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileType = $_FILES['file']['type'];
	
	
	if( $_FILES["file"]["type"]=='application/pdf')
{
if ($_FILES["file"]["error"] > 0)
{
echo "Error: " . $_FILES["file"]["error"] . "<br />";
}

    else
    if (file_exists("assignment_answer/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
	  echo " Assignmet doesnt uploaded";
      }
	  else
      {
	  $location="assignment_answer/" . $_FILES["file"]["name"];
      move_uploaded_file($_FILES["file"]["tmp_name"],"assignment_answer/" . $_FILES["file"]["name"]);
  
  $sql="INSERT INTO student_upload_assignment(class,semester,session,roll_no,subject,assignment_no,title,start_date,submission_date,name, size, type,location)VALUES('$_POST[class]',
  '$_POST[semester]','$_POST[session]','$_POST[rollno]','$_POST[subject]','$_POST[assigno]','$_POST[title]','$_POST[sdate]','$_POST[sbdate]','$fileName', '$fileSize', '$fileType','$location')";
 
 mysql_query($sql) or die('Error, query failed'); 

}
}
else
  {
   die("That format is not allowed!");
  }
mysql_close($con);
}
//verify page;
echo"Assignment Answer successfully uploaded";
?>
</body>
</html>
 <?php include ('footer.php')?>