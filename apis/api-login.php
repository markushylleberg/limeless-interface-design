<?php

    $email = $_GET['email'];
    $password = $_GET['password'];

    $sjData = file_get_contents('../data.json');
    $jData = json_decode($sjData);

    foreach ( $jData->users as $user ){
        
        if ( $user->email == $email && $user->password == $password ){

            session_start();

            $_SESSION['id'] = $user->id;

            echo 'succes';
            exit;
        }
    };

    echo 'Sorry! Email or password is wrong';

?>