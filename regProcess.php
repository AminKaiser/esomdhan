<?php
	require('dbconn.php');
	if(isset($_POST['register_btn']))
	{
		$username = $_POST['username'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$query="INSERT into `userinfo` (username, mobile, email, password) VALUES ('$username','$mobile','$email','$password')";
		
		$result = mysqli_query($con,$query);
		if($result)
		{
			header("Location: Signin.php");
		}	
	}
	else	
	{
		echo "failed";
	}
	
?>