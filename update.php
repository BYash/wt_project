<html>
<head>
	<title>Administrator</title>
</head>
	<body style="text-align: center;">
<script type="text/javascript">
function updstf()
{
<?php
	include 'db_connections/db_connect.php';
$ed=$_POST['empid'];
$en=$_POST['ename'];
$exp=$_POST['expr'];
$salr=$_POST['sal'];
$dsg=$_POST['desg'];
$adr=$_POST['addr'];
$mob=$_POST['mobno'];
$emd=$_POST['e_id'];
$sqlquery="update employee set e_name='$en',designation='$dsg',salary='$salr',experience='$exp',address='$adr',contact_no='$mob',email_id='$emd' where employee.emp_id='$ed'";
if(mysqli_query($conn,$sqlquery))
{
	?>
	<?php
}
else
{
	echo mysqli_error($conn);
}
?>
</script>
		<form action="" method="post">
			<table align="center">
				<tr>	<td>Employee-id</td><td><input type="text" name="empid"></td></tr>
				<tr>	<td>Employee Name</td><td><input type="text" name="ename"></td></tr>
				<tr>	<td>Designation</td><td><input type="text" name="desg"></td></tr>
				<tr>	<td>Salary</td><td><input type="text" name="sal"></td></tr>
				<tr>	<td>Experience</td><td><input type="text" name="expr"></td></tr>
				<tr>	<td>Address</td><td><textarea rows="8" cols="30" name="addr"></textarea></td></tr>
				<tr>	<td>Contact Number</td><td><input type="text" name="mobno"></td></tr>
				<tr>	<td>Email-id</td><td><input type="text" name="e_id"></td></tr>
	 </table>
	 <input type="submit" value="update" onclick="updstf()">
		</form>
	</body>
</html>