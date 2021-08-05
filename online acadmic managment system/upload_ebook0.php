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
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php

$sTargetPath = 'teacher/'.((isset($_SESSION['teacher_login']) && is_string($_SESSION['teacher_login']))? $_SESSION['teacher_login'].'/' : ''); 
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("oams", $con);
  
  //$sql="insert into upload_ebook(title,teacher_name)VALUES('$_POST[title]',
 // '$_POST[tname]')";
 // mysql_query($sql);
 
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
    if (file_exists("$sTargetPath" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
	  echo " Ebook doesnt uploaded";
      }
	  else
      {
	  $location="$sTargetPath" . $_FILES["file"]["name"];
      move_uploaded_file($_FILES["file"]["tmp_name"],"$sTargetPath" . $_FILES["file"]["name"]);
    $sql="insert into upload_ebook(title,teacher_name,file_name,size,type,location)VALUES('$_POST[title]',
  '$_POST[tname]','$fileName','$fileSize','$fileType','$location')";
  
 // $sql="insert into upload_ebook(title,teacher_name,file_name, filesize, type,location)VALUES('$_POST[title]',
//  '$_POST[tname]','$_POST[file_name]', '$_POST[file_size]', '$_POST[file_type]','$_POST[location]')";
 
 mysql_query($sql) or die('Error, query failed'); 

}
}
else
  {
   die("That format is not allowed!");
  }
mysql_close($con);

//verify page;
echo"Ebook Successfully uploaded";

}
?>
</body>
</html>
 <?php include ('footer.php')?>