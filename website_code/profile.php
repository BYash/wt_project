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
	<?php include 'header/header.php' ?>
<table cellpadding="5px" border="1px" align="left" style="margin-left: 10%">
<?php
include 'db_connections/db_connect.php';

$que="SELECT * FROM customer,subscription_info WHERE uname='$user'";
$result=mysqli_query($conn,$que);
				if(mysqli_query($conn,$que)) {
				    while ($row = mysqli_fetch_assoc($result)){
				          $id=$row['cus_id'];
				          $fn=$row['fname'];
				          $sid=$row['sub_id'];
				          $sbdt=$row['sub_date'];
				          $epdt=$row['exp_date'];
				          $sbst=$row['sub_status'];
				          $pid=$row['pack_id'];
				      echo "<tr><td colspan='2'>Subscription Information</td></tr>";
				      echo "<tr><td>Subscriotion id:</td><td>$sid</td></tr>";
				      echo "<tr><td>Pack-id</td><td>$pid</td></tr>";
				      echo "<tr><td>Subscription date</td><td>$sbdt</td></tr>";
				      echo "<tr><td>Expiry date</td><td>$epdt</td></tr>";
				      echo "<tr><td>Subscription status:</td><td>$sbst</td></tr>";
				      echo "<tr><td colspan='2'></td></tr>";
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
<hr>
<div><a href="personal.php">Personal details</a></div><hr><br>
<?php include 'footer/footer.html' ?>
</body>
</html>
