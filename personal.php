<?php
session_start();
$user=$_SESSION['login_user'];
?>
<html>
<head>
<title>Profile | <?php echo"$user"; ?></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Share:700|Graduate|Patrick+Hand+SC">
	<link href="images/logo.png" rel="icon" />
</head>
<body>
	<?php 
	 ?>

	<?php include 'header/header.php' ?>
	
	<table cellpadding="5px" border="1px" align="center">
<?php
include 'db_connections/db_connect.php';
	$que="SELECT * FROM customer WHERE uname='$user'";
	$result=mysqli_query($conn,$que);
				if(mysqli_query($conn,$que)) {
				    while ($row = mysqli_fetch_assoc($result)){
				          $id=$row['cus_id'];
				          $fn=$row['fname'];
				          $ln=$row['lname'];
				          $ar=$row['address'];
				          $mobn=$row['mobile_no'];
				          $ema=$row['email_id'];
				      echo "<tr><td>Customer-id:</td><td>$id</td></tr>";
				      echo "<tr><td>First-Name:</td><td>$fn</td></tr>";
				      echo "<tr><td>Last-Name:</td><td>$ln</td></tr>";
				      echo "<tr><td>Address:</td><td>$ar</td></tr>";
				      echo "<tr><td>Mobile-no:</td><td>$mobn</td></tr>";
				      echo "<tr><td>Email-id:</td><td>$ema</td></tr>";
				      echo "<tr><td>Username:</td><td>$user</td></tr>";
				  }
}
else
	echo "error";

?>
</table>

<b id="logout"><a href="logout.php">Log Out</a></b>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $fn; ?></i></b>
</div>
<?php include 'footer/footer.html' ?>
</body>
</html>
