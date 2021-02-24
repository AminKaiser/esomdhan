<?php
	require('dbconn.php');
	session_start();
    if (isset($_POST['login_btn']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM `userinfo` WHERE username='$username' AND password='$password'";
		$result = mysqli_query($con, $query);
		$re = mysqli_fetch_assoc($result);
		
		if (mysqli_num_rows($result) == 1)
		{ 
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $re['id'];
			header("Location: hello.php"); // Redirect user to hello.php
		}
	    else
	    {
			header("Location: Signin.php");
	    }
	}		
?>

		