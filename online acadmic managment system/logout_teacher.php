<?php
session_start();
if(isset($_SESSION['teacher_login']))
{
$_SESSION['teacher_login']=NULL;
unset($_SESSION['teacher_login']);
}
?>
<?php include ('teacher_header.php')?>

<html>
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table  class="mainForm">
<th align="center"><?php echo "You Are Successfully LogOut"?></th></table>
<?php include ('footer.php')?>


