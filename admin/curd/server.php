
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
		$songs = $_FILES['songs']['name'];
		$thumb = $_FILES['thumb']['name'];
		
		//print_r($_FILES);
		
		$target_dir = "../media/thumb/";
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
			$_SESSION['message'] = "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
				$_SESSION['message'] = "The file ". basename( $_FILES["thumb"]["name"]). " has been uploaded.";
			} else {
				$_SESSION['message'] = "Sorry, there was an error uploading your file.";
			}
		}
		
		
		
		$target_dir = "../media/audio/";
		$target_file = $target_dir . basename($_FILES["songs"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["songs"]["tmp_name"]);
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
		if ($_FILES["songs"]["size"] > 10000000) {
			$_SESSION['message'] = "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "mp3") {
			$_SESSION['message'] = "Sorry, only mp3 are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			$_SESSION['message'] = "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["songs"]["tmp_name"], $target_file)) {
				echo "The file ". basename( $_FILES["songs"]["name"]). " has been uploaded.";
			} else {
				$_SESSION['message'] = "Sorry, there was an error uploading your file.";
			}
		}
		
		//echo "INSERT INTO songs (title, songs ,thumb) VALUES ('$title', '$songs' ,'$thumb')";

		mysqli_query($db, "INSERT INTO songs (title, songs ,thumb) VALUES ('$title', '$songs' ,'$thumb')"); 
		$_SESSION['message'] = $_SESSION['message'] ." <p>Song saved </p>"; 

		//header('location: index.php');	
		echo '<script> window.location.replace("index.php"); </script>';
		//window.location.replace("index.php");
		
	}

	//print_r($_POST);

	if (isset($_POST['update'])) {
		
		//echo '<pre>';
		
		//print_r($_FILES); print_r($_POST);
		$id = $_POST['id'];
		$title = $_POST['title'];
		
		if( empty($_FILES['songs']['name'])){ echo $songs  = $_POST['songsh']; } else { $songs  = $_FILES['songs']['name'] ; }
        if( empty($_FILES['thumb']['name'])){ echo $thumb= $_POST['thumbh']; } else {  $thumb = $_FILES['thumb']['name'];  } 
		
		//echo '</pre>';
		//print_r($_FILES); print_r($_POST);
		
		$target_dir = "../media/thumb/";
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
		
		
		
		$target_dir = "../media/audio/";
		$target_file = $target_dir . basename($_FILES["songs"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["songs"]["tmp_name"]);
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
		if ($_FILES["songs"]["size"] > 10000000) {
			$_SESSION['message'] = "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "mp3") {
			$_SESSION['message'] = "Sorry, only mp3 are allowed.";
			$uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			$_SESSION['message'] = "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
			if (move_uploaded_file($_FILES["songs"]["tmp_name"], $target_file)) {
				$_SESSION['message'] = "The file ". basename( $_FILES["songs"]["name"]). " has been uploaded.";
			} else {
				$_SESSION['message'] =  "Sorry, there was an error uploading your file.";
			}
		}

		
		

		mysqli_query($db, "UPDATE songs SET title='$title', songs='$songs' ,thumb='$thumb' where id='$id'");
		$_SESSION['message'] = $_SESSION['message'] . " <p>Songs updated! </p>"; 
		
		
		
		
		echo '<script> window.location.replace("index.php"); </script>';
		
		
		header('location: index.php');
	}
	
	

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM songs WHERE id=$id");
	$_SESSION['message'] = $_SESSION['message'] . " Songs deleted!"; 
	//header('location: index.php');
	echo '<script> window.location.replace("index.php"); </script>';
}


	$results = mysqli_query($db, "SELECT * FROM songs");

 ob_end_flush();
?>