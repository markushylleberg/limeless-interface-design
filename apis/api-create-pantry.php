<?php

    $pantryName = $_GET['name'];
    $pantryMember = $_GET['member'];

    session_start();
    $id = $_SESSION['id'];

    $sjData = file_get_contents('../data.json');
    $jData = json_decode($sjData);

    $newPantryID = uniqid();
    $newPantry = new stdClass();

    // $membersStdClass = new stdClass();

    $newPantry->id = $newPantryID;
    $newPantry->name = $pantryName;
    $newPantry->members = [];
    $newPantry->ingredients = new stdClass();
    
    array_push($newPantry->members, $id);
    
    foreach( $jData->users as $user ){

        if ( $user->email == $pantryMember ){

            array_push($newPantry->members, $user->id);

        }

    }

    $jData->pantries->$newPantryID = $newPantry;


    $sjData = json_encode($jData, JSON_PRETTY_PRINT);
    file_put_contents('../data.json', $sjData);

?>