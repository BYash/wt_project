<html>
<head>
	<title>SkyNet-Cable & Broadband</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Passion+One|Itim|Share:700|Graduate|Patrick+Hand+SC">
	<link href="images/logo.png" rel="icon" />
</head>
<body>
<?php include 'header/header.php' ?>
<?php
include('lg.php');

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<form action="lg.php" method="POST">
			<fieldset>
				<legend align="center">Login Form</legend>
			<table align="center" cellpadding="5px">
			<tr>	<td>U_Name:</td><td><input id="name" name="username" placeholder="username" type="text"></td></tr>

	       <tr>	<td>Password:</td><td><input id="password" name="password" placeholder="**********" type="password"></td></tr>
	       <tr><td><a href="registration2.php">New user?</a></td><td><a href="preforgot.php">Forgot password?</a></td></tr>
	 </table>
	 <input type="submit" name="submit" value="login">
				                  </fieldset>
		</form>
		<?php include 'footer/footer.html' ?>
</body>
</html>