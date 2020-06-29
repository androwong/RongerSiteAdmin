﻿<?php include('admin/functions.php'); ?>

		





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<!-- Website Title -->
	<title>White Hart Lane Recreation Ground</title>
	
	<!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />
	
	<!-- SEO Meta Tags -->
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,500,700" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/material-design-iconic-font.css" rel="stylesheet">
	<link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<link rel='stylesheet' type="text/css" href="calendar/style/style.css"/>
    <script src="calendar/js/jquery.js" type="text/javascript"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
    <link rel='stylesheet' type="text/css" href="calendar/dzstooltip/dzstooltip.css"/>
    <link rel='stylesheet' type="text/css" href="calendar/dzscalendar/dzscalendar.css"/>
    <script src="calendar/dzscalendar/dzscalendar.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	
	
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">
	
	<!-- Preloader -->
	<div class="spinner-wrapper">
		<div class="spinner">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	
	
	<!-- NAVIGATION -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
			<div class="row">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand page-scroll" href="header"><p><strong>White Hart Lane Recreation Ground</strong></p></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar-collapse collapse" id="myNavbar">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a class="page-scroll" href="index.php">Home</a></li>
                                                <li class="active"><a class="page-scroll" href="about.php">About Us</a></li>
						<li class="active"><a class="page-scroll" href="recruitment.php">Recruitment</a></li>
                                                <li class="active"><a class="page-scroll" href="event_calender.php">Event Calender</a></li>
                                                <li class="active"><a class="page-scroll" href="photo_gallery.php">Photo Gallery</a></li>
                                                <li class="active"><a class="page-scroll" href="blog.php">Blog</a></li>
                                                <li class="active"><a class="page-scroll" href="newsletter.php">Newsletter</a></li> 
						<li><a class="page-scroll" href="#footer">Contact Us</a></li>
					</ul>
				</div>
				
			</div>
        </div>
    </div> <!-- end of navigation -->
	

	<!-- OVERVIEW -->
	<div id="overview" class="overview">
		<div class="container">
			<h2>Event Calender</h2>
			<img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">
			<p class="seventy-percent-width">
			
			<?php $results = mysqli_query($db, "SELECT * FROM tbl_pagetext where pagename = 'event_calendar'");
        		$i=0; while ($row = mysqli_fetch_array($results)) {  echo $row['pagetext'];   }?>

			
			<!--Learn in <strong>just 3 days</strong> how to improve your online selling techniques by attending Argo's online selling training course. Our instructors are prepared to answer any questions about sales and marketing. -->
			
			
			</p>
			
			
			
			
			<section class="mcon-maindemo" style="position: relative; padding-top:0px; background-image:none;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="the-bg" style=""></div>
                <div class="dzscalendar-con  skin-responsive-galileo" style="max-width: 960px; margin: 25px auto;">
              
                <?php 
				   $results = mysqli_query($db, "SELECT * FROM tbl_month_cover");
				   $i=0; while ($row = mysqli_fetch_array($results)) {
			   
				   $month[]= $row['month'];
				   $thumb[] = $row['thumb'];
                   $imageurl = 'calendar/img/' ; 
				   
				   }
				   
				   $month = date('m');
				   $year = date('Y');
				   
				?> 



			 <!-- <div class="dzscalendar skin-responsive-galileo auto-init" style=""				
		data-options="{
            design_month_covers : ['calendar/img/3c3c3d.jpg','http://dummyimage.com/950x350/000000/3c3c3d.jpg','http://dummyimage.com/950x350/000000/3c3c3d.jpg','http://dummyimage.com/950x350/000000/3c3c3d.jpg','http://dummyimage.com/950x350/000000/3c3c3d.jpg','http://dummyimage.com/950x350/000000/3c3c3d.jpg','http://dummyimage.com/950x350/000000/3c3c3d.jpg','http://dummyimage.com/950x350/000000/3c3c3d.jpg','http://dummyimage.com/950x350/000000/3c3c3d.jpg','http://dummyimage.com/950x350/000000/3c3c3d.jpg','http://dummyimage.com/950x350/000000/3c3c3d.jpg','http://dummyimage.com/950x350/000000/3c3c3d.jpg']
            ,start_month: '1'
            ,start_year: '2019'
            ,start_weekday: 'Monday'
            ,header_weekdayStyle: 'responsivefull'
        }"	> -->
		
		
		<div class="dzscalendar skin-responsive-galileo auto-init" style=""				
		data-options="{
            design_month_covers : [ '<?php echo $imageurl.$thumb[0] ?>','<?php echo $imageurl.$thumb[1] ?>','<?php echo $imageurl.$thumb[2] ?>','<?php echo $imageurl.$thumb[3] ?>',
			'<?php echo $imageurl.$thumb[4] ?>','<?php echo $imageurl.$thumb[5] ?>','<?php echo $imageurl.$thumb[6] ?>','<?php echo $imageurl.$thumb[7] ?>','<?php echo $imageurl.$thumb[8] ?>',
			'<?php echo $imageurl.$thumb[9] ?>','<?php echo $imageurl.$thumb[10] ?>','<?php echo $imageurl.$thumb[11] ?>'],
			 start_month: '<?php echo $month; ?>',start_year: '<?php echo $year; ?>'
            ,start_weekday: 'Monday',header_weekdayStyle: 'responsivefull' }"	>		
		
		<div class="events">						
						<?php 
                               $results = mysqli_query($db, "SELECT * FROM tbl_events");
        		               $i=0; while ($row = mysqli_fetch_array($results)) {

							   $array= explode('-' , $row['start']);
							   $datatag= $row['datatag'];
							   $href= $row['datalink'];
							   $datarepeat= $row['repeat_month']
					    ?> 
				           
						
						 <div class="event-tobe" data-repeat="<?php echo $datarepeat; ?>" data-tag="<?php echo $datatag; ?>" data-month="<?php echo $array[1];  ?>" data-day="<?php echo $array[2];  ?>" data-year = "<?php echo $array[0]; ?>" <?php  if(isset($href)) { echo 'target="_blank" data-type="link"'.' data-href='.$href; } ?> >
                                <div style="width:300px;" style="text-align:center;">
                                    <h5><?php echo $row['title']; ?></h5>
                                    <span class="label"  style="text-align:center; display:table;whitespace:pre-wrap;">
									<?php echo $row['description']; ?></span>
                                </div>
                          </div>
						
						  
						  
												  
						  
						  
						   
						<?php }   ?>    
							
		</div>				
                       
                </div>
            </div>
        </div>
    </div>
