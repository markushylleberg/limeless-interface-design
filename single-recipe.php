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
                <h2><?php echo $jData->recipes->$recipeId->name ?></h2>
            </div>
            <div class="time-wrapper my-1">
                <p><?php echo $jData->recipes->$recipeId->time ?></p>
            </div>
            <div class="description-wrapper">
                <p><?php echo $jData->recipes->$recipeId->description ?></p>
            </div>
        </div>
    </div>

    <div class="separator m-2"></div>

    <div class="single-recipe-section">
        <div class="ingredient-wrapper row">
            <div class="ingredient-list col-6 md-col-6 sm-col-12 py-1 text-center">
                <p class="enlarged">Ingredient list</p>
                <p>Ingredient 2</p>
            </div>
            <div class="ingredients-missing col-6 md-col-6 sm-col-12 py-1 text-center">
                <p class="enlarged">You are missing</p>
                <p>Ingredient 4</p>
            </div>
        </div>
    </div>

    <div class="separator m-2"></div>

    <div class="single-recipe-section">
        <div class="procedure-wrapper mx-2">
            <p class="enlarged">Procedure</p>
            <p class="py-1">1) Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem </p>
            <p class="py-1">2) Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem </p>
            <p class="py-1">3) Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem </p>
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