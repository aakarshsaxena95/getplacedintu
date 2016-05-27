
<!DOCTYPE HTML>
<html>
<head>
<title>Simple Login Form</title>
<meta charset="UTF-8" />
<meta name="Designer" content="PremiumPixels.com">
<meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
<link rel="stylesheet" type="text/css" href="css1/reset.css">
<link rel="stylesheet" type="text/css" href="css1/structure.css">
</head>

<body>
<h4 style="text-align:center"><strong>Admin login</strong></h4>
<form class="box login" method="post">
	<fieldset class="boxBody">
	  <label>Username</label>
	  <input type="text" name="username" tabindex="1" placeholder="" required>
	  <label><a href="#" class="rLink" tabindex="5">Forget your password?</a>Password</label>
	  <input type="password" name="password" tabindex="2" required>
	</fieldset>
	<footer>
	  <label><input type="checkbox" tabindex="3">Keep me logged in</label>
	  <input type="submit" name="submit" class="btnLogin" value="Login" tabindex="4">
	</footer>
</form>
<?php $flag1=0; $flag2=0;
include('connection.php');
if(isset($_POST['submit']))
{
	$un=mysql_real_escape_string($_POST['username']);
	$pass=mysql_real_escape_string($_POST['password']);
	$q="select * from admin";
	$r=mysql_query($q);
	while($row1=mysql_fetch_array($r))
	{
		if($un==$row1['User_id'])
			$flag1=1;
		if($pass==$row1['Password'])
			$flag2=1;
	}
	$flag=$flag1+$flag2;
	if($flag==2)
	{	session_start();
	$_SESSION['name']=$un;
		header("location:admin.php");}
	else
		echo "<p style='text-align:center'><strong>INVALID LOGIN DETAILS</strong></p>";
}
?>

</body>
</html>
