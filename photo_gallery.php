<?php include('admin/functions.php');	 ?>
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
	
	<style>
	
		h1 {
		font-size: 50px;
		word-break: break-all;
		}

		.row1 {
		margin: 8px -16px;
		}

		/* Add padding BETWEEN each column (if you want) */
		.row1,
		.row1 > .column {
		padding: 8px;
		}

		/* Create three equal columns that floats next to each other */
		.column {
		float: left;
		width: 33.33%;
		display: none; /* Hide columns by default */
		}

		/* Clear floats after rows */
		.row1:after {
		content: "";
		display: table;
		clear: both;
		}

		/* Content */
		.content {
		background-color: #228500;
		padding: 10px;
		}

		/* The "show" class is added to the filtered elements */
		.show {
		display: block;
		}

		/* Style the buttons */
		.btn {
		border: none;
		outline: none;
		padding: 12px 16px;
		background-color: #C3C2C1;
		cursor: pointer;
		color:#000;
		}

		/* Add a grey background color on mouse-over */
		.btn:hover {
		background-color:#228500;
		}

		/* Add a dark background color to the active button */
		.btn.active {
		background-color:#228500;
		color: white;
		}
		
		
		 @media only screen and (max-width: 800px) {
		
		.column {
		float: left;
		width: 50%;
		display: none; /* Hide columns by default */
		}
  
       }
		
		
		@media only screen and (max-width: 600px) {
		    
			.btn {
               padding: 10px 13px !important;
			   font-size: 13px !important;
              }
			
			p {
			font: 300 15px/1.6em "Ubuntu", sans-serif;
			font-weight: 300;
			}
		
			.column {
			float: left;
			width: 100%;
			display: none; /* Hide columns by default */
			}
			
		    	
  
       }

	
	</style>
	
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
			<h2>Photo Gallery</h2>
			<img class="decorative-line" src="images/decorative-line.svg" alt="decorative line">
			<p class="seventy-percent-width">
			
			<?php $results = mysqli_query($db, "SELECT * FROM tbl_pagetext where pagename = 'photography'");
        		$i=0; while ($row = mysqli_fetch_array($results)) {  echo $row['pagetext'];   }?>

			<!--Browse photos uploaded by<strong> White Hart Lane Recreation Ground</strong> from amateur and professional photographers who are local residents within Haringey. -->
			
			</p>
			
<!--<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/BqHN2XVFgbU/?utm_source=ig_embed&amp;utm_medium=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/BqHN2XVFgbU/?utm_source=ig_embed&amp;utm_medium=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div><div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BqHN2XVFgbU/?utm_source=ig_embed&amp;utm_medium=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">The Friends Of White Hart Lane Recreation Ground www.facebook.com/TheFriendsOfWhiteHartLaneRecreationGround #TheFriendsOfWhiteHartLaneRecreationGround #WhiteHartLaneRecreationGround #WhiteHartLane #Haringey #Tottenham #NorthLondon #Connecting #families #residents #community #Supporting #Core #Stability #CoreStability</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/whitehartlanerecreationground/?utm_source=ig_embed&amp;utm_medium=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Friends Of White Hart Lane RG</a> (@whitehartlanerecreationground) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2018-11-13T07:50:30+00:00">Nov 12, 2018 at 11:50pm PST</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script> -->

			
			<div id="myBtnContainer">
			  <button class="btn active" id="12" onclick="filterSelection('all')"> Show all</button>
			  <button class="btn" id="12" onclick="filterSelection('activities')"> Activities</button>
			  <button class="btn" id="12" onclick="filterSelection('leisure')"> Leisure</button>
			  <button class="btn" id="12" onclick="filterSelection('people')"> People</button>
			</div>
			
			<div class="row1" style="color:#fff">
			
			<?php 
                $results = mysqli_query($db, "SELECT * FROM photogallery order by id Desc");
        		$i=0; while ($row = mysqli_fetch_array($results)) { ?>  
			
			  <div class="column <?php echo $row['category']; ?>">
				<div class="content">
				<img  src="http://whitehartlanerecreationground.com/images/<?php echo $row['thumb']; ?>" alt="<?php echo $row['title']; ?>" style="width:346px; height:230px;" >
				  <h4 style="margin:0px; color:#fff;"> <?php echo $row['title']; ?> </h4>
				  <span><?php echo $row['sub_title']; ?></span>
				</div>
			  </div>
			  
				<?php  } ?> 
			</div>
			
		
			
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
	
	<script>
	   
	    var first = 1; 
	   
	    function removeactive()
		{
		
		var els = document.querySelectorAll('.active')
		for (var i = 0; i < els.length; i++) {
          els[i].classList.remove('active')
         }
					
		}
	   
		filterSelection("all") // Execute the function and show all columns
		function filterSelection(c) {
		var x, i;
		x = document.getElementsByClassName("column");
		if (c == "all") c = "";
		// Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
		for (i = 0; i < x.length; i++) {
		w3RemoveClass(x[i], "show");
		if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
		}
		 
		if( first != 1) {  removeactive();  } first = first+1;  
		 
		}
		
		
		// Show filtered elements
		function w3AddClass(element, name) {
		var i, arr1, arr2;
		arr1 = element.className.split(" ");
		arr2 = name.split(" ");
		for (i = 0; i < arr2.length; i++) {
		if (arr1.indexOf(arr2[i]) == -1) {
		  element.className += " " + arr2[i];
		}
		}
		}

		// Hide elements that are not selected
		function w3RemoveClass(element, name) {
		var i, arr1, arr2;
		arr1 = element.className.split(" ");
		arr2 = name.split(" ");
		for (i = 0; i < arr2.length; i++) {
		while (arr1.indexOf(arr2[i]) > -1) {
		  arr1.splice(arr1.indexOf(arr2[i]), 1);
		}
		}
		element.className = arr1.join(" ");
		}

		// Add active class to the current button (highlight it)
		/*var btnContainer = document.getElementById("myBtnContainer");
		var btns = btnContainer.getElementsByClassName("btn");
		for (var i = 0; i < btns.length; i++) {
		btns[i].addEventListener("click", function(){
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
		});
		}
		*/
		
		// Get the container element
		var btnContainer = document.getElementById("myBtnContainer");

		// Get all buttons with class="btn" inside the container
		var btns = btnContainer.getElementsByClassName("btn");
		
		

		

		// Loop through the buttons and add the active class to the current/clicked button
		for (var i = 0; i < btns.length; i++) {
		  btns[i].addEventListener("click", function() {
			var current = document.getElementsByClassName("active");

			// If there's no active class
			if (current.length > 0) { 
			  current[0].className = current[0].className.replace(" active", "");
			}

			// Add the active class to the current/clicked button
			this.className += " active";
		  });
		}
		
		
		

	</script>
	
</body>
</html>