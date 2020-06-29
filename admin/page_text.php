<?php
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
	
	//echo $_REQUEST(;
//	echo $_GET['ptext'];
	
	
	

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
	
	<style>
	
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
		<!-- notification message -->
		<?php //if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h5>
					<?php 
						echo "Page Text";
					?>					
					
				</h5>
			</div>
		<?php //endif ?>
		<!-- logged in user information -->
		
	<?php	
	//print_r($_REQUEST);
	
	if(isset($_REQUEST['ptext']) and !empty($_REQUEST['ptext']))
	{
      
    $ptext = $_REQUEST['ptext'];  
	  	 
	$results = mysqli_query($db, "SELECT * FROM tbl_pagetext where pagename='$ptext'" )or die(mysqli_error($db));
	
    while ($row = mysqli_fetch_array($results)) { 
	 
	  $pagename = $row['pagename'];
	  $pagetext = $row['pagetext'];
	  $update = $row['id'];
	  
	}

    }
	
	
	?>
		
        <form name="pagetext" id="pagetext" method="POST" action="server2.php" >  
		
			<span><strong style="color:#000;">Title *</strong></span>
			<div class="form-group" style="width:33%;">
			<input type="text" class="form-control-input" id="title"  name="title"  placeholder="Title" 
			value = '<?php if(isset($pagename) and !empty($pagename)){ echo $pagename;} ?>' required readonly width="31%">
			<div class="help-block with-errors"></div>
			</div>
			
			<span><strong style="color:#000;">Page Text *</strong></span>
			<div class="form-group" style="width:33%;">
			<textarea  rows="4" cols="50" id="sub_title"  name="sub_title"  placeholder="Description" 
			value = '' required width="31%">
			<?php if(isset($pagetext) and !empty($pagetext)){ echo $pagetext;} ?>
			</textarea>
			<div class="help-block with-errors"></div>
			</div>	
			
			
		<button class="btn" type="submit" name="UpdateEvent"  style="background: #556B2F;" >Update Page Text
		<input type="hidden" name="edit_pagetext" id="edit_pagetext" value="edit_pagetext">
			<input type="hidden" name="update_id" id="update_id" value="<?php echo $update; ?>">
		
		</form>
				
		<?php //include("curd/recruitment.php"); ?>
		
	