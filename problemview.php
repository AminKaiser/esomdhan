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
	<title>Problem Details</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css" />
		<link rel="stylesheet" type="text/css" href="problemview.css" />
		<link rel="stylesheet" type="text/css" href="Problem list.css" />
		
	
	</head>
<body>
	<div class="container">
	  <div class="left">	
		<div class="top">
			<div style="margin: 0px 0px 0px 390px;color: white;font-family: lucida console;"><h1 class="label">Problem Details</h1></div>				
		</div>
		<div style="margin: -50px 0px 0px 15px;"">
		<button class="btn" type="submit"><a href="ProblemListProcess.php">Back</a></button></div>
		
		
		<?php 
			if (isset($_POST['comment_btn']))
			{
				$username = $_SESSION['username'];
				$comment = $_POST['comment'];
				$query="INSERT INTO  commentinfo(problem_id,username,comment) VALUES('$problem_id','$username','$comment')";
				$result = mysqli_query($con,$query);
					if($result)
					{
						//header("Location: problemview.php"); 
					}else	
					{
						echo "failed";
					}
			}
		?>
		
		<div class="middle">
					
					
						<form action=" " method="post"> 
						
							<?php
							$query="SELECT * from probleminfo where problem_id='".$problem_id."'"; 
							$result = mysqli_query($con,$query);
							
							if($result){
                                while($value = $result->fetch_assoc()){
                                    $picture = $value['problempicture'];?>
                                    <img class="image" src="<?php echo $picture; ?>"> 
                        
							<?php  }} ?>
								
							<br/>	
						<div style="margin: -333px 0px 0px 488px;">
							<br/><label>Description: </label><br/>
							
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
							
							<br/>
							<div style="margin: -24px 0px 0px 10px;"><label>Comment:</label></div>
							<br/>
							<textarea name="comment" style="margin: -34px 0px 0px 93px;resize: none;width: 380px;height: 80px;"></textarea></br>
							<br/>
							<div style="margin: 25px 0px 0px 92px;">
							
							<button class="commentbtn" type="submit" name="comment_btn">comment</button></div>
						</form>
					</div>	
						
			
		   </div>
	   </div>
	   <div class="right">
			
			
			<div>
				<table style="font-size:16px; width=100%" border="1"  style="border-collapse:collapse;">
					<thead>
						<tr>
							<th align = "center">
								<strong>Username</strong>
							</th>
							
							<th align = "center">
								<strong>Comment</strong>
							</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query="SELECT * FROM commentinfo where problem_id='".$problem_id."'";
						$result = mysqli_query($con,$query);
						
						while($row = mysqli_fetch_assoc($result)) { 
						?>
						<tr>
							
							<td align="left"><?php echo $row["username"]; ?></td>
							<td align="left"><?php echo $row["comment"]; ?></td>
						</tr>
						<?php  } ?>
					
					</tbody>
					
				</table>
				
				
			</div>
	   </div>
	</div>

</body>
</html>