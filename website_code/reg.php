<?php
		include 'db_connections/db_connect.php';
		$un=$_POST['uname'];
		$pwd=$_POST['pass1'];
		$s_ques=$_POST['ques'];
		$s_ans=$_POST['ans'];
	$sqlquery="insert into customer(uname,passwd,s_quest,s_ans) values('$un','$pwd','$s_ques','$s_ans')";
		if(mysqli_query($conn,$sqlquery))
		{
			echo "<script language='javascript'>
			if (alert('Registered !')!=true) {
			location.href = 'index.php';
			}
					</script>";
		}
		else
		{
			echo mysqli_error($conn);
		}
?>