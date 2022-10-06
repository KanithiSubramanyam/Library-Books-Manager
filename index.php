<?php
include("setting.php");
session_start();
if(isset($_SESSION['sid']))
{
	header("location:home.php");
}
$sid=mysqli_real_escape_string($set,$_POST['sid']);
$pass=mysqli_real_escape_string($set,$_POST['pass']);

if($sid==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$p=sha1($pass);
	$sql=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid' AND password='$p'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['sid']=$_POST['sid'];
		header("location:home.php");
	}
	else
	{
		$msg="Incorrect Details";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Books Manager</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">
<span class="head">Library Books Manager</span><br />
<marquee class="clg" direction="right" behavior="alternate" scrollamount="1">Subramanyam</marquee>
</div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Student Sign In</span>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="4" cellspacing="4" class="table">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Student ID : </td><td><input type="text" name="sid" class="fields" size="25" placeholder="Enter Student ID" required="required" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" name="pass" class="fields" size="25" placeholder="Enter Password" required="required" /></td></tr>
<tr><td colspan="2" align="center" "><input type="submit" value="Sign In" class="submit" /></td></tr>
</table>
</form>
<br />
<br />
<a href="register.php" class="link">Sign Up</a>
<br />
<a href="admin.php" class="link">Admin Sign In</a>

<br />
<br />

</div>
</div>
</body>
</html>