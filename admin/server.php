<?php ob_start();

 error_reporting(E_ALL); ini_set('display_errors', TRUE); 
 
	//session_start();
	include_once('functions.php');
	//$db = mysqli_connect('localhost', 'root', '', 'tum-vote-box');
    global $db, $errors;
	// initialize variables
	$name = "";
	$address = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		
		$title = $_POST['title'];
		$sub_title = $_POST['sub_title'];
		$thumb = $_FILES['thumb']['name'];
		$category = $_POST['category']; 
					
		$target_dir = "../images/";
		$target_file = $target_dir . basename($_FILES["thumb"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["thumb"]["tmp_name"]);
			if($check !== false) {
				$_SESSION['message'] = "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				$_SESSION['message'] = "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			$_SESSION['message'] = "Sorry, file already exists.";
			//$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["thumb"]["size"] > 10000000) {
			$_SESSION['message'] = "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			$_SESSION['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			$_SESSION['message'] .= "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
				$_SESSION['message'] = "The file ". basename( $_FILES["thumb"]["name"]). " has been uploaded.";
			} else {
				$_SESSION['message'] = "Sorry, there was an error uploading your file.";
			}
		}
		
		
		mysqli_query($db, "INSERT INTO photogallery (title,sub_title ,category ,thumb) VALUES ('$title','$sub_title','$category' ,'$thumb')"); 
		$_SESSION['message'] = $_SESSION['message'] ." <p>Image saved </p>"; 
		
		echo '<script> window.location.replace("photo_gallery.php"); </script>';		
	}

	

	if (isset($_POST['update'])) {
		
		$id = $_POST['id'];
		$title = $_POST['title'];
		$subtitle = $_POST['sub_title'];
		$category = $_POST['category'];
		
		
        if( empty($_FILES['thumb']['name'])){ echo $thumb= $_POST['thumbh']; } else {  $thumb = $_FILES['thumb']['name'];  } 
		
		//echo '</pre>';
		//print_r($_FILES); print_r($_POST);
		
		$target_dir = "../images/";
		$target_file = $target_dir . basename($_FILES["thumb"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["thumb"]["tmp_name"]);
			if($check !== false) {
				$_SESSION['message'] = "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				$_SESSION['message'] = "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			$_SESSION['message'] = "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["thumb"]["size"] > 10000000) {
			$_SESSION['message'] = "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			$_SESSION['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
				$_SESSION['message'] = "The file ". basename( $_FILES["thumb"]["name"]). " has been uploaded.";
			} else {
				$_SESSION['message'] = "Sorry, there was an error uploading your file.";
			}
		}
		
		
	   // echo "UPDATE photogallery SET title='$title', sub_title='$subtitle' ,category='$category' ,thumb='$thumb' where id='$id'" ;

		mysqli_query($db, "UPDATE photogallery SET title='$title', sub_title='$subtitle' ,category='$category' ,thumb='$thumb' where id='$id'");
		$_SESSION['message'] = $_SESSION['message'] . " <p>Image updated! </p>"; 
		
		echo '<script> window.location.replace("photo_gallery.php"); </script>';

		//header('location: index.php');
	}
	
	
	
		if (isset($_POST['monthcover']) and ($_POST['monthcover']=='add') ) {
		
		$title = $_POST['title'];
		$sub_title = $_POST['sub_title'];
		$thumb = $_FILES['thumb']['name'];
		
					
		$target_dir = "../calendar/img/";
		$target_file = $target_dir . basename($_FILES["thumb"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["thumb"]["tmp_name"]);
			if($check !== false) {
				$_SESSION['message'] = "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				$_SESSION['message'] = "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			$_SESSION['message'] = "Sorry, file already exists.";
			//$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["thumb"]["size"] > 10000000) {
			$_SESSION['message'] = "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			$_SESSION['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			$_SESSION['message'] .= "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
				$_SESSION['message'] = "The file ". basename( $_FILES["thumb"]["name"]). " has been uploaded.";
			} else {
				$_SESSION['message'] = "Sorry, there was an error uploading your file.";
			}
		}
		
		
		mysqli_query($db, "INSERT INTO tbl_month_cover (month,sub_title,thumb) VALUES ('$title','$sub_title','$thumb')"); 
		$_SESSION['message'] = $_SESSION['message'] ." <p>Image saved </p>"; 
		
		echo '<script> window.location.replace("month_cover.php"); </script>';		
	}
	
	//print_r($_REQUEST);
	
	if (isset($_POST['monthcover']) and ($_POST['monthcover']=="update")) {
		
		
		
		$id = $_POST['id'];
		$title = $_POST['title'];
		$subtitle = $_POST['sub_title'];
	
		
		
        if( empty($_FILES['thumb']['name'])){ echo $thumb= $_POST['thumbh']; } else {  $thumb = $_FILES['thumb']['name'];  } 
		
		//echo '</pre>';
		//print_r($_FILES); print_r($_POST);
		
		$target_dir = "../calendar/img/";
		$target_file = $target_dir . basename($_FILES["thumb"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["thumb"]["tmp_name"]);
			if($check !== false) {
				$_SESSION['message'] = "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				$_SESSION['message'] = "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			$_SESSION['message'] = "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["thumb"]["size"] > 10000000) {
			$_SESSION['message'] = "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			$_SESSION['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
				$_SESSION['message'] = "The file ". basename( $_FILES["thumb"]["name"]). " has been uploaded.";
			} else {
				$_SESSION['message'] = "Sorry, there was an error uploading your file.";
			}
		}
		
		
	   // echo "UPDATE photogallery SET title='$title', sub_title='$subtitle' ,category='$category' ,thumb='$thumb' where id='$id'" ;

		mysqli_query($db, "UPDATE tbl_month_cover SET month='$title', sub_title='$subtitle' ,thumb='$thumb' where id='$id'");
		$_SESSION['message'] = $_SESSION['message'] . " <p>Image updated! </p>"; 
		
		echo '<script> window.location.replace("month_cover.php"); </script>';

		//header('location: index.php');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//$_SESSION['message'] = '';
	
	
	
	if (isset($_POST['update_home'])) {
		
		$id = $_POST['id'];
		$title = $_POST['title'];
		
		$category = $_POST['category'];
		if(isset($_POST['content'])){ $content = $_POST['content']; }else{ $content = ''; }
		/*
		
        if( empty($_FILES['thumb']['name'])){ echo $thumb= $_POST['thumbh']; } else {  $thumb = $_FILES['thumb']['name'];  } 
		
	
		$target_dir = "../images/";
		$target_file = $target_dir . basename($_FILES["thumb"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["thumb"]["tmp_name"]);
			if($check !== false) {
				$_SESSION['message'] = "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				$_SESSION['message'] = "File is not an image.";
				$uploadOk = 0;
			}
		}
		// Check if file already exists
		if (file_exists($target_file)) {
			$_SESSION['message'] = "Sorry, file already exists.";
			$uploadOk = 0;
		}
		// Check file size
		if ($_FILES["thumb"]["size"] > 10000000) {
			$_SESSION['message'] = "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
			$_SESSION['message'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
				$_SESSION['message'] = "The file ". basename( $_FILES["thumb"]["name"]). " has been uploaded.";
			} else {
				$_SESSION['message'] = "Sorry, there was an error uploading your file.";
			}
		}
		
		
	   // echo "UPDATE photogallery SET title='$title', sub_title='$subtitle' ,category='$category' ,thumb='$thumb' where id='$id'" ;
*/
		mysqli_query($db, "UPDATE home SET title='$title' ,category='$category' ,thumb='' ,content='$content' where id='$id'");

		
		$_SESSION['message'] = "Successfully Updated";
		echo '<script> window.location.replace("home.php"); </script>';

		//header('location: index.php');
	}
	
	
	
	
	
	
	
	
	
	
	

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	$page = $_GET['page'];
	
	if($_GET['page'] == 'event_calendar')
	{
	$page = 'tbl_events';	
	}	
		
	mysqli_query($db, "DELETE FROM $page WHERE id=$id");
	$_SESSION['message'] =  "One Record deleted!"; 
	//header('location: index.php');
	//echo $page ; 
	
	if($page == "recruitment" )
	{ echo '<script> window.location.replace("recruitment.php"); </script>'; } 

    if($page == "photogallery")
	{  echo '<script> window.location.replace("photo_gallery.php"); </script>'; } 

    if($page == "tbl_events")
	{  echo '<script> window.location.replace("event_calender.php"); </script>'; } 


}
//	$results = mysqli_query($db, "SELECT * FROM $page");


