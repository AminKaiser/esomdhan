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
						<strong>Problem ID</strong>
					</th>
					
					<th align = "center">
						<strong>Description</strong>
					</th>
					
					<th align = "center">
						<strong>District</strong>
					</th>
					
					<th align = "center">
						<strong>Types</strong>
					</th>
					
					<th align = "center">
						<strong>City</strong>
					</th>
					<th align = "center">
						<strong>Edit</strong>
					</th>
					<th align = "center">
						<strong>Delete</strong>
					</th>
					
				</tr>
			</thead>
		<tbody>
		<?php
		$id = $_SESSION['id'];
		$query="Select problem_id,description,district,types,City
					FROM probleminfo WHERE user_id = '$id'";
		$result = mysqli_query($con,$query);
		
		while($row = mysqli_fetch_assoc($result)) { 
		?>
		<tr>
			<td align="center"><?php echo $row["problem_id"]; ?></td>
			<td align="center"><?php echo $row["description"]; ?></td>
			<td align="center"><?php echo $row["district"]; ?></td>
			<td align="center"><?php echo $row["types"]; ?></td>
			<td align="center"><?php echo $row["City"]; ?></td>
			<td align="center"><a href="edit.php?problem_id=<?php echo $row["problem_id"]; ?>">Edit</a></td>
			<td align="center"><a href="delete.php?problem_id=<?php echo $row["problem_id"]; ?>">Delete</a>
		</tr>
		<?php  } ?>
	
		</tbody>
		</table>
	</div>	
	
</body>
</html>
