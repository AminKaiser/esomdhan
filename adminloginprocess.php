<?php
	require('dbconn.php');
	session_start();
    if (isset($_POST['login_btn']))
	{
		$usertype = $_POST['usertype'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$query = "SELECT * FROM `admin` WHERE usertype = '$usertype' AND username='$username' AND password='$password'";
		$result = mysqli_query($con, $query);
		$re = mysqli_fetch_assoc($result);
		
		if (mysqli_num_rows($result) == 1)
		{ 
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $re['id'];
			$_SESSION['usertype'] = $usertype;
			header("Location: adminhome.php"); // Redirect user to adminhome.php
		}
	    else
	    {
			header("Location: admin.php");
	    }
	}		
?>

		