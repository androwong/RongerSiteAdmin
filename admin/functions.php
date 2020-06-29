<?php   error_reporting(E_ERROR | E_PARSE);
    session_start();
    include("connection.php");
	
	global $conn;
    $db = $conn;
	
	$username = "";
	$email    = "";
	$errors   = array(); 

	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: login.php");
		die();
	}

	// REGISTER USER
	function register(){
		global $db, $errors;

		// receive all input values from the form
		$username    =  e($_POST['username']);
		$email       =  e($_POST['email']);
		$password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		if (empty($email)) { 
			array_push($errors, "Email is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', '$user_type', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: home.php');
				die();
			}else{
				$query = "INSERT INTO users (username, email, user_type, password) 
						  VALUES('$username', '$email', 'user', '$password')";
				mysqli_query($db, $query);

				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				 header('location: index.php');	
                die();				 
			}

		}

	}

	// return user array from their id
	
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM users WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	
	function login(){
		global $db, $username, $errors;

		// grap form values
		
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		
		if (count($errors) == 0) {
			$password1 = md5($password);

			$query = "SELECT * FROM users WHERE username='$username' AND password='$password1' LIMIT 1";
			$results = mysqli_query($db, $query);
			

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				
				//print_r($logged_in_user);
				//exit;
				
				if ($logged_in_user['user_type'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: home.php');	
					die();
					}else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('location: index.php');
					die();
				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

	function array_to_csv_download($array, $filename = "export.csv", $delimiter=";") {
		// open raw memory as file so no temp files needed, you might run out of memory though
		$f = fopen('php://memory', 'w'); 
		// loop over the input array
		foreach ($array as $line) { 
			// generate csv lines from the inner arrays
			fputcsv($f, $line, $delimiter); 
		}
		// reset the file pointer to the start of the file
		fseek($f, 0);
		// tell the browser it's going to be a csv file
		header('Content-Type: application/csv');
		// tell the browser we want to save it instead of displaying it
		header('Content-Disposition: attachment; filename="'.$filename.'";');
		// make php send the generated csv lines to the browser
		fpassthru($f);
	}	

?>