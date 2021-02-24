<?php
	require('dbconn.php');
	include("authentication.php");
	$id=$_REQUEST['id'];
	$query = "SELECT * from adminapproveinfo where id='".$id."'"; 
	$result = mysqli_query($con,$query);
	$row = mysqli_fetch_assoc($result);
	
	
		$usertype = $row['usertype'];
		$username = $row['username'];
		$mobile = $row['mobile'];
		$email = $row['email'];
		$password = $row['password'];
		
		$query1 ="INSERT into `admin` (usertype,username, mobile, email, password) VALUES ('$usertype','$username','$mobile','$email','$password')";
		
		$result1 = mysqli_query($con,$query1);
		if($result1)
		{
			$query = "DELETE FROM adminapproveinfo WHERE id=$id"; 
			$result = mysqli_query($con,$query);
			header("Location: adminapproval.php"); 
		}
		else	
		{
			echo "failed";
		}	
?>