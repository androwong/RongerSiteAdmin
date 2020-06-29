
<?php include('admin/functions.php'); ?>

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
			<h2>Recruitment</h2>
			<img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">
			<p class="seventy-percent-width">
			
			<?php $results = mysqli_query($db, "SELECT * FROM tbl_pagetext where pagename = 'recruitment'");
        		$i=0; while ($row = mysqli_fetch_array($results)) {  echo $row['pagetext'];   }?>

			<!--Learn in <strong>just 3 days</strong> how to improve your online selling techniques by attending Argo's online selling training course. Our instructors are prepared to answer any questions about sales and marketing. -->
			</p>
			
			 <form id="RegistrationForm" data-toggle="validator" method="post" action="php/registrationform-process.php">
			 <div class="row">
			 <div class="col-md-4 col-md-offset-2">
									
										<span><strong>First Name *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="firstname" placeholder="First Name" required>
											<div class="help-block with-errors"></div>
										</div>

										<span><strong>Age *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="age" placeholder="Age" required>
											<div class="help-block with-errors"></div>
										</div>  
										
                                         <span><strong>Address *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="address" placeholder="Address" required>
											<div class="help-block with-errors"></div>
										</div>
										
										   <span><strong>Gender *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="gender" placeholder="Gender" required>
											<div class="help-block with-errors"></div>
                                        </div>                                    				
                                                                               
                                        <span><strong>Postcode *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="postcode" placeholder="Postcode" required>
											<div class="help-block with-errors"></div>
										</div>										
										
										<span><strong>Mobile Number. </strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="mobileno" placeholder="Mobile Number" >
											<div class="help-block with-errors"></div>
										</div>		
                                                                              

										<div class="form-group">
											<input type="checkbox" id="terms" value="Agreed-to-Terms" required> Agree to our <a class="show-terms popup-with-move-anim" href="#terms-and-conditions">terms and conditions</a>
											<div class="help-block with-errors"></div>
										</div>

										<!-- Magnific Popup Terms And Conditions Content -->
										<!-- mfp-hide class is required to keep the content hidden until the visitor clicks the button -->
										<div id="terms-and-conditions" class="terms-and-conditions-container zoom-anim-dialog mfp-hide">
											<div class="row">
												<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
												<div class="col-md-12">
													<h3>Terms & Conditions</h3>
													<hr>
													<h4>1. Introduction</h4>
													<p>Website terms and conditions may perform a number of different roles. They may be used to satisfy legal disclosure obligations, to grant users rights to use website materials, to impose acceptable use obligations, to limit (or attempt to limit) warranties and disclaim (or attempt to disclaim) liabilities, and more generally to structure the legal relationships between the website operator and users.</p>
													<h4>2. Terms List</h4>
													<ul>
														<li>License to use website</li>
														<li>Limitations of liability</li>
														<li>Breaches of these terms and conditions</li>
														<li>Registrations and authorizations</li>
														<li>These website terms and conditions</li>
													</ul>
													<h4>3. Reasonableness Details</h4>
													<p>This terms and conditions document covers some of the same ground as our website disclaimer and website copyright notice documents. It should be used in conjunction with a privacy policy document. The terms and conditions contain the following sections.</p>
													<h4>4. Credibility Conditions</h4>		
													<p>The types of personal information collected, and the uses to which it is typically put, depend in part upon the type of website and business that is collecting the information. An ecommerce store, for example, will collect or generate customer name and address information, payment information and order information. </p>
													<div class="highlight-box">
														<p>The classes of personal information will be put to different uses. For example, address information will be used for delivering products, and may also be used in marketing; whereas payment information will be used to collect payments and for accounting purposes. Some kinds of website – notably social networking websites and websites with social networking features – may collect and process huge amounts of personal information.</p>
													</div>
													<div class="buttons">
														<a class="button-outline mfp-close as-button" href="#header">BACK</a>
													</div>
												</div>
											</div>
										</div>
										
								</div> <!-- end of col-md-6 -->
								<div class="col-md-4 ">
								
								
								<span><strong>Last Name *</strong></span>
								<div class="form-group">
									<input type="text" class="form-control-input" id="lastname" placeholder="Last Name" required>
									<div class="help-block with-errors"></div>
								</div>
								
								<span><strong>Date Of Birth *</strong></span>
										<div class="form-group">
											<input type="date" class="form-control-input" id="dob" placeholder="Date Of Birth" required>
											<div class="help-block with-errors"></div>
										</div>
										
							    <span><strong>Address Line 2 *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="address2" placeholder="Address Line 2" required>
											<div class="help-block with-errors"></div>
										</div>	
										
                                <span><strong>City *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="city" placeholder="City" required>
											<div class="help-block with-errors"></div>
										</div>	
										
								<span><strong>Email Address *</strong></span>
										<div class="form-group">
											<input type="email" class="form-control-input" id="email" placeholder="Email" style="border-color:#ccc; margin:8px 0px" required >
											<div class="help-block with-errors"></div>
										</div>
										
								<span><strong>Telphone Number. </strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="telephoneno" placeholder="Telphone Number" >
											<div class="help-block with-errors"></div>
										</div>		
								
							
								</div>
								
								<input type="submit" class="form-control-submit-button" style="margin:auto; width:70%;">JOIN US</button>
										<br/> <br/>
										<div class="form-message">
											<div id="msgSubmit" class="h3 text-center hidden"></div>
										</div>
								</form>
									
								<p></p>
			        </div>					
		</div> <!-- end of container -->
	</div> <!-- end of overview -->
	
                                                                       
	</div>
					</div>
				</div>
			</div> <!-- end of header-content -->
		</div> <!-- end of IE vertical alignment fix -->
	</header> <!-- end of header -->
	
	

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