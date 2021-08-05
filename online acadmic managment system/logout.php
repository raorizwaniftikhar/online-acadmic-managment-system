<?php
session_start();
if(isset($_SESSION['user_login']))
{
$_SESSION['user_login']=NULL;
unset($_SESSION['user_login']);
}
?>

<?php include ('header-logout.php')?>
<html>
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table  class="mainForm">
<th align="center"><?php echo "Student Successfully LogOut"?></th></table>
<?php include ('footer.php')?>
