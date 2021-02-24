<?php
	require('dbconn.php');
	if(isset($_POST['register_btn']))
	{
		$usertype = $_POST['usertype'];
		$username = $_POST['username'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$query="INSERT into `adminapproveinfo` (usertype,username, mobile, email, password) VALUES ('$usertype','$username','$mobile','$email','$password')";
		
		$result = mysqli_query($con,$query);
		if($result)
		{
			header("Location: admin.php");
		}	
	}
	else	
	{
		echo "failed";
	}
	
?>