</section>
				
			
		</div> <!-- end of container -->
	</div> <!-- end of overview -->
	
	
	<!-- FOOTER -->
	<div id="footer" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-pane">
						<h4>Contact Details</h4>
						<div class="footer-details">
							<p>White Hart Lane Recreation Ground</p>
							<p><i class="fa fa-map-marker" aria-hidden="true"></i> 59 White Hart Ln, Wood Green, London N22 5SJ</p>
							<p><i class="fa fa-phone" aria-hidden="true"><a class="phone-number" href="tel:02084895198">020 8489 5198</a></i>&nbsp;&nbsp;<i class="fa fa-mobile" aria-hidden="true"><a class="phone-number" href="tel:07984984861">07984 984 861</a></i>
							<i class="fa fa-envelope-o" aria-hidden="true"><a href="mailto:info@whitehartlanerecreationground.com/">info@whitehartlanerecreationground.com</a></i>&nbsp;&nbsp;<i class="fa fa-chrome" aria-hidden="true"><a href="#your-link">www.whitehartlanerecreationground.com</a></i></p>
						</div>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="footer-pane">
						<h4>Social Networks</h4>
						<!-- Social Icons Container -->
						<div class="social-icons-container">
							<span class="fa-stack fa-lg">
								<a href="https://www.facebook.com/WhiteHartLaneRecreationGround">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa-lg">
								<a href="#your-link-here">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa-lg">
								<a href="#your-link-here">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa-lg">
								<a href="https://www.instagram.com/whitehartlanerecreationground">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa-lg">
								<a href="#your-link-here">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
								</a>
							</span>
							<span class="fa-stack fa-lg">
								<a href="https://www.youtube.com/channel/UCuMMBlsESPw3FYOaaftrAyw">
									<i class="fa fa-circle fa-stack-2x"></i>
									<i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
								</a>
							</span>
						</div> <!-- end of social icons container -->
						<h4>Official Partners</h4>
						<p>Haringey Council: <a>www.haringey.gov.uk</a> <br> London Parks & Gardens Trust: <a>www.londongardensonline.org.uk</a></p>
					</div>
				</div>
				
				<div class="col-md-4">
					<div class="footer-pane">
						<!-- Contact Form -->
						<form id="ContactForm" data-toggle="validator">
							<div class="form-group first">
								<input type="text" class="form-control-input" id="cname" placeholder="Name" required>
							</div>
							<div class="form-group second">
								<input type="email" class="form-control-input" id="cemail" placeholder="Email" required>
							</div>
							<div class="form-group third">
								<textarea class="form-control-textarea" id="cmessage" placeholder="Write your message here" rows="4" required></textarea>
							</div>
							<button type="submit" class="form-control-submit-button">SUBMIT</button>
							<div class="form-message">
								<div id="cmsgSubmit" class="h3 text-center hidden"></div>
							</div>
						</form>
					</div>
				</div>
			</div> <!-- end of row -->
		</div> <!-- end of container -->
	</div> <!-- end of footer -->
	
	
	<!-- COPYRIGHT -->
	<div class="copyright">
		<div class="container text-center">
			<span>Copyright © White Hart Lane Recreation Ground</span> Designed and Developed By Industry Standard Media Centre :&nbsp;<a href="mailto:ismctottenham@gmail.com?Subject=Web%20Design" target="_top">Send Mail</a>
		</div> <!-- end of container -->
	</div> <!-- end of copyright -->
			
	
	<!-- SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script> <!-- jQuery v2.2.4 - necessary for Bootstrap's JavaScript plugins -->
	<script src="js/bootstrap.min.js" type="text/javascript"></script> <!-- Bootstrap v3.3.7 -->
	<script src="js/jquery.easing.min.js" type="text/javascript"></script> <!-- jQuery Easing v1.3 for smooth scrolling between anchors -->
	<script src="js/jquery.countdown.min.js" type="text/javascript"></script> <!-- The Final Countdown v2.2.0 plugin for jQuery -->
	<script src="js/swiper.min.js" type="text/javascript"></script> <!-- Swiper v3.4.2 for image gallery swiper -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script> <!-- Magnific Popup v1.1.0 for lightboxes -->
	<script src="js/waypoints.min.js" type="text/javascript"></script> <!-- jQuery Waypoints v2.0.3 required by Counter-Up -->
	<script src="js/jquery.counterup.min.js" type="text/javascript"></script> <!-- Counter-Up v1.0 for statistics -->
	<script src="js/validator.min.js" type="text/javascript"></script> <!--  Validator.js v0.11.8 Bootstrap plugin that validates the registration form -->
	<script src="js/scripts.js" type="text/javascript"></script> <!-- Custom scripts -->
	
</body>
</html>