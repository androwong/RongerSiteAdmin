<?php
    include('../connection.php');
    
    $id = $_POST['recruit_id'];
    $recruitment = [];
    $results = mysqli_query($conn, "SELECT * FROM recruitment WHERE id = $id");
    while ($row = mysqli_fetch_array($results)) {
        $recruitment[0]['firstname'] = $row['firstname'];
        $recruitment[0]['lastname'] = $row['lastname'];
        $recruitment[0]['age'] = $row['age'];
        $recruitment[0]['dob'] = $row['dob'];
        $recruitment[0]['address'] = $row['address'];
        $recruitment[0]['address2'] = $row['address2'];
        $recruitment[0]['gender'] = $row['gender'];
        $recruitment[0]['city'] = $row['city'];
        $recruitment[0]['postcode'] = $row['postcode'];
        $recruitment[0]['email'] = $row['email'];
        $recruitment[0]['telephoneno'] = $row['telephoneno'];
        $recruitment[0]['mobileno'] = $row['mobileno'];
    }
    
    outputCsv($recruitment);

    function outputCsv( $assocDataArray ) {

        if ( !empty( $assocDataArray ) ):

            $fp = fopen( 'php://output', 'w' );
            fputcsv( $fp, array_keys( reset($assocDataArray) ) );

            foreach ( $assocDataArray AS $values ):
                fputcsv( $fp, $values );
            endforeach;

            fclose( $fp );
        endif;

        exit();
    }
?>