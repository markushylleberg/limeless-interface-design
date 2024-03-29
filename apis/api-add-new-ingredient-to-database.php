<?php

$sjData = file_get_contents('../data.json');
$jData = json_decode($sjData);

$ingredientName = $_POST['ingredientName'];
$ingredientCategory = $_POST['ingredientCategory'];
$ingredientUnit = $_POST['ingredientUnit'];

$newIngredientID = uniqid();
$newIngredient = new stdClass();

$newIngredient->id = $newIngredientID;
$newIngredient->name = $ingredientName;
$newIngredient->category = $ingredientCategory;
$newIngredient->unit = $ingredientUnit;

$jData->ingredients->$newIngredientID = $newIngredient;

$sjData = json_encode($jData, JSON_PRETTY_PRINT);
file_put_contents('../data.json', $sjData);


?>