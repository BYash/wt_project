<html>
<head>
	<title>Administrator</title>
</head>
	<body style="text-align: center;">
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
	</body>
</html>