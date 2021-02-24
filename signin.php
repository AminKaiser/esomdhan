<!DOCTYPE html>
	<head>
		<title>Esomadhan @your solution is here.</title>
			<meta charset="utf-8">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web/css/all.css"/>
			<link rel = "stylesheet" type = "text/css" href="style.css" />
			
	</head>
	<body >
		<div class="main">
			<div class="left">	
				<div class="left_top">
					<div class="slider"></div>
					<marquee> <h2 class="h2">E-SOMADHAN</h2><br/>
					<h3 class="h3">your solution is here</h3></marquee>
				</div>
				<div class="left_bottom">
					<a href="https://www.facebook.com"><i class="fab fa-facebook fa-2x"></i></a>
					<a href="https://www.google.com"><i class="fab fa-google fa-2x"></i></a>
					<a href="https://www.instagram.com"><i class="fab fa-instagram fa-2x"></i></a>
					<a href="https://www.linkedin.com"><i class="fab fa-linkedin fa-2x"></i></a>
					<a href="https://www.twitter.com"><i class="fab fa-twitter fa-2x"></i></a>
					<a href="https://www.telegram.com"><i class="fab fa-telegram fa-2x"></i></a>
				</div>
				
			</div>
			
			<div class="right">
				<div class="right_top">
					<h1>Sign In</h1>
				</div>
				
				<div class="right_bottom">
					<form class="frm" method="post" action="loginProcess.php" autocomplete="on">
						
						<input class="user" type="text" name="username" placeholder="username" required ><i class="fas fa-user fa-1x"></i></input> <br/>
						
						<input class="pass" type="password" name="password" autocomplete="off" required
						placeholder="password"><i class="fas fa-key"></i></input><br/>
						
						<button class="button" type="submit" class="btn" name="login_btn">Login</button>
						
						<a class="forget" href="#" >forget password?</a>
						
						<a class="create" href="signup.php">create an account</a>
					</form>
				</div>
			</div>
		</div>
		
	</body>
</html>