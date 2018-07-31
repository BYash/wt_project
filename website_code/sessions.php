<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// Selecting Database
include 'db_connections/db_connect.php';
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query("select uname from user_account where uname='$user_check'", $conn);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($conn); // Closing Connection
header('Location: profile.php'); // Redirecting To Home Page
}
?>