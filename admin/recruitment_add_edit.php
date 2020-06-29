<?php 

    include('functions.php');	
	
	if (!isset($_SESSION['user']['username']))
	{
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (!isLoggedIn()) {
				
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
	    $update = 'false';
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = 'true';
		$record = mysqli_query($db, "SELECT * FROM recruitment WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			//print_r($n);
			
			$firstname = $n['firstname'];
            $lastname = $n['lastname'];
			$age = $n['age'];
			$dob = $n['dob'];
			$address = $n['address'];
            $address2 = $n['address2'];
			$gender = $n['gender'];
			$city = $n['city'];
			$postcode = $n['postcode'];
            $email = $n['email'];
			$telephoneno = $n['telephoneno'];
			$mobileno = $n['mobileno'];
		}

	}
	
	
	
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
<style>

  .nav > li > a:focus, .nav > li > a:hover {
     text-decoration: none !important ;
	 color:#fff !important ;
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
					<a class="page-scroll" href="index.php" style="color:yellow; "><p style="font-size:14px; padding-left:25px;"><strong>White Hart Lane Recreation Ground</strong></p></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="navbar-collapse collapse" id="myNavbar">
					<ul class="nav1 navbar-nav navbar-right" style="list-style-type:none;color:#fff; font-size:14px;float:left !important; padding-top:20px; padding-left:10px;">
			<li class="active"><a class="page-scroll" href="home.php" >Home</a></li>
			<li class="active"><a class="page-scroll" href="recruitment.php" >Recruitment</a></li>
                        <li class="active"><a class="page-scroll" href="event_calender.php">Event Calender</a></li>
                        <li class="active"><a class="page-scroll" href="photo_gallery.php">Photo Gallery</a></li>
                        <li class="active"><a class="page-scroll" href="newsletter.php">Newsletter</a></li> 
						
					</ul>
					
					
					 
				<?php  if (isset($_SESSION['user'])) : ?>
					<table style="float:right;padding-right:20px; width:auto !important; margin-right:20px;"><tr><td style="background-color:#fff;">
					<img src="images/user_profile.png" style="height:50px; width:50px; margin-top:5px;" >
					    
						<div  style="color:#000; float:right; margin-right:0px; text-align:left;"><?php echo ucfirst($_SESSION['user']['username']); ?> (<?php echo ucfirst($_SESSION['user']['user_type']); ?>)<br><a href="index.php?logout='1'" style="color: red;">logout</a></div> 
						
					
					</td></tr></table>
					
				<?php endif ?>
				    </div>
									
				</div>							
		</div>
	</div>
	<div class="content" style="width:90%; ">
	
	
	
	
		<!-- notification message -->
		<?php if(isset($_GET['data']) and !empty($_GET['data'])) 
		{ 
         	echo '<div class="error success" ><h3 style="text-align:center;">' ;
			echo $_GET['data']; 
			echo '</h3> </div>' ;
		}
		
		?>
		
		
		<div class="container">
		 <form id="RegistrationForm" data-toggle="validator" method="post" action="../php/registrationform-process.php" style="border:none;">
			 <div class="row">
			 <div class="col-md-4 col-md-offset-2">
									
										<span><strong>First Name *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="firstname"  name="firstname"  placeholder="First Name" 
											value = '<?php if(isset($firstname) and !empty($firstname)){ echo $firstname;} ?>' required>
											<div class="help-block with-errors"></div>
										</div>

										<span><strong>Age *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="age" name="age" placeholder="Age"
                                            value = '<?php if(isset($age) and !empty($age)){ echo $age;} ?>' required>
											<div class="help-block with-errors"></div>
										</div>  
										
                                         <span><strong>Address *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="address" name="address" placeholder="Address" 
											value = '<?php if(isset($address) and !empty($address)){ echo $address;} ?>' required>
											<div class="help-block with-errors"></div>
										</div>
										
										   <span><strong>Gender *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="gender" name="gender" placeholder="Gender" 
                                        value = '<?php if(isset($gender) and !empty($gender)){ echo $gender;} ?>'	required>
											<div class="help-block with-errors"></div>
                                        </div>                                    				
                                                                               
                                        <span><strong>Postcode *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="postcode" name="postcode" placeholder="Postcode" 
 										 value = '<?php if(isset($postcode) and !empty($postcode)){ echo $postcode;} ?>'	required>
											<div class="help-block with-errors"></div>
										</div>										
										
										<span><strong>Mobile Number. </strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="mobileno" name="mobileno" 
										 	value = '<?php if(isset($mobileno) and !empty($mobileno)){ echo $mobileno;} ?>' placeholder="Mobile Number" >
											<div class="help-block with-errors"></div>
										</div>		
                                                                              

										<div class="form-group">
											<input type="checkbox" id="terms" value="Agreed-to-Terms" required> Agree to our <a class="show-terms popup-with-move-anim" href="#terms-and-conditions">terms and conditions</a>
											<div class="help-block with-errors"></div>
										</div>

										
								</div> <!-- end of col-md-6 -->
								<div class="col-md-4 ">
								
								
								<span><strong>Last Name *</strong></span>
								<div class="form-group">
									<input type="text" class="form-control-input" id="lastname" name="lastname" 
									value = '<?php if(isset($lastname) and !empty($lastname)){ echo $lastname;} ?>'  placeholder="Last Name" required>
									<div class="help-block with-errors"></div>
								</div>
								
								<span><strong>Date Of Birth *</strong></span>
										<div class="form-group">
											<input type="date" class="form-control-input" id="dob" name="dob" 
										value = '<?php if(isset($dob) and !empty($dob)){ echo $dob;} ?>'	placeholder="Date Of Birth" required>
											<div class="help-block with-errors"></div>
										</div>
										
							    <span><strong>Address Line 2 *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="address2" name="address2" 
    										value = '<?php if(isset($address2) and !empty($address2)){ echo $address2;} ?>'	placeholder="Address Line 2" required>
											<div class="help-block with-errors"></div>
										</div>	
										
                                <span><strong>City *</strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="city" name="city" 
											value = '<?php if(isset($city) and !empty($city)){ echo $city;} ?>' placeholder="City" required>
											<div class="help-block with-errors"></div>
										</div>	
										
								<span><strong>Email Address *</strong></span>
										<div class="form-group">
											<input type="email" class="form-control-input" id="email" name="email" 
											 value = '<?php if(isset($email) and !empty($email)){ echo $email;} ?>' placeholder="Email" style="border-color:#ccc; margin:8px 0px" required >
											<div class="help-block with-errors"></div>
										</div>
										
								<span><strong>Telphone Number. </strong></span>
										<div class="form-group">
											<input type="text" class="form-control-input" id="telephoneno" 
											  value = '<?php if(isset($telephoneno) and !empty($telephoneno)){ echo $telephoneno;} ?>'  name="telephoneno" placeholder="Telphone Number" >
											<div class="help-block with-errors"></div>
										</div>		
								
							
								</div>
								
								<div style="text-align:center;">
								
								<input type="hidden" name="adminform" id="adminform" value="adminform">
								<?php if($update== 'true'){ ?>
                                <input type="hidden" name="adminupdate" id="adminupdate" value="adminupdate">
								<input type="hidden" name="update_id" id="update_id" value="<?php echo $id; ?>">
								
								<?php } ?>
								<input type="submit" class="form-control-submit-button1" style="margin:auto; width:60%;"></button> 
								
								</div>
										<br/> <br/>
										<div class="form-message">
											<div id="msgSubmit" class="h3 text-center hidden"></div>
										</div>
								</form>
					</div>			
		
	</div>
</body>
</html>