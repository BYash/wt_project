<?php
		include 'db_connections/db_connect.php';
		
		$un=$_POST['usrname'];
		$pwd=$_POST['pass1'];
		$s_answ=$_POST['ans'];
		$squer="select * from customer where uname='$un'";
		$sqlquery="update customer set passwd='$pwd' where s_ans='$s_answ' AND uname='$un'";
		$result=mysqli_query($conn,$squer);
		$row = mysqli_fetch_assoc($result);
		$s_answer=$row['s_ans'];
		if ($s_answ==$s_answer) {
		if(mysqli_query($conn,$sqlquery))
		{
			echo "<script language='javascript'>
			if (alert('Password changed successfully !')!=true) {
			location.href = 'login.php';
			}
					</script>";
		}
		else
		{
			echo mysqli_error($conn);
		}
		}else{

		echo "<script language='javascript'>
			if (alert('Username or Security answer invalid !')!=true) {
			location.href = 'forgotpass.php';
			}
					</script>";	
		}
?>