if(isset($_POST['add_event']) and !empty($_POST['add_event']))
{   //print_r($_POST); //exit;
	$title = isset($_POST['title']) ? $_POST['title'] : "";
	$description = isset($_POST['sub_title']) ? $_POST['sub_title'] : "";
	$start = isset($_POST['start_date']) ? $_POST['start_date'] : "";
	$end = isset($_POST['end_date']) ? $_POST['end_date'] : "";
	
	if(isset($_POST['datalink'])and($_POST['datalink']=="Yes"))
	{ $link = isset($_POST['link']) ? $_POST['link'] : ""; }

    $datatag = isset($_POST['datatag']) ? $_POST['datatag'] : ""; 
	$repeat  = isset($_POST['repeat']) ? $_POST['repeat'] : ""; 
	
	
	
	$sqlInsert = "INSERT INTO tbl_events (title,description,start,end,datalink,datatag,repeat_month) VALUES 
	('".$title."','".$description."','".$start."','".$end ."','".$link."','".$datatag."','".$repeat."')";
	
	$result = mysqli_query($db, $sqlInsert);
	if (! $result) {
		$result = mysqli_error($db);
	}
	echo '<script> window.location.replace("event_calender.php"); </script>';
}

if(isset($_POST['edit_event']) and !empty($_POST['edit_event']))
{
	
//print_r($_POST);	
$id = $_POST['id'];
$title = $_POST['title'];
$sub_title = $_POST['sub_title'];
$start = $_POST['start_date'];
$end = $_POST['end_date'];

if(isset($_POST['datalink'])and($_POST['datalink']=="Yes"))
	{ $link = isset($_POST['link']) ? $_POST['link'] : ""; }

    $datatag = isset($_POST['datatag']) ? $_POST['datatag'] : ""; 
	
if(isset($_POST['eventrepeat'])and($_POST['eventrepeat']=="Yes"))
	$repeat  = isset($_POST['repeat']) ? $_POST['repeat'] : ""; 
	

$sqlUpdate = "UPDATE tbl_events SET title='" . $title . "',description='".$sub_title."',start='" . $start . "',end='" . $end . "',datalink='".$link."',datatag='".$datatag."',repeat_month='".$repeat."' WHERE id=" . $id;
mysqli_query($db, $sqlUpdate);
echo '<script> window.location.replace("event_calender.php"); </script>';


}

//echo "hello";
//print_r($_REQUEST);

if(isset($_REQUEST['newsletter_add']) and !empty($_REQUEST['newsletter_add']))
{   
    $name = $_REQUEST['name'];
    $email = $_REQUEST['mail'];
	$query= "INSERT INTO newsletter(name,email)VALUES ('$name','$email')"; 
	mysqli_query($db, $query);
	
	
	
	echo '<script> window.location.replace("../newsletter.php?message=Successful"); </script>';
}


if(isset($_REQUEST['mass_email']) and !empty($_REQUEST['mass_email']))
{
	
	$subject= $_POST['subject']; 
    $body= $_POST['body']; 
	
	$headers =  "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: info@whitehartlanerecreationground.com';

 
    $query= "SELECT * FROM newsletter"; 
    $result = mysqli_query($db, $query);

   $email1 ='';
while ($row = mysqli_fetch_array($result)) { 

	$name= $row['name']; 
	$email= $row['email']; 
	 
	$msg= "Dear $name,\n$body"; 
	mail($email, $subject, $msg, $headers); 
	$email1 .= $email.','; 
} 

echo '<script> window.location.replace("newsletter.php?mail_sent='.$email1.'"); </script>';
	

}
 ob_end_flush();
?>