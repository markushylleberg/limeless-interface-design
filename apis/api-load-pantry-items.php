<?php

    $id = $_GET['id'];

    $sjData = file_get_contents('../data.json');
    $jData = json_decode($sjData);

    foreach( $jData->pantries as $pantry ){
        if ( $pantry->id == $id ){
            echo json_encode($pantry->ingredients);
        }
    }
    // echo json_encode($jData->pantries->$id->ingredients);

?>