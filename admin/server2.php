<?php 
    
	ob_start();
    error_reporting(E_ALL); ini_set('display_errors', TRUE); 
 
	//session_start();
	include_once('functions.php');
	//$db = mysqli_connect('localhost', 'root', '', 'tum-vote-box');
    global $db, $errors;
	
	if (isset($_POST['edit_pagetext']) and ($_POST['edit_pagetext']=='edit_pagetext')) {
		
    $pagename = $_POST['title'] ;
    $pagetext = $_POST['sub_title'] ; 	
	$id = $_POST['update_id'] ;
	
	//echo 'UPDATE tbl_pagetext SET pagename="'.$pagename.'", pagetext ="'.$pagetext.'" where id="'.$id.'"' ;	
    mysqli_query($db,'UPDATE tbl_pagetext SET pagename="'.$pagename.'", pagetext ="'.$pagetext.'" where id="'.$id.'"') or die(mysqli_error($db));		
		
	echo '<script> window.location.replace("page_text.php?ptext='.$pagename.'"); </script>';		
	}