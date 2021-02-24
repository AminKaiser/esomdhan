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
						<strong>Problemid</strong>
					</th>
					
					<th align = "center">
						<strong>Username</strong>
					</th>
					
					<th align = "center">
						<strong>Description</strong>
					</th>
					
					<th align = "center">
						<strong>District</strong>
					</th>
					
					<th align = "center">
						<strong>City</strong>
					</th>
					
					<th align = "center">
						<strong>Types</strong>
					</th>
					
					<th align = "center">
						<strong>Status</strong>
					</th>
					<th align = "center">
						<strong>Details</strong>
					</th>
					
					
					
					
				</tr>
			</thead>
		<tbody>
		
		<?php
			$usertype = $_SESSION['usertype'];
			if($usertype=="Administrator")
			{
			$query="Select userinfo.username,
					probleminfo.problem_id,probleminfo.description,probleminfo.district,probleminfo.types,probleminfo.City, probleminfo.status
						FROM ((probleminfo INNER JOIN userinfo ON userinfo.id = probleminfo.user_id))";
						
					
			}
			if($usertype=="UNO")
			{
			$query="Select userinfo.username,
					probleminfo.problem_id,probleminfo.description,probleminfo.district,probleminfo.types,probleminfo.City, probleminfo.status
						FROM probleminfo INNER JOIN userinfo ON userinfo.id = probleminfo.user_id and ( probleminfo.mention like 'UNO%' ||
						probleminfo.mention1 like 'UNO%' || probleminfo.mention2 like 'UNO%')";
			
			}
			if($usertype=="Councilor")
			{
			$query="Select userinfo.username,
					probleminfo.problem_id,probleminfo.description,probleminfo.district,probleminfo.types,probleminfo.City, probleminfo.status
						FROM probleminfo INNER JOIN userinfo ON userinfo.id = probleminfo.user_id and ( probleminfo.mention like 'Councilor%' ||
						probleminfo.mention1 like 'Councilor%' || probleminfo.mention2 like 'Councilor%')";
			
			}
			if($usertype=="Mayor")
			{
			$query="Select userinfo.username,
					probleminfo.problem_id,probleminfo.description,probleminfo.district,probleminfo.types,probleminfo.City, probleminfo.status
						FROM probleminfo INNER JOIN userinfo ON userinfo.id = probleminfo.user_id and ( probleminfo.mention like 'Mayor%' ||
						probleminfo.mention1 like 'Mayor%' || probleminfo.mention2 like 'Mayor%')";
			
			}
			if($usertype=="Chairman")
			{
			$query="Select userinfo.username,
					probleminfo.problem_id,probleminfo.description,probleminfo.district,probleminfo.types,probleminfo.City, probleminfo.status
						FROM probleminfo INNER JOIN userinfo ON userinfo.id = probleminfo.user_id and ( probleminfo.mention like 'Chair%' ||
						probleminfo.mention1 like 'Chair%' || probleminfo.mention2 like 'Chair%')";
			
			}
		
		$result = mysqli_query($con,$query);
		
		while($row = mysqli_fetch_assoc($result)) { 
		?>
		<tr>
			<td align="center"><?php echo $row["problem_id"]; ?></td>
			<td align="center"><?php echo $row["username"]; ?></td>
			<td align="center"><?php echo $row["description"]; ?></td>
			<td align="center"><?php echo $row["district"]; ?></td>
			<td align="center"><?php echo $row["City"]; ?></td>
			<td align="center"><?php echo $row["types"]; ?></td>
			<td align="center"><?php echo $row["status"]; ?></td>
			
			<td align="center"><a href="adminstatusupdate.php?problem_id=<?php echo $row["problem_id"]; ?>">View</a></td>
			
			
		</tr>
		<?php  } ?>
	
		
		
	
		</tbody>
		</table>
	</div>
</body>
</html>
