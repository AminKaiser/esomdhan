<?php
require('dbconn.php');
include("authentication.php");
?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css" />
		<link rel = "stylesheet" type = "text/css" href = "hello.css" />
		<link rel = "stylesheet" type = "text/css" href = "Problem List.css" />
		
	</head>
	<body>

		 <div class="toppane"style=" margin: -80px 0px 0px 0px;">
			<div class="topleft">
				<p id="h2">E-somadhan</p>
				<p id="h3">your solution is here</p>
			</div>
			<div class="mainmenu">
				<ul>
					<li><a href="hello.php">Home</a></li>
					<li><a href="ProblemListProcess.php">ProblemList</a></li>
					<li><a href="myproblem.php">Timeline</a></li>
					<li><a href="message.php">Message</a></li>
					<li><a href="notification.php">Notification</a></li>
					<li><a href="logout.php">Logout (<?php $username = $_SESSION['username'];echo $username;?>)</a></li>	
				</ul>
			</div>	
			<div style="margin: -40px 0px 0px 55px;">
				<form action="ProblemListProcess.php" method="POST">
					<input id="search" name="search" placeholder="  Search here">
					<button id="srcbtn" type="submit" name="search_btn"><i class="fas fa-search fa-1x"></i></button>
				</form>
			</div>
			  
	    </div>
	<div style="margin:80px 0px 0px 0px;">
		<table width="100%" border="1"  style="border-collapse:collapse;">
			<thead>
				<tr>
					<th align = "center">
						<strong>Admin Name</strong>
					</th>
					
					<th align = "center">
						<strong>Admin Type</strong>
					</th>
					
					<th align = "center"">
						<strong>Message</strong>
					</th>
					<th align = "center">
						<strong>Send</strong>
					</th>
					
				</tr>
			</thead>
		<tbody>
		<?php
		$query="Select * from admin";
		$result = mysqli_query($con,$query);
		
		while($row = mysqli_fetch_assoc($result)) { 
		?>
		
		<tr>
			<form class="frm" method="post" action="message.php">
			<td align="center"><?php echo $row["username"]; ?></td>
			<td align="center"><?php echo $row["usertype"]; ?></td>
			<td align="center"><textarea name="message" style="margin: 0px 0px 0px 0px;resize: none;width: 652px;height: 72px;"></textarea></td>
			<td align="center"><input type = "hidden" name="toid" value = "<?php echo  $row["id"]; ?>"><button style="padding: 4px;width: 60px;background-color: #1D717D;color: white;font-size: 14px;border-radius: 5px;border: none;"class="btn" type="submit"  name="msg_btn">Send</button></td>
			</form>
		</tr>
		<?php  } ?>
		
		
	
		</tbody>
		</table>
		
		<?php
			if(isset($_POST['msg_btn']))
			{
				$to = $_POST['toid'];
				
				$from = $_SESSION['id'];
				$message = $_POST['message'];
					
					$query ="INSERT into message (fromid,toid,message) VALUES ('$from','$to','$message')";
					
					$result = mysqli_query($con,$query);
					if($result)
					{
						header("Location: message.php"); 
					}else	
					{
						echo "failed";
					}
			}					
	
		?>
	</div>	
	
</body>
</html>