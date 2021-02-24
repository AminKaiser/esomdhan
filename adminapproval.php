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

		<div class="toppane" style=" margin: -80px 0px 0px 0px;">
			<div class="topleft">
				<p id="h2">E-somadhan</p>
				<p id="h3">your solution is here</p>
			</div>
			<div class="mainmenu">
				<ul>
					<li><a href="adminhome.php">Timeline</a></li>
					<li><a href="adminmessage.php">Message</a></li>
					<li><a href="adminapproval.php">Admin Approval</a></li>
					<li><a href="adminlogout.php">Logout (<?php $username = $_SESSION['username']; echo $username;?>)</a></li>
				</ul>
			</div>	
			<div style="margin: -40px 0px 0px 55px;">
				<input id="search" placeholder="  Search here"/>
				<button id="srcbtn" name="search_btn"><i class="fas fa-search fa-1x"></i></button>
			</div>
			  
	    </div>
		
	<div style="margin:80px 0px 0px 0px;">	
		<table width="100%" border="1"  style="border-collapse:collapse;">
			<thead>
				<tr>
					
					<th align = "center">
						<strong>User Type</strong>
					</th>
					
					<th align = "center">
						<strong>Username</strong>
					</th>
					
					<th align = "center">
						<strong>Mobile</strong>
					</th>
					
					<th align = "center">
						<strong>Email</strong>
					</th>
					
					<th align = "center">
						<strong>Approval</strong>
					</th>
					
					<th align = "center">
						<strong>Rejection</strong>
					</th>
					
					
				</tr>
			</thead>
		<tbody>
		
		<?php
		$query="Select * from `adminapproveinfo`";
		$result = mysqli_query($con,$query);
		
		while($row = mysqli_fetch_assoc($result)) { 
		?>
		<tr>
			<td align="center"><?php echo $row["usertype"]; ?></td>
			<td align="center"><?php echo $row["username"]; ?></td>
			<td align="center"><?php echo $row["mobile"]; ?></td>
			<td align="center"><?php echo $row["email"]; ?></td>
			
			<td align="center"><a href="approve.php?id=<?php echo $row["id"]; ?>">Approve</a></td>
			<td align="center"><a href="reject.php?id=<?php echo $row["id"]; ?>">Reject</a></td>
			
						
		</tr>
		<?php  } ?>	
		</tbody>
		</table>
	</div>
	
	

</body>
</html>
