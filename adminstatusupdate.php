<?php
	require('dbconn.php');
	include("authentication.php");
	$problem_id=$_REQUEST['problem_id'];
	$query = "SELECT * from probleminfo where problem_id='".$problem_id."'"; 
	$result = mysqli_query($con, $query) or die ( mysqli_error());
	$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
	<title>Update Record</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css" />
		<link rel = "stylesheet" type = "text/css" href = "edit.css" />
</head>
<body>
	<div class="main">
		<div class="top">
			
			<button class="btn"><a href="adminhome.php">Back</a></button>
			<h1 class="label">Update Record</h1>
		</div>
		<?php
			if (isset($_POST['edit_btn']))
				{
					$description= $_POST['description'];
					$district= $_POST['district'];
					$types= $_POST['types'];
					$City= $_POST['City'];
					$status = $_POST['status'];
					
					
					$update="update probleminfo set status = '".$status."' where problem_id='".$problem_id."'";
					mysqli_query($con, $update);
					header ("Location: adminhome.php");
				}
			else 
				{
		?>
					<div class="middle">
						<form action=" " method="post"> 

							<label>Description: </label><br/>
							
							<input style="margin: -22px 0px 0px 95px; width:380px; height:100px;" type="text" name="description"
							disabled value="<?php echo $row['description'];?>">
							<br/>
							
							<div style="margin: 12px 0px 0px 28px;"><label>District:</label></div>
							<br/>
							
							<input style="margin: -42px 0px 0px 95px;width: 380px;" type="text" name="district" disabled value="<?php echo $row['district'];?>">
							<br/>
							
							<div style="margin: 0px 0px 0px 38px;"><label>Types:</label></div>
							<br/>
							
							<input style="margin: -42px 0px 0px 94px;width: 380px;" type="text" name="types" disabled value="<?php echo $row['types'];?>">
							
							<br/>
							<div style="margin: 0px 0px 0px 46px;"><label>City:</label></div>
							<br/>
							
							<input style="margin: -43px 0px 0px 93px;width: 380px;" type="text" name="City" disabled value="<?php echo $row['City'];?>">
							<br/>
							
							<div style="margin: 0px 0px 0px -14px;"><label>Status:</label></div>
							<select style="margin: -19px 0px 0px 92px;width: 380px;height: 24px;" name = "status">
								<option>Select</option>
								<option value = "Pending">Pending</option>
								<option value = "Finished">Finished</option>
								<option value = "Rejected">Rejected</option>
							</select>
							<br/>
							<div style="margin: 25px 0px 0px 92px;">
							<button class="editbtn" type="submit" name="edit_btn">Edit</button></div>
						</form>
			<?php } ?>
					</div>
	</div>
</body>
</html>