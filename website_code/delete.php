<html>
<head>
	<title>Administrator</title>
</head>
	<body style="text-align: center;">

		<form action="" method="POST">
			<table cellpadding="5px" border="1px" align="center">
				<tr>
					<th colspan="2">Delete staff</th>
				</tr>
				<tr>
					<td><input type="text" name="emid"></td>
		 		<td><input type="submit" value="delete" onclick="delstf()"></td>
				</tr>
			</table>
		</form>
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
	</body>
</html>