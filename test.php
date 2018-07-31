$que="SELECT * FROM customer,subscription_info WHERE uname='$user'";
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
				      echo "<tr><td>Address:</td><td><textarea rows="6" cols="8" name="address">$ar</textarea></td></tr>";
				      echo "<tr><td>Mobile-no:</td><td>$mobn</td></tr>";
				      echo "<tr><td>Email-id:</td><td>$ema</td></tr>";
				      echo "<tr><td>Username:</td><td>$user</td></tr>";
				  }
}
