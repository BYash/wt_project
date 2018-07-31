<html>
<head>
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Share:700|Graduate|Patrick+Hand+SC">
	<link href="images/logo.png" rel="icon" />
	<style type="text/css">
	#content{
		width: 80%;
		height: auto;
	}
	#content #incontent{
		display: inline-block;
		padding: 10px 10px 10px 10px;
		border: solid;
		border-width: 2px;
		border-color: #f40;
	}
	</style>
</head>
	<body>
		<?php include 'header/header.php' ?>
		<script type="text/javascript">

 function delstf()
{
<?php
include 'db_connections/db_connect.php';
$empid=$_POST['emid'];
$sqlquery="delete from employee where employee.emp_id='$empid'";
if(mysqli_query($conn,$sqlquery))
{
	echo("Record deleted successfully !");
}
else
{
	echo mysqli_error($conn);
}
?>

</script>
<script type="text/javascript">
function insstf()
{
<?php
	include 'db_connections/db_connect.php';
$en=$_POST['ename'];
$exp=$_POST['expr'];
$salr=$_POST['sal'];
$dsg=$_POST['desg'];
$adr=$_POST['addr'];
$mob=$_POST['mobno'];
$emd=$_POST['e_id'];
$sqlquery="insert into employee(e_name,designation,salary,experience,address,contact_no,email_id) values('$en','$dsg','$salr','$exp','$adr','$mob','$emd')";
if(mysqli_query($conn,$sqlquery))
{
	?>
	<script>alert('Record inserted successfully !');</script>
	<?php
}
else
{
	echo mysqli_error($conn);
}
?>

		</script>
		<h1 id="Heading">Admin Page</h1>

		<hr>

		<h2>Staff Details</h2>
		<div id="content">
		<div id="incontent">
			<form action="" method="post">
			<table align="center">
				<tr>	<td>Employee Name</td><td><input type="text" name="ename"></td></tr>
				<tr>	<td>Designation</td><td><input type="text" name="desg"></td></tr>
				<tr>	<td>Salary</td><td><input type="text" name="sal"></td></tr>
				<tr>	<td>Experience</td><td><input type="text" name="expr"></td></tr>
				<tr>	<td>Address</td><td><textarea rows="8" cols="30" name="addr"></textarea></td></tr>
				<tr>	<td>Contact Number</td><td><input type="text" name="mobno"></td></tr>
				<tr>	<td>Email-id</td><td><input type="text" name="e_id"></td></tr>

	 </table>
	 <input type="submit" value="insert" onclick="insstf()">
		</form>
		</div>
		<div id="incontent">

		<form action="select.php" method="post">
			<table cellpadding="5px">
				<tr>
					<th>Display staff details</th>
				</tr>
				<tr>
					<td><input type="submit" value="display" name="dall"></td>
				</tr>
			</table>
		</form>
		</div>
		<div id="incontent">
		<form action="" method="POST">
			<table cellpadding="5px">
				<tr>
					<th colspan="2">Delete staff</th>
				</tr>
				<tr>
					<td><input type="text" name="emid"></td>
		 		<td><input type="submit" value="delete" onclick="delstf()"></td>
				</tr>
			</table>
		</form>
		</div>
		</div>
		<hr>

		<h2>User Details</h2>
		<div id="content">
		<div id="incontent">

		<form action="select.php" method="post">
			<table cellpadding="5px">
				<tr>
					<th>Display user details</th>
				</tr>
				<tr>
					<td><input type="submit" value="display" name="dall"></td>
				</tr>
			</table>
		</form>
		</div>


		<div id="incontent">
		<form action=" " method="POST">
			<table cellpadding="5px">
				<tr>
					<th colspan="2">Delete user</th>
				</tr>
				<tr>
					<td><input type="text" name="usid" ></td>
					<td><input type="submit" value="delete" onclick=""></td>
				</tr>
			</table>
		</form>
		</div>
		</div>
		<hr>
		<div id="content">
			<h2>Packages</h2>
			<div id="incontent">
			<h3>Insert new packages:</h3>
			<form action="npackages.php" method="POST">
				<table align="center">
				<tr><td>U_Name:</td><td><input type="text" name="uname"></td></tr>
				</table>
		 		<input type="submit" value="submit">
			</form>
			</div>

			<div id="incontent">
			<h3>Update existing packages:</h3>
			<form action="upackages.php" method="POST">
				<table align="center">
				<tr><td>U_Name:</td><td><input type="text" name="uname"></td></tr>
				</table>
		 		<input type="submit" value="submit">
			</form>
			</div>
		</div>

		<hr>

		<div id="content">
		<h2>S T B</h2>
			<div id="incontent">
			<h3>Insert new set-top boxes</h3>
			<form action="nstb.php" method="post">
				<table align="center">
				<tr><td>U_Name:</td><td><input type="text" name="uname"></td></tr>
				</table>
		 		<input type="submit" value="submit">
			</form>
			</div>

			<div id="incontent">
			<h3>Update set-top boxes</h3>
			<form action="ustb.php" method="post">
				<table align="center">
				<tr><td>U_Name:</td><td><input type="text" name="uname"></td></tr>
				</table>
			</form>
			</div>
		</div>
		<?php include 'footer/footer.html' ?>
	</body>
</html>