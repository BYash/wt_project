<html>
<head>
	<title>SkyNet-Cable & Broadband</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Share:700|Graduate|Patrick+Hand+SC">
	<link href="images/logo.png" rel="icon" />
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
</head>
	<body>
		<?php include 'header/header.php' ?>
		<script type="text/javascript">
		function regst() {
				// body...
		<?php
		include 'db_connections/db_connect.php';
		$fn='';$ln='';$adr='';$ema='';$mob='';$sques='';$sans='';$pwd='';$un='';
		if(isset($_POST['fname']))
		{
		$fn=$_POST['fname'];
		}

		if(isset($_POST['lname']))
		{
		$ln=$_POST['lname'];
		}

		if(isset($_POST['address']))
		{
		$adr=$_POST['address'];
		}

		if(isset($_POST['email']))
		{
		$ema=$_POST['email'];
		}

		if(isset($_POST['mobno']))
		{
		$mob=$_POST['mobno'];
		}

		if(isset($_POST['ques']))
		{
		$sques=$_POST['ques'];
		}

		if(isset($_POST['ans']))
		{
		$sans=$_POST['ans'];
		}

		if(isset($_POST['password']))
		{
		$pwd=$_POST['password'];
		}

		if(isset($_POST['uname']))
		{
		$un=$_POST['uname'];
		}

		$sqlq1="insert into customer(fname,lname,email_id,address,mobile_no) values('$fn','$ln','$ema','$adr','$mob')";


		if(mysqli_query($conn,$sqlq1))
		{
			echo("Record inserted successfully!");
		}
		else
		{
			echo mysqli_error($conn);
		}
		?>
			}
		</script>
	<form action="" method="post">
		<fieldset>
			<legend align="center">R.F.</legend>
			<table align="center">
       		<tr> <td>Username</td><td><input type="text" name="uname"></td></tr>
			<tr> <td>F-Name:</td><td><input type="text" name="fname"></td></tr>
			<tr> <td>L-Name:</td><td><input type="text" name="lname"></td></tr>
			<tr> <td>Address:</td><td><textarea rows="6" cols="8" name="address"></textarea></td></tr>
			<tr> <td>Email:</td><td><input type="text" name="email"></td></tr>
			<tr> <td>Mobile:</td><td><input type="text" name="mobno"></td></tr>
       		<tr> <td>Password:</td><td><input type="password" name="password"></td></tr>
       		<tr> <td>Security Question</td><td><input type="text" name="ques"></td></tr>
       		<tr> <td>Security Answer</td><td><input type="text" name="ans"></td></tr>
 			<tr> <td><input type="submit" value="submit" onclick="regst()"></td></tr>
 			</table>
        </fieldset>
	</form>
		<?php include 'footer/footer.html' ?>
	</body>
</html>