<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>White Hart Lane Recreation Ground</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	
</head>
<body>

	<div class="header" style="width:90%;">
		<div class="row">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="index.php" style="color:yellow; "><p style="font-size:14px; padding-left:25px;"><strong>White Hart Lane Recreation Ground</strong></p></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar-collapse collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right" style="list-style-type:none;color:#fff; font-size:14px;float:left !important; padding-top:20px; padding-left:10px;">
			
					<li class="active"><a class="page-scroll" href="home.php" >Home</a></li>
					<li class="active"><a class="page-scroll" href="recruitment.php">Recruitment</a></li>
					<li class="active"><a class="page-scroll" href="event_calender.php">Event Calender</a></li>
					<li class="active"><a class="page-scroll" href="photo_gallery.php">Photo Gallery</a></li>
					<li class="active"><a class="page-scroll" href="newsletter.php">Newsletter</a></li>								
					</ul>
					
					
					 
				<?php  if (isset($_SESSION['user'])) : ?>
					<table style="float:right;padding-right:20px; width:auto !important; margin:0px; border-collapse:inherit;"><tr><td style="background-color:#fff;">
					<img src="images/user_profile.png" style="height:50px; width:50px;" >
					    
						<div  style="color:#000; float:right; margin-right:0px; text-align:left;"><?php echo ucfirst($_SESSION['user']['username']); ?> (<?php echo ucfirst($_SESSION['user']['user_type']); ?>)<br><a href="index.php?logout='1'" style="color: red;">logout</a></div> 
						
					
					</td></tr></table>
					
				<?php endif ?>
				    </div>
									
				</div>							
		</div>
	</div>
	
	<div class="content" style="width:90%; height:600px;">
	<form method="post" action="register.php" style="padding:0px;">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>" style="width:93%; border: 1px solid grey;">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p style="display:none;">
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
	</div>
</body>
</html>