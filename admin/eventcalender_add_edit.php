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
	
	if(isset($_REQUEST['edit']) and !empty($_REQUEST['edit']))
	{
		$update = $_REQUEST['edit']; 
	
	
	$record = mysqli_query($db, "SELECT * FROM tbl_events WHERE id=$update");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$title = $n['title'];
			$desc = $n['description'];
			$start = $n['start'];
			$end = $n['end'];
			$link = $n['datalink'];
			$datatag = $n['datatag'];
			$repeat = $n['repeat_month'];
			
			
			
			
						
		}
	}
	
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
	<div class="content" style="width:90%; height:780px;">
		<!-- notification message -->
		<?php // if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h5>
					<?php 
						echo "Event Calender Add Edit";
					?>
				</h5>
			</div>
		<?php //endif ?>
		<!-- logged in user information -->
		
		

<form method="post" action="server.php" enctype="multipart/form-data" >

	<input type="hidden" name="id" value="<?php echo $update; ?>">

	<span><strong style="color:#000;">Title *</strong></span>
		<div class="form-group" style="width:33%;">
		<input type="text" class="form-control-input" id="title"  name="title"  placeholder="Title" 
		value = '<?php if(isset($title) and !empty($title)){ echo $title;} ?>' required width="31%">
		<div class="help-block with-errors"></div>
		</div>
		
		
    <span><strong style="color:#000;">Description *</strong></span>
		<div class="form-group" style="width:33%;">
		<textarea  rows="4" cols="50" id="sub_title"  name="sub_title"  placeholder="Description" 
		value = '' required width="31%">
		<?php if(isset($desc) and !empty($desc)){ echo $desc;} ?>
		</textarea>
		<div class="help-block with-errors"></div>
		</div>	
										
    
	<div class="form-group" style="width:31%;vertical-align: top;">
		<label style="color:#000;" >Start Date </label>
        &nbsp; &nbsp; &nbsp; <input type="date" name="start_date" id="start_date" value="<?php echo $start; ?>">
	</div>
	
	<br/>
	
	<div class="form-group" style="width:31%;vertical-align: top;">
		<label style="color:#000;" >End Date </label>
        &nbsp; &nbsp; &nbsp;   <input type="date" name="end_date" id="end_date" value="<?php echo $end; ?>">
	</div>
	
	 <br>
	 
	 <span><strong style="color:#000;">URL Link *</strong></span>	
        <div class="form-group" style="width:33%;" style="color:#000;">
		<input type="radio" id="datalink"  name="datalink" value="Yes"  
		 ><span style="color:#000;"<?php if(!empty($link)) ?>> Yes </span> &nbsp;
		
		<input type="radio"  id="datalink"  name="datalink" value="no" 
		 > <span style="color:#000;">No </span>&nbsp; <br>
		 
		 <input type="text" name="link" id="link" class="form-control-input" value="<?php  echo $link; ?>" >
		
		</div>		
		<br>
		
		
	<span><strong style="color:#000;">Colour Tag *</strong></span>	
        <div class="form-group" style="width:33%;" style="color:#000;">
		<input type="radio" id="datatag"  name="datatag" value="red"  placeholder="Description" 
		value = '<?php if(isset($desc) and !empty($desc)){ echo $desc;} ?>' ><span style="color:#000;"> Red </span> &nbsp;
		
		<input type="radio"  id="datatag"  name="datatag" value="blue"  placeholder="Description" 
		value = '<?php if(isset($desc) and !empty($desc)){ echo $desc;} ?>' > <span style="color:#000;">Blue </span>&nbsp;
		
		<input type="radio"  id="datatag"  name="datatag" value="important"  placeholder="Description" 
		value = '<?php if(isset($desc) and !empty($desc)){ echo $desc;} ?>' > <span style="color:#000;">Meganta</span>&nbsp;
		
		</div>		
		<br>
		
				
		<span><strong style="color:#000;"> Event Repeat  *</strong></span>	
        <div class="form-group" style="width:33%;" style="color:#000;">
		<input type="radio" id="eventrepeat"  name="eventrepeat" value="Yes"  
		 ><span style="color:#000;"> Yes </span> &nbsp;
		
		<input type="radio"  id="eventrepeat"  name="eventrepeat" value="no" 
		 > <span style="color:#000;">No </span>&nbsp;
		 <br> <br>
		<select id="repeat"  name="repeat"  class="form-control-input" >		
		<option value="" >--Select-- </option>
		<option value="everyweek">Weekly </option>
		<option value="everymonth" > Monthly</option>
		<option value="everyyear" > Yearly</option>
		</select>
		</div>		
		<br>
		
		
	
	<div class="form-group">

		<?php if ($update == true): ?>
			<br/>
			<button class="btn" type="submit" name="UpdateEvent"  style="background: #556B2F;" >Update Event</button>
			<input type="hidden" name="edit_event" id="edit_event" value="update_event">
			<input type="hidden" name="update_id" id="update_id" value="<?php echo $update; ?>">
		<?php else: ?>
			<button class="btn" type="submit" name="Save Event" >Save</button>
			<input type="hidden" name="add_event" id="add_event" value="add_event">
		<?php endif ?>
	</div>
</form>

        		
		
		
	</div>
</body>
</html>