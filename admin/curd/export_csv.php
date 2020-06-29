<?php
    include('../connection.php');
    if( isset($_POST['all_newsletter']) && $_POST['all_newsletter'] == true ) {
        $newsletters = [];
        $i = 0;
        $results = mysqli_query($conn, "SELECT * FROM newsletter");
        while ($row = mysqli_fetch_array($results)) {
            $i = $i + 1;
            $newsletters[$i]['name'] = $row['name'];
            $newsletters[$i]['email'] = $row['email'];
        }
        outputCsv($newsletters);
    } else if(isset($_POST['all_recurit']) && $_POST['all_recurit'] == true) {
        $recruitments = [];
        $i = 0;
        $results = mysqli_query($conn, "SELECT * FROM recruitment");
        while ($row = mysqli_fetch_array($results)) {
            $i = $i + 1;
            $recruitments[$i]['firstname'] = $row['firstname'];
            $recruitments[$i]['lastname'] = $row['lastname'];
            $recruitments[$i]['age'] = $row['age'];
            $recruitments[$i]['dob'] = $row['dob'];
            $recruitments[$i]['address'] = $row['address'];
            $recruitments[$i]['address2'] = $row['address2'];
            $recruitments[$i]['gender'] = $row['gender'];
            $recruitments[$i]['city'] = $row['city'];
            $recruitments[$i]['postcode'] = $row['postcode'];
            $recruitments[$i]['email'] = $row['email'];
            $recruitments[$i]['telephoneno'] = $row['telephoneno'];
            $recruitments[$i]['mobileno'] = $row['mobileno'];
        }
        outputCsv($recruitments);
    } else {
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
    }    
    

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