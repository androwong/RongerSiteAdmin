<?php //session_start();

//print_r($_SESSION);
 //exit;
include('functions.php');	
	if (!isset($_SESSION['user']['username']))
	{
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
		//exit;
	}

	if (!isLoggedIn()) {
				
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
		//exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link href="../css/font-awesome.css" rel="stylesheet">
	<link href="../css/material-design-iconic-font.css" rel="stylesheet">
	<link href="../css/swiper.css" rel="stylesheet">
	<link href="../css/magnific-popup.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<style>
	.collapse.in {
    display: block !important;
}
.navbar-toggle.collapsed .icon-bar
{
	background-color:#fff;
}
.navbar-toggle.collapsed 
{
	background:none;
}
.navbar-toggle .icon-bar
{
	background-color:#58637e
}
.navbar-toggle 
{
	background:white;
}
.navbar-toggle .icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px;
}
	</style>
	
	<style>
	
	.tox-notifications-container
{
	display:none
	
}
 div.content  form
	{
		border: none;background: none;
	}
	</style>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
   tinymce.init({
    selector: '#body'
  });
</script>
	
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
						<li class="active" ><a class="page-scroll" href="home.php" >Home</a></li>
                        <li class="active"><a class="page-scroll" href="about.php">About</a></li>
						<li class="active"><a class="page-scroll" href="recruitment.php">Recruitment</a></li>
                        <li class="active"><a class="page-scroll" href="event_calender.php">Event Calender</a></li>
                        <li class="active"><a class="page-scroll" href="photo_gallery.php">Photo Gallery</a></li>
                        <li class="active"><a class="page-scroll" href="blog.php">Blog</a></li>
                        <li class="active"><a class="page-scroll" href="newsletter.php">Newsletter</a></li> 
					</ul>
					<?php if (isset($_SESSION['user'])) : ?>
						<table style="float:right;padding-right:20px; width:auto !important; margin:0px; border-collapse:inherit;">
							<tr>
								<td style="background-color:#fff;">
									<img src="images/user_profile.png" style="height:50px; width:50px;" >
									<div  style="color:#000; float:right; margin-right:0px; text-align:left;"><?php echo ucfirst($_SESSION['user']['username']); ?> (<?php echo ucfirst($_SESSION['user']['user_type']); ?>)<br><a href="index.php?logout='1'" style="color: red;">logout</a></div> 
								</td>
							</tr>
						</table>
					<?php endif ?>
				</div>
			</div>							
		</div>
	</div>
	<div class="content" style="width:90%;">
		<!-- notification message -->
		<?php //if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h5>
					<?php 
					echo "Newsletter";
					?>
				</h5>
			</div>
		<?php //endif ?>
		<!-- logged in user information -->
		<a href="page_text.php?ptext=newsletter" class="dasboard" style="background:#228500;color:#fff;padding: 4px;border-radius: 7px;margin: 0px auto;display: block;width: 180px;text-align: center;">EDIT FRONT-END PAGE TEXT</a> 
		
				<br>
				<br> <div style="color:#000;font-weight:bold; font-size:22px; text-align:center; "> MASS EMAIL  </div> <br> 
				<form action="server.php" method="post" style="color:#000;"> 
					<label>Subject of email:</label><br><input type="text" name="subject" id="subject" style="width:50%" /><br> 
					<label>Body of email:</label><br><textarea cols="55" rows="10" name="body" id="body"> </textarea> <br>
					<input type="submit" name="mass_email" id="mass_email" value="Email" style="width:50%;">
                </form>
				
				
		<?php //include("curd/recruitment.php"); ?>
		
	</div>
	<script src="../js/jquery-2.2.4.min.js" type="text/javascript"></script> <!-- jQuery v2.2.4 - necessary for Bootstrap's JavaScript plugins -->
	<script src="../js/bootstrap.min.js" type="text/javascript"></script> <!-- Bootstrap v3.3.7 -->
	<script src="../js/jquery.easing.min.js" type="text/javascript"></script> <!-- jQuery Easing v1.3 for smooth scrolling between anchors -->
	<script src="../js/jquery.countdown.min.js" type="text/javascript"></script> <!-- The Final Countdown v2.2.0 plugin for jQuery -->
	<script src="../js/swiper.min.js" type="text/javascript"></script> <!-- Swiper v3.4.2 for image gallery swiper -->
	<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script> <!-- Magnific Popup v1.1.0 for lightboxes -->
	<script src="../js/waypoints.min.js" type="text/javascript"></script> <!-- jQuery Waypoints v2.0.3 required by Counter-Up -->
	<script src="../js/jquery.counterup.min.js" type="text/javascript"></script> <!-- Counter-Up v1.0 for statistics -->
	<script src="../js/validator.min.js" type="text/javascript"></script> <!--  Validator.js v0.11.8 Bootstrap plugin that validates the registration form -->
	<script src="../js/scripts.js" type="text/javascript"></script> <!-- Custom scripts -->
</body>
</html>