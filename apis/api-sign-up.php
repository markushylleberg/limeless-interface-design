<?php

    $imgID = uniqid();

    move_uploaded_file( $_FILES['image']['tmp_name'] , "../src/images/$imgID" );

    $firstName = $_POST['txtSignupFirstName'];
    $lastName = $_POST['txtSignupLastName'];
    $email = $_POST['txtSignupEmail'];
    $password = $_POST['txtSignupPassword'];

    $sjData = file_get_contents('../data.json');
    $jData = json_decode($sjData);


    // create user

    $newUserID = uniqid();
    $newUser = new stdClass();

    $newUser->id = $newUserID;
    $newUser->firstname = $firstName;
    $newUser->lastname = $lastName;
    $newUser->email = $email;
    $newUser->password = $password;
    $newUser->image = $imgID;
    $newUser->notifications = new stdClass();

    $jData->users->$newUserID = $newUser;


    // create default pantry

    $newPantryID = uniqid();
    $newPantry = new stdClass();


    $newPantry->id = $newPantryID;
    $newPantry->name = $firstName.'\'s pantry';
    $newPantry->members = [];
    $newPantry->ingredients = new stdClass();
    
    array_push($newPantry->members, $newUserID);
    
    $jData->pantries->$newPantryID = $newPantry;


    

    $sjData = json_encode($jData, JSON_PRETTY_PRINT);
    file_put_contents('../data.json', $sjData);

    session_start();

    $_SESSION['id'] = $newUserID;

?>