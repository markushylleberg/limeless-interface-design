<?php

    $imgID = uniqid();

    move_uploaded_file( $_FILES['image']['tmp_name'] , "../src/images/$imgID" );

    $firstName = $_POST['txtSignupFirstName'];
    $lastName = $_POST['txtSignupLastName'];
    $email = $_POST['txtSignupEmail'];
    $password = $_POST['txtSignupPassword'];

    $sjData = file_get_contents('../data.json');
    $jData = json_decode($sjData);

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

    $sjData = json_encode($jData, JSON_PRETTY_PRINT);
    file_put_contents('../data.json', $sjData);

    session_start();

    $_SESSION['id'] = $newUserID;

?>