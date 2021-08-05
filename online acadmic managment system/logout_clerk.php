<?php
session_start();
if(isset($_SESSION['login']))
{
$_SESSION['login']=NULL;
unset($_SESSION['login']);
}
?>

<?php include ('header-logout.php')?>
<html>
<head>
<LINK href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table  class="mainForm">
<th align="center"><?php echo "Clerk Successfully LogOut"?></th></table>
<?php include ('footer.php')?>
