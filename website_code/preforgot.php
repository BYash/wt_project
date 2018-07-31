<html>
<head>
	<title>SkyNet-Cable & Broadband</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Share:700|Graduate|Patrick+Hand+SC">
	<link href="images/logo.png" rel="icon" />
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript">
function validate()
      {

         if( document.myForm.uname.value == "" )
         {
            alert( "Please provide your username!" );
            document.myForm.uname.focus() ;
            return false;
         }
         return( true );
      }
</script>
</head>
	<body>
		<?php include 'header/header.php' ?>
    <?php
      include 'db_connections/db_connect.php';
      $un="";
      if(isset($_POST['uname']))
    {
    $un=$_POST['uname'];
    }
    $sqlquery="select * from customer where uname='$un'";
    if(mysqli_query($conn,$sqlquery))
    {
      echo "";
    }
    else
    {
      echo mysqli_error($conn);
    }
    $result=mysqli_query($conn,$sqlquery);
        if(mysqli_query($conn,$sqlquery))
            $row = mysqli_fetch_assoc($result);
                  $sques=$row['s_quest'];
    ?>
	<form action="" method="POST" name="myForm" onsubmit="return(validate());">
		<fieldset>
			<legend align="center">Forgot Password</legend><br>
      <b>Please provide username to get security question.</b><br>
			<table align="center">
       		<tr> <td>Username</td><td><input type="text" name="uname"></td></tr>
       		<tr> <td>Security Question</td><td><textarea rows="5" cols="20"><?php echo"$sques"; ?></textarea></td></tr>
 			</table><br>
 			<input type="submit" value="Get question">&nbsp;&nbsp;<a href="forgotpass.php">Change password-></a>
        </fieldset>
	</form>
		<?php include 'footer/footer.html' ?>
	</body>
</html>