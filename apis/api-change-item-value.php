<?php

    $item = $_GET['item'];
    $action = $_GET['action'];
    $pantry = $_GET['id'];

    $sjData = file_get_contents('../data.json');
    $jData = json_decode($sjData);

    
    $ingredientId;
    $ingredientUnit;

    foreach( $jData->ingredients as $ingredient ){

        if ( $ingredient->name == $item ){
            $ingredientId = $ingredient->id;
            $ingredientUnit = $ingredient->unit;
        }

    }

    $currentValue = preg_replace('/[^0-9.]+/', '', $jData->pantries->$pantry->ingredients->$ingredientId->quantity);

        if ( $action == 'increase' ){

            if ( $ingredientUnit == 'kg' ){

                $newValue = $currentValue + 0.5;
                echo $newValue.$ingredientUnit;
                $jData->pantries->$pantry->ingredients->$ingredientId->quantity = $newValue.$ingredientUnit;                

            } else if ( $ingredientUnit == 'entity' ) {

                $newValue = $currentValue + 1;
                echo $newValue;
                $jData->pantries->$pantry->ingredients->$ingredientId->quantity = $newValue;
                

            } else if ( $ingredientUnit == 'g' ) {

                $newValue = $currentValue + 100;
                echo $newValue.$ingredientUnit;
                $jData->pantries->$pantry->ingredients->$ingredientId->quantity = $newValue.$ingredientUnit;
                

            } else if ( $ingredientUnit == 'liter' ) {

                $newValue = $currentValue + 1;
                echo $newValue.$ingredientUnit;
                $jData->pantries->$pantry->ingredients->$ingredientId->quantity = $newValue.$ingredientUnit;
            }



        } else if ( $action == 'decrease' ) {

            if ( $ingredientUnit == 'kg' ){

                $newValue = $currentValue - 0.5;
                echo $newValue.$ingredientUnit;
                $jData->pantries->$pantry->ingredients->$ingredientId->quantity = $newValue.$ingredientUnit;
                


            } else if ( $ingredientUnit == 'entity' ) {

                $newValue = $currentValue - 1;
                echo $newValue;
                $jData->pantries->$pantry->ingredients->$ingredientId->quantity = $newValue;
                


            } else if ( $ingredientUnit == 'g' ) {

                $newValue = $currentValue - 100;
                echo $newValue.$ingredientUnit;
                $jData->pantries->$pantry->ingredients->$ingredientId->quantity = $newValue.$ingredientUnit;
                


            } else if ( $ingredientUnit == 'liter' ) {

                $newValue = $currentValue - 1;
                echo $newValue.$ingredientUnit;
                $jData->pantries->$pantry->ingredients->$ingredientId->quantity = $newValue.$ingredientUnit;

            }


        } else if ( $action == 'delete' ) {

            unset($jData->pantries->$pantry->ingredients->$ingredientId);

        }


    $sjData = json_encode($jData, JSON_PRETTY_PRINT);
    file_put_contents('../data.json', $sjData);

?>