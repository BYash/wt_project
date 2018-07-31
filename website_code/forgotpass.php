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

         if( document.myForm.usrname.value == "" )
         {
            alert( "Please provide your username!" );
            document.myForm.usrname.focus() ;
            return false;
         }
         if (document.myForm.pass1.value!=document.myForm.pass2.value && document.myForm.pass1.value!="" && document.myForm.pass2.value!="") {
            alert("Passwords do not match");
            return false;
         }else if(document.myForm.pass1.value==""){
            alert("Please enter password!");
            return false;
          }else if(document.myForm.pass1.value!="" && document.myForm.pass1.value.length<7){
            alert("Password should be atleast 8 characters!");
            return false;
         }else if(document.myForm.pass2.value==""){
            alert("Please confirm password!");
            return false;
         }
         if( document.myForm.ans.value == "" )
         {
            alert( "Please provide security answer!" );
            document.myForm.ans.focus() ;
            return false;
         }
         return( true );
      }
</script>
</head>
	<body>
		<?php include 'header/header.php' ?>
	<form action="fgp.php" method="POST" name="myForm" onsubmit="return(validate());">
		<fieldset>
			<legend align="center">Forgot Password</legend>
			<table align="center">
       		<tr> <td>Username</td><td><input type="text" name="usrname"></td></tr>
       		<tr> <td>Security Answer</td><td><input type="password" name="ans"></td></tr>
       		<tr> <td>New Password</td><td><input type="password" name="pass1"></td></tr>
       		<tr> <td>Confirm password</td><td><input type="password" name="pass2"></td></tr>
 			</table><br>
 			<input type="submit" value="Change password">
        </fieldset>
	</form>
		<?php include 'footer/footer.html' ?>
	</body>
</html>