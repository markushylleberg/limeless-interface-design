<?php

    $pantry = $_GET['pantry'];
    $item = $_GET['item'];

    $sjData = file_get_contents('../data.json');
    $jData = json_decode($sjData);

    foreach( $jData->ingredients as $ingredient ){

        if ( $ingredient->name == $item ){

            $ingredientID = $ingredient->id;

            $newIngredient = new stdClass();

            $newIngredient->name = $ingredient->name;
            $newIngredient->category = $ingredient->category;

            if ( $ingredient->unit == 'entity' ){
                $newIngredient->quantity = 1;
            } else {
                $newIngredient->quantity = "1{$ingredient->unit}";
            }

            $jData->pantries->$pantry->ingredients->$ingredientID = $newIngredient;

            echo '{"name":"'.$ingredient->name.'","category":"'.$ingredient->category.'","quantity":"'.$ingredient->unit.'"}';
        }
        
        
    }

    $sjData = json_encode($jData, JSON_PRETTY_PRINT);
    file_put_contents('../data.json', $sjData);

?>