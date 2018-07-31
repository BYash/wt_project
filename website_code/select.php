<html>
<head>
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Share:700|Graduate|Patrick+Hand+SC">
	<link href="images/logo.png" rel="icon" />
</head>
<?php
include 'db_connections/db_connect.php';
$sqlquery="select * from employee";
$result=mysqli_query($conn,$sqlquery);
?>
	<body align="center">
	<?php include 'header/header.php' ?>
		<h1 id="Heading">Admin Page</h1>

		<hr>
			<table align="center" border="1px" cellpadding="5px">
				<tr>	<th>Employee id</th><th>Employee Name</th><th>Designation</th><th>Salary</th><th>Experience</th></tr>
				<?php
				if(mysqli_num_rows($result) > 0) {
				    while ($row = mysqli_fetch_assoc($result)) {
				        ?>
				        <tr>
				            <td><?php echo $row['emp_id']; ?></td>
				            <td><?php echo $row['e_name']; ?></td>
				            <td><?php echo $row['designation']; ?></td>
				            <td><?php echo $row['salary']; ?></td>
				            <td><?php echo $row['experience']; ?></td>
				        </tr>
				        <?php
				    }
				}
				?>
				</table>
	<?php include 'footer/footer.html' ?>
	</body>
</html>