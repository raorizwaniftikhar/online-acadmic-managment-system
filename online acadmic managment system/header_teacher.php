<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>Salt and Soap template</title>
<script type="text/javascript">
function UR_Start() 
{
	UR_Nu = new Date;
	UR_Indhold = showFilled(UR_Nu.getHours()) + ":" + showFilled(UR_Nu.getMinutes()) + ":" + showFilled(UR_Nu.getSeconds());
	document.getElementById("ur").innerHTML = UR_Indhold;
	setTimeout("UR_Start()",1000);
}
function showFilled(Value) 
{
	return (Value > 9) ? "" + Value : "0" + Value;
}

</script>
</head>

<body onload="UR_Start()">
<div id="container">
<div id="logo">
			<h1><a href="www.bzu.edu.pk" target="_blank">Department of CS </a></h1>
		</div>
	<div id="header">
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="979" height="232" id="tech" align="middle">
		<param name="allowScriptAccess" value="sameDomain" />
		<param name="movie" value="mybanner.swf" />
		<param name="quality" value="high" />
		<embed src="mybanner.swf" quality="high" width="979" height="232" name="tech" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
	</object>
		
	</div>
	<div id="border">
	<div id="main">
			<div id="left">
				<div id="menu">
					<ul>
						<p align="center" style="font-family:Georgia; font-size:50px">Features</p>
						<li><a href="teacher_login.php"> Teacher Login</a></li>
						<li><a href="upload_teacher_assignment.php">Upload Assignment</a></li>
						<li><a href="upload_assignment_marks.php">Upload Assignment Marks</a></li>
						<li><a href="upload_ebook.php">Upload EBook</a></li>
						<li><a href="attendence.php">Upload Attendence</a></li>
						<li><a href="view_teacher_assignment.php">View Student Assignment</a></li>
						<li><a href="teacher_view_ebook.php">View EBook </a></li>
						<li class="lastchild"><a href="logout_teacher.php">LogOut</a></li>
					</ul>
				</div>
				<div id="menubottom">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="#">About us</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
			<div id="right">
				<div class="content">