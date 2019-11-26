<?php

$sjData = file_get_contents('../data.json');
$jData = json_decode($sjData);

session_start();

$id = $_SESSION['id'];


if (is_uploaded_file($_FILES['newProfilePicture']['tmp_name'])){
    
    $imgID = uniqid();
    
    move_uploaded_file( $_FILES['newProfilePicture']['tmp_name'] , "../src/images/$imgID" );
    
    $jData->users->$id->image = $imgID;

}


$firstName = $_POST['txtEditFirstName'];
$lastName = $_POST['txtEditLastName'];
$email = $_POST['txtEditEmail'];
$password = $_POST['txtEditPassword'];

$jData->users->$id->firstname = $firstName;
$jData->users->$id->lastname = $lastName;
$jData->users->$id->email = $email;
$jData->users->$id->password = $password;

$sjData = json_encode($jData, JSON_PRETTY_PRINT);
file_put_contents('../data.json', $sjData);


?>