<?php
    include('../connection.php');
    $about_text = mysqli_real_escape_string($conn, $_POST['about_text']);
    $results = mysqli_query($conn, "UPDATE `tbl_pagetext` SET `pagetext` = '".$about_text."'WHERE pagename = 'about'") or die(mysqli_error($conn));
    if($results) {
        echo "success";
    } else {
        echo "fail";
    }

?>