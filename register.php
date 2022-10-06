<?php
include("setting.php");
$name=$_POST['name'];
$email=$_POST['email'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$sid=$_POST['sid'];
$pas=sha1($_POST['pass']);
if($name==NULL || $email==NULL || $sem==NULL || $branch==NULL || $sid==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$sql=mysqli_query($set,"INSERT INTO students(sid,name,branch,sem,password,email) VALUES('$sid','$name','$branch','$sem','$pas','$email')");
	if($sql)
	{
		$msg="Successfully Registered";
	}
	else
	{
		$msg="User Already Exists";
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

<span class="SubHead">Student Registration</span>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="4" cellspacing="4" class="table">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Name : </td><td><input type="text" name="name" class="fields" placeholder="Enter Full name" required="required" size="25" /></td></tr>
<tr><td class="labels">Email ID : </td><td><input type="email" name="email" class="fields" placeholder="Enter Email ID" required="required" size="25" /></td></tr>
<tr><td class="labels">Sem : </td>
<td>
<select name="sem" class="fields" required>
<option value="" disabled="disabled" selected="selected">- - Select Sem - -</option>
<option value="1">First Sem</option>
<option value="2">Second Sem</option>
<option value="3">Third Sem</option>
<option value="4">Fourth Sem</option>
<option value="5">Fifth Sem</option>
<option value="6">Sixth Sem</option>
<option value="7">Seventh Sem</option>
<option value="8">Eighth Sem</option>
</select>
</td></tr>

<tr><td class="labels">Branch : </td>
<td>
<select name="branch" class="fields" required>
<option value="" disabled="disabled" selected="selected">- - Select Branch - -</option>
<option value="Computer Engineering">Computer Engineering</option>
<option value="Electronics Engineering">Electronics Engineering</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Information Technology">Information Technology</option>
</select>
</td></tr>
<tr><td class="labels">Student ID : </td><td><input type="text" name="sid" class="fields" placeholder="Enter Student ID" required="required" size="25" /></td></tr>
<tr><td class="labels">Password : </td><td><input type="password" name="pass" class="fields" placeholder="Enter Password" required="required" size="25" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Register" class="submit" /></td></tr>
</table>
</form><br />
<br />
<a href="index.php" class="link">Go Back</a>
<br />
<br />

</div>
</div>
</body>
</html>