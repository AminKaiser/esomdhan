<?php
	require('dbconn.php');
	include("authentication.php");	
	
	if(isset($_POST['post_btn']))
	{
		$id = $_SESSION['id'];
		$description = $_POST['description'];
		$picture = $_FILES['fileToUpload']['name'];
		$picture = "ProblemPicture/".time()."_".$picture;
		$district = $_POST['district'];
		$upazilla = $_POST['upazilla'];
		$street = $_POST['street'];
		$types = $_POST['types'];
		$city  = $_POST['city'];
		$mention = $_POST['mention'];
		$mention1 = $_POST['mention1'];
		$mention2 = $_POST['mention2'];
		
		if ($_POST['check'] == 'anonymous'){
			$id=12;
			$query="INSERT into `probleminfo` (user_id,description,problempicture, district, upazilla, street, types, city, mention, mention1, mention2) 
			VALUES ('$id','$description','$picture','$district','$upazilla','$street','$types','$city','$mention','$mention1','$mention2')";
		}
		
		else{
			$query="INSERT into `probleminfo` (user_id,description,problempicture, district, upazilla, street, types, city, mention, mention1, mention2) 
			VALUES ('$id','$description','$picture','$district','$upazilla','$street','$types','$city','$mention','$mention1','$mention2')";
		}
		
		move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$picture);
		
		$result = mysqli_query($con,$query);
		if($result)
		{
			header("Location: hello.php");
			
		}	
	}
	else	
	{
		echo "failed";
	}
	
?>