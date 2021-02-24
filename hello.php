<?php
require('dbconn.php');
include("authentication.php");
?>

<!DOCTYPE html> 
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css" />
		<link rel = "stylesheet" type = "text/css" href = "hello.css" />
	</head>

<body>
	
	<div class="container">
	    <div class="toppane">
			<div class="topleft">
				<p id="h2">E-somadhan</p>
				<p id="h3">your solution is here</p>
			</div>
			<div class="mainmenu">
				<ul>
					<li><a href="#">Home</a></li>
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
		
		<div class="leftpane">
			<div style="width:275px; height:145px; background-color:white;margin: 28px 0px 0px 10px;border-radius: 5px;">
			
				<div style="background-color: #257772;border-radius: 5px 5px 0px 0px;">
					<p style="font-size: 18px;font-family: lucida console;text-align: center; color:white">Emergency Services</p>
				</div>
				<div style="margin: 0px 0px 10px 11px;">
				<i class="fab fa-chromecast 2px"></i><a style="text-decoration: none;font-family: lucida console;" href="https://bangladesh.gov.bd/index.php"> Bangladesh Government</a></div>
				
				<div style="margin: 0px 0px 0px 10px;">
				<i class="fab fa-phoenix-framework 2px"></i></i><a style="text-decoration: none;font-family: lucida console;font-size: 14px;" href="https://acc.org.bd/index.php"> Anti Corruption Commision</a></div>
				
				<div style="margin: 9px 0px 10px 11px;">
				<i class="fab fa-phoenix-squadron 2px"></i><a style="text-decoration: none;font-family: lucida console;" href="http://duet.ac.bd"> DUET</a></div>
				
			</div>
			
			<div style="width:275px; height:130px; background-color:white;margin: 20px 0px 0px 10px;border-radius: 5px;">
			
				<div style="background-color: #257772;border-radius: 5px 5px 0px 0px;">
					<p style="font-size: 18px;font-family: lucida console;text-align: center; color:white">Rules</p>
				</div>
				<div style="margin: 0px 0px 0px 10px;">
				<p style="font-family: lucida console;font-size: 14px;"> 1. User must be confirm his identity to use this platform.<br><br>
				2. Users must be a Bangladeshi Citizen.</p></div>
			</div>
			
			<div style="width:275px; height:195px; background-color:white;margin: 20px 0px 0px 10px;border-radius: 5px;">
				<div style="background-color: #257772;border-radius: 5px 5px 0px 0px;">
					<p style="font-size: 18px;font-family: lucida console;text-align: center; color:white">User Guideline</p>
				</div>
				<div style="margin: 0px 0px 0px 10px;">
				<p style="font-family: lucida console;font-size: 14px;"> 1. Sign up.<br> 2. Login.<br>
				3. Post a valid public Problem.<br> 4. Attach a image file as proof.<br>5. If you post wrong information, You will be BAN from this platform !!</p></div>
				
			</div>			
	    </div>
			
	    <div class="middlepane">
			<div class="mid_top">
				<p class="postlevel">Create post</p></br>
				
				<form action="Problempost.php" method="post" enctype="multipart/form-data">
					
					<textarea name="description" id="textarea" placeholder="What's on your mind"></textarea></br>
				
				
					<input type="file" name="fileToUpload" id="fileToUpload" style="margin: 0px 0px 0px 12px;">
					
	
					 
					 <div style="margin: 24px 0px 0px 12px;">
						 <div>
							<b>Location:</b></br>
						 </div>
						 <div style="margin: 10px 0px 54px 0px;">
							<b>Street Address:</b></br>
						 </div>
						 <div style="margin: 0px 0px 10px 0px;">
							<b>Problem Type:</b></br>
						 </div>
						 <div>
							<b>Mention:</b>
						 </div>
						 
					 </div>
					 
					 <div style="margin: -147px 0px 0px 133px;">
						
						<select name="district" style="width:105px">
						  <option>District</option>
						  <option value="Chattagram">Chattagram</option>
						  <option value="Dhaka">Dhaka</option>
						  <option value="Cumilla">Cumilla</option>
						  <option value="Rajshahi">Rajshahi</option>
						</select>
						
						<select name="city" style="width:105px">
						  <option>City</option>
						  <option value="Baghaichari">Baghaichari</option>
						  <option value="Hathazari">Hathazari</option>
						  <option value="Agrabad">Agrabad</option>
						  <option value="Mirpur">Mirpur</option>
						  <option value="Gazipur">Gazipur</option>
						  <option value="Cumilla">Cumilla</option>
						  <option value="Rajshahi">Rajshahi</option>
						</select>
						
						<select name="upazilla" style="width:105px">
						  <option>Upazilla</option>
						  <option value="Gazipur">Gazipur Sadar</option>
						  <option value="Baghaichari">Baghaichari</option>
						  <option value="Hathazari">Hathazari</option>
						  <option value="Agrabad">Agrabad</option>
						  <option value="Cumilla">Cumilla</option>
						  <option value="Rajshahi">Rajshahi</option>
						</select>
					 </div>
					 
					 <div style="margin: 11px 0px 0px 133px;"> 
						<textarea name="street" style="resize: none;width: 316px;height: 59px;"></textarea>
					 </div>
					 
					 <div style="margin: 6px 0px 0px 133px;">
						<select  name="types" style="width: 322px;">
						  <option>Select</option>
						  <option value="Educational">Educational</option>
						  <option value="Social">Social</option>
						  <option value="Corruption">Corruption</option>
						</select>
					 </div>
					 
					 <div style="margin: 8px 0px 0px 133px;">
						<select name="mention" style="width: 105px;">
						  <option>Select</option>
						  <option value="Administration">Administration</option>
						  <option value="UNO">UNO</option>
						  <option value="Chairman">Chairman</option>
						  <option value="Mayor">Mayor</option>
						  <option value="Ward Member">Ward Member</option>
						  <option value="Councilor">Councilor</option>
						</select>
					
						<select name="mention1" style="width: 105px;">
						  <option>Select</option>
						  <option value="Administration">Administration</option>
						  <option value="UNO">UNO</option>
						  <option value="Chairman">Chairman</option>
						  <option value="Mayor">Mayor</option>
						  <option value="Ward Member">Ward Member</option>
						  <option value="Councilor">Councilor</option>
						</select> 
						<select name="mention2" style="width: 105px;">
						  <option>Select</option>
						  <option value="Educational">Administration</option>
						  <option value="Social">UNO</option>
						  <option value="Chairman">Chairman</option>
						  <option value="Mayor">Mayor</option>
						  <option value="Ward Member">Ward Member</option>
						  <option value="Councilor">Councilor</option>
						</select>
						
					 </div>
					 <div style="margin: 13px 0px -15px 129px;">
						<input type="checkbox" name="check" value="anonymous">Post anonymously<br>
					 </div>
					 
					 <div><button class="button" type="submit"  name="post_btn">post</button><br/></div>
				</form>	
			</div>
			
			<div class="mid_bottom">
				<div class="level"></div>
			</div>
			
		</div>
		  
	    <div class="rightpane">
			<div style="width:305px; height:350px; background-color:white;margin: 28px 0px 0px 10px;border-radius: 5px;">
			
				<div style="background-color: #257772;border-radius: 5px 5px 0px 0px;">
					<p style="font-size: 18px;font-family: lucida console;text-align: center; color:white">Latest Problem</p>
				</div>
				
				
				
			</div>
			
			<div style="width:305px; height:145px; background-color:white;margin: 20px 0px 0px 10px;border-radius: 5px;">
			
				<div style="background-color: #257772;border-radius: 5px 5px 0px 0px;">
					<p style="font-size: 18px;font-family: lucida console;text-align: center; color:white">Notice</p>
				</div>
				
			</div>
			
        </div>
	  
        <div class="bottom">
			<p style="font-size: 16px;color: white; font-family:lucida console;text-align: center;">           Copyright © 2020 Internet Programming Project   |   All Right Reserved   |   Created by Team Halogen   |   Judge By Honorable Teachers</p>

		</div>
	</div>
</body>

</html>		