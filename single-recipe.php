<!-- Import header from /components -->
<?php 
$pageTitle = 'Recipe';
require_once('components/header.php');


$recipeId = $_GET['id'];

$sjData = file_get_contents('data.json');
$jData = json_decode($sjData);


?>

<div id="singleRecipe">

<div class="py-3 mx-1">
    <a href="profile.php"><p class="text-left"><i class="fa fa-arrow-left text-warning"></i>Go back</p></a>

    <div class="single-recipe-section row">
        <div class="image-wrapper col-6 md-col-6 sm-col-12 m-2">
            <img src="src/images/<?php echo $jData->recipes->$recipeId->image ?>">
        </div>

        <div class="single-recipe-header col-6 md-col-6 sm-col-12 m-2">
            <div class="title-wrapper">
                <h2><?php echo $jData->recipes->$recipeId->name ?> <i class="fa fa-heart"></i></h2>
            </div>
            <div class="time-wrapper my-1">
                <p><?php echo $jData->recipes->$recipeId->time ?></p>
            </div>
            <div><i class="fa fa-ellipsis-h text-white"></i></div>
            <div class="description-wrapper my-1">
                <p><?php echo $jData->recipes->$recipeId->description ?></p>
            </div>
        </div>
    </div>

    <div class="separator m-2"></div>

    <div class="single-recipe-section">
        <div class="ingredient-wrapper row">
            <div class="ingredient-list col-6 md-col-6 sm-col-12 py-1 text-center">
                <p class="enlarged my-1">Ingredient list</p>
                <p>Ingredient 1</p>
                <p>Ingredient 5</p>
                <p>Ingredient 8</p>
                <p>Ingredient 9</p>
                <p>Ingredient 11</p>
                <p>Ingredient 53</p>
                <p>Ingredient 75</p>
            </div>
            <div class="ingredients-missing col-6 md-col-6 sm-col-12 py-1 text-center">
                <p class="enlarged my-1">You are missing</p>
                <p class="opacity-overlay">Ingredient 1</p>
                <p class="text-danger"><i class="fa fa-minus"></i>Ingredient 5</p>
                <p class="opacity-overlay">Ingredient 8</p>
                <p class="text-danger"><i class="fa fa-minus"></i>Ingredient 9</p>
                <p class="opacity-overlay">Ingredient 11</p>
                <p class="opacity-overlay">Ingredient 53</p>
                <p class="text-danger"><i class="fa fa-minus"></i>Ingredient 75</p>
            </div>
        </div>
    </div>

    <div class="separator m-2"></div>

    <div class="single-recipe-section">
        <div class="procedure-wrapper mx-2">
            <p class="enlarged">Procedure</p>
            <p class="py-1"><i class="fa fa-circle"></i> Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem </p>
            <p class="py-1"><i class="fa fa-circle"></i> Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem </p>
            <p class="py-1"><i class="fa fa-circle"></i> Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem </p>
        </div>
    </div>

</div>
</div>


<!-- <div class="py-3 mx-1">
    <a href="profile.php"><p class="text-left"><i class="fa fa-arrow-left text-warning"></i>Go back</p></a>
    
    <div class="align-center row mx-3">
        <div class="col-6">
            <img src="">
        </div>
        <div class="col-6">
        </div>
    </div>
</div>

 -->






<!-- Import footer from /components -->
<?php require_once('components/footer.php') ?>