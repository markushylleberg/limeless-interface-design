<?php

    $pantryId = $_GET['id'];

    $sjData = file_get_contents('../data.json');
    $jData = json_decode($sjData);

    $members = json_encode($jData->pantries->$pantryId->members, true);

    // echo $members;

    $array = [];

    foreach( $jData->users as $user ){

        if ( in_array($user->id, $jData->pantries->$pantryId->members) ){
            array_push($array, $user->image);
        }

    }

    echo json_encode($array);
?>