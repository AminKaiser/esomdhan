<?php
	require('dbconn.php');
	include("authentication.php");
	//include("message.php");
	$to=$_REQUEST['id'];
	$from = $_SESSION['id'];
	$message = $_['message'];
		
		$query ="INSERT into `message` (fromid,toid,message) VALUES ('$from,'$to','$message')";
		
		$result = mysqli_query($con,$query);
		if($result)
		{
			header("Location: message.php"); 
		}
	
		else	
		{
			echo "failed";
		}	
?>