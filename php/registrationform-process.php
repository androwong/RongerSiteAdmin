<?php  include("../admin/connection.php");
	   global $conn;

$errorMSG = "";
// FIRST-NAME
if (empty($_POST["firstname"])) {
    $errorMSG = "First name is required ";
} else {
    $firstname = $_POST["firstname"];
}
// LAST-NAME
if (empty($_POST["lastname"])) {
    $errorMSG = "Last name is required ";
} else {
    $lastname = $_POST["lastname"];
}

// AGE
if (empty($_POST["age"])) {
    $errorMSG = "Age is required ";
} else {
    $age = $_POST["age"];
}

// DATE OF BIRTH
if (empty($_POST["dob"])) {
    $errorMSG = "Date of Birth is required ";
} else {
    $dob = $_POST["dob"];
}

// Address
if (empty($_POST["address"])) {
    $errorMSG = "Address is required ";
} else {
    $address = $_POST["address"];
}

// ADDRESS 2
if (empty($_POST["address2"])) {
    $errorMSG = "Address 2 is required ";
} else {
    $address2 = $_POST["address2"];
}

// Gender
if (empty($_POST["gender"])) {
    $errorMSG = "Gender is required ";
} else {
    $gender = $_POST["gender"];
}

// CITY
if (empty($_POST["city"])) {
    $errorMSG = "City is required ";
} else {
    $city = $_POST["city"];
}

//POSTCODE
if (empty($_POST["postcode"])) {
    $errorMSG = "Postcode is required ";
} else {
    $postcode = $_POST["postcode"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG = "Email is required ";
} else {
    $email = $_POST["email"];
}

// Telephone Number 
if (empty($_POST["telephoneno"])) {
    $telephoneno = '';
} else {
    $telephoneno = $_POST["telephoneno"];
}

// Mobile Number
if (empty($_POST["mobileno"])) {
    	$mobileno = ''; 
} else {
    $mobileno = $_POST["mobileno"];
}


// TERMS
if (empty($_POST["terms"])) {
    $errorMSG .= "Terms is required ";
} else {
    $terms = $_POST["terms"];
}

//print_r($_POST);


if (empty($_POST["update_id"])) {
    //$errorMSG .= "Terms is required ";
} else {
    $update_id = $_POST["update_id"];
}



if(isset($_POST['adminupdate']) and !empty($_POST['adminupdate']))
{
	$query = "Update recruitment set firstname= '$firstname' , lastname='$lastname',age='$age',dob='$dob',address='$address',address2='$address2',
	          gender='$gender',city='$city',postcode='$postcode',email='$email',telephoneno='$telephoneno',mobileno='$mobileno' 
			  where id=$update_id";
	mysqli_query($conn, $query);		  
	
	header('location: ../admin/recruitment_add_edit.php?data=Form Updated');
	exit;
	
}else{
  
  $query = "INSERT INTO recruitment (firstname, lastname, age, dob,address,address2,gender,city,postcode,email,telephoneno,mobileno) 
			VALUES('$firstname', '$lastname', '$age', '$dob', '$address','$address2','$gender','$city','$postcode','$email','$telephoneno','$mobileno')";
				mysqli_query($conn, $query);
}			
				
				
$EmailTo = "info@whitehartlanerecreationground.com , gehlotravindra@gmail.com";
$Subject = "New WHLRG Recruitment Application";

// prepare email body text
$Body = "";
$Body .= "First Name: ";
$Body .= $firstname;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $lastname;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Age: ";
$Body .=$age;
$Body .= "\n";
$Body .= "Date of Birth: ";
$Body .=$dob;
$Body .= "\n";
$Body .= "Address: ";
$Body .=$address;
$Body .= "\n";
$Body .= "Address 2: ";
$Body .=$address2;
$Body .= "\n";
$Body .= "Gender: ";
$Body .=$gender;
$Body .= "\n";
$Body .= "City: ";
$Body .=$city;
$Body .= "\n";
$Body .= "Postcode: ";
$Body .=$postcode;
$Body .= "\n";
if(isset($telephoneno)) {
$Body .= "Telephone Number: ";
$Body .=$telephoneno; 
$Body .= "\n"; }
if(isset($mobileno)) {
$Body .= "Mobile Number: ";
$Body .=$mobileno;
$Body .= "\n"; }

$Body .= "Terms: ";
$Body .= $terms;
$Body .= "\n";
// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
// redirect to success page
if ($success && $errorMSG == ""){
   //echo "success";
}else{
    if($errorMSG == ""){
       // echo "Something went wrong :(";
    } else {
       // echo $errorMSG;
    }
}

if (!empty($_POST["adminform"])) {
  header('location: ../admin/recruitment_add_edit.php?data=Form Added');
}

//echo  "All Data Successfully saved"; 




?>