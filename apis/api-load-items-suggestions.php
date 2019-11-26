<?php

    $value = $_GET['value'];

    if( !isset($_GET['value']) ){
        echo '[]';
        exit;
    }

    $sjData = file_get_contents('../data.json');
    $jData = json_decode($sjData);
    
    $matches = [];

    foreach( $jData->ingredients as $ingredient ){


        $string = $value;
        $find = $ingredient->name;
        // $find = 'Potatos';

        if ( stripos($find, $value) !== false ){

            array_push($matches, $find);
            
        }

    }

    echo json_encode($matches);

?>