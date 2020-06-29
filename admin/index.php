<?php 
//session_start();
//print_r($_SESSION);
//exit;
// include('connection.php');
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

@media (max-width:992px)
{
	#myNavbar{
		clear:both;
	}
}

.navbar-toggle .icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px;
}

#btn_recurit, #btn_newsletter {
	margin-left: 20px;
}

</style>
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
		<!-- notification message -->
		<?php 
			$result_user = mysqli_query($conn, "SELECT COUNT(*) AS user_total FROM users");
			while ($row = mysqli_fetch_array($result_user)){
				$userCount = $row['user_total'];
			}  
			
			$result_newsletter = mysqli_query($conn, "SELECT COUNT(*) AS nlettercount FROM newsletter");
			while ($row = mysqli_fetch_array($result_newsletter)){
				$newsletterCount = $row['nlettercount'];
			} 
			
			$result_recruitment = mysqli_query($conn, "SELECT COUNT(*) AS recrucount FROM recruitment");
			while ($row = mysqli_fetch_array($result_recruitment)){
				$recruitmentCount = $row['recrucount'];
			}

			$result_photo = mysqli_query($conn, "SELECT COUNT(*) AS photocount FROM photogallery");
			while ($row = mysqli_fetch_array($result_photo)){
				$photoCount = $row['photocount'];
			} 

			$result_event = mysqli_query($conn, "SELECT COUNT(*) AS eventcount FROM tbl_events");
			while ($row = mysqli_fetch_array($result_event)){
				$eventCount = $row['eventcount'];
			}
		?>
			
			<div class="error success" >
				<h5>
					<?php 
						echo 'Control Panel';
					?>
				</h5>
			</div>
			<div class="dasboard">
			<div style="width:20%; float:left;" >
			<p style="padding-bottom:5px;"><b> Daily Statistics </b></p>
			<ul style=" list-style:none;">
				<li style="padding:5px 0px;">Users : <?php echo $userCount?></li>
				<li style="padding:5px 0px;">Home Page Pics : 4</li>
				<li style="padding:5px 0px;">Recuritment : <?php echo $recruitmentCount?><input type="button" value="Export to CSV" class="btn btn-success" id="btn_recurit" /></li>
				<li style="padding:5px 0px;">Event Added : <?php echo $eventCount?></li>
				<li style="padding:5px 0px;">Photo Uploaded: <?php echo $photoCount?></li>
				<li style="padding:5px 0px;">Newsletter Emails : <?php echo $newsletterCount?><input type="button" value="Export to CSV" class="btn btn-success" id="btn_newsletter"/></li>
			</ul>
			</div>
			<div style="float:left">
			<!-- <a href="register.php" class="black_link"><b>Add a New Admin User</a> -->
			</div>
		<?php //endif ?>
		
		
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
	<script>
		$("#btn_recurit").on("click", function(){
			all_recurit = true;
			jQuery.ajax({
				url : "curd/export_csv.php", 
				type: 'POST',
				data: { all_recurit },
				success: function(data){
					/*
					* Make CSV downloadable
					*/
					var downloadLink = document.createElement("a");
					var fileData = ['\ufeff'+data];

					var blobObject = new Blob(fileData,{
						type: "text/csv;charset=utf-8;"
					});

					var url = URL.createObjectURL(blobObject);
					downloadLink.href = url;
					downloadLink.download = "recruitment.csv";

					/*
					* Actually download CSV
					*/
					document.body.appendChild(downloadLink);
					downloadLink.click();
					document.body.removeChild(downloadLink);
				}
			});
		});
		$("#btn_newsletter").on("click", function(){
			all_newsletter = true;
			jQuery.ajax({
					url : "curd/export_csv.php", 
					type: 'POST',
					data: { all_newsletter },
					success: function(data){
						/*
						* Make CSV downloadable
						*/
						var downloadLink = document.createElement("a");
						var fileData = ['\ufeff'+data];

						var blobObject = new Blob(fileData,{
							type: "text/csv;charset=utf-8;"
						});

						var url = URL.createObjectURL(blobObject);
						downloadLink.href = url;
						downloadLink.download = "newsletter.csv";

						/*
						* Actually download CSV
						*/
						document.body.appendChild(downloadLink);
						downloadLink.click();
						document.body.removeChild(downloadLink);
					}
				});
		})
	</script>
</body>
</html>