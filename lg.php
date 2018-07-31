<?php
session_start(); // Starting Session
include 'db_connections/db_connect.php';
 // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// SQL query to fetch information of registerd users and finds user match.
$query="SELECT * from customer where passwd='$password' AND uname='$username'";
$result=mysqli_query($conn,$query);
if(mysqli_query($conn,$query))
	$rows = mysqli_num_rows($result);
if ($rows == 1) {
	echo "dtex";
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
}
else {
echo "<script language='javascript'>
			alert('Username or password is invalid!');
			location.href = 'login.php';
					</script>";
}
mysqli_close($conn); // Closing Connection
}
}
?>