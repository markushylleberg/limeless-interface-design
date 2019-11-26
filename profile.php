<!-- Import header from /components -->
<?php 
$pageTitle = 'Profile';
require_once('components/header.php');

if ( !$_SESSION ){
    header('Location: index.php');
    exit;
}

$c = 0;

foreach( $jData->pantries as $pantry ){
    if (in_array($id, $pantry->members)){

        if( $c == 0 ){
            $firstPantryName = $pantry->name;
            $firstPantryId = $pantry->id;
            $selectedPantryName = $firstPantryName;
            $selectedPantryId = $firstPantryId;
        } else {
            $selectedPantryName = $firstPantryName;
            $selectedPantryId = $firstPantryId;
        }

    $c++;
    }}





?>


<div class="columns row m-1">

<div class="sm-col-12 md-col-4 col-3">

<!-- Left section w. profile details -->
<div id="profile" class="left">
    <div class="head profile-section">
        <div class="row tablet-width-25 about-right-border">
            <div class="sm-col-4 md-col-12 col-12 text-center">
                <div class="image-wrapper">
                    <!-- Avatar -->
                    <img src="./src/images/<?php echo $jData->users->$id->image ?>" class="round-img medium-avatar" alt="User avatar">
                </div>
                    <div class="title-wrapper">
                        <p class="bold">Hello, <?php echo $jData->users->$id->firstname ?>!</p>

                    <div class="edit-profile-btn">
                        <a href="edit-profile.php"><button class="btn-secondary"><i class="fa fa-pencil"></i>Edit</button></a>
                    </div>
                </div>
            </div>


        <div class="body profile-section sm-col-8 md-col-12 col-12 p-1">
            <div class="explainer">
                <p class="text-center"><i class="fa fa-circle text-info"></i>You have 3 new notifications</p>
            </div>
            <div id="notificationsPanel">
                <div class="inner">
                    <div class="notification-item">
                        <span class="plain-circle"></span>
                            <p>Your <u>milk</u> might expire soon!</p>
                            <i class="fa fa-times"></i>
                    </div>
                    <div class="notification-item">
                        <span class="plain-circle"></span>
                            <p>Your <u>milk</u> might expire soon!</p>
                        <i class="fa fa-times"></i>
                    </div>
                    <div class="notification-item">
                        <span class="plain-circle"></span>
                            <p>Mike <u>added</u> you to "Office"</p>
                        <i class="fa fa-times"></i>
                    </div>
                </div>
                <div class="row">
                    <div class="sm-col-6 md-col-6 col-6">
                        <p id="showHideNotificationsButton" class="pointer m-1">Hide</p>
                    </div>
                    <div id="clearAllNotificationsButton" class="pointer my-1 text-right sm-col-6 md-col-6 col-6">
                        <p class="not-clickable"><i class="fa fa-times"></i>Clear all</p>
                    </div>
                </div>
        </div>
        </div>
        </div>
    </div>
</div>

</div>

<div class="separator sm-col-12 my-1 hide-on-desktop"></div>

<div class="right-profile sm-col-12 md-col-8 col-9">

<div id="tabs" class="right md-col-12 col-12">

    <div class="head tabs-section">
            <div class="row">
                <div id="tabsProfile" class="my-1 text-left sm-col-12 md-col-12 col-12">
                    <div id="pantriesTabBtn">
                        <div class="tab active" id="recipesTab"><p>Recipes</p></div>
                        <div class="tab" id="pantriesTab"><p>Pantries</p></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="selected-field-name sm-col-4 md-col-4 col-2 px-1">
                    <p id="pantrySelected" class="enlarged"><?php echo $firstPantryName ?></p>
                </div>
                <div class="members-of-pantry sm-col-4 row">

                    <?php

                            foreach( $jData->pantries as $pantry ){

                                foreach( $jData->users as $user ){

                                    if ( in_array($user->id, $pantry->members) && $pantry->id == $selectedPantryId ){
                                        echo '<div class="member-image">
                                                <img src="src/images/'.$user->image.'" class="small-avatar round-img sm-col-2">
                                            </div>';
                                    }

                                }
                               };

                    ?>

                </div>
                <div class="text-white col-8 md-col-6 sm-col-4 text-right hidden">
                    <button id="newPantryBtn" class="btn-warning text-white unclickable-icon"><i class="fa fa-plus"></i>New pantry</button>
                </div>
                <div class="text-white col-8 md-col-6 sm-col-4 text-right hidden">
                    <button id="cancelPantryBtn" class="btn-warning danger text-white unclickable-icon"><i class="fa fa-times"></i>Cancel</button>
                </div>

                <div id="newPantrySection" class="new-pantry-section my-1 col-12 hidden">
                    <div class="col-10 md-col-10">
                            <p class="mx-1 enlarged">Create new pantry</p>
                            <p class="mx-1">Please make sure to type the correct email of the member you wish to add to this pantry</p>
                        <form id="newPantryFrm" class="row">
                            <div class="col-4 md-col-4 sm-col-12 m-1">
                                <input type="text" name="txtPantryName" id="txtPantryName" placeholder="Name of pantry">
                            </div>
                            <div class="col-4 md-col-4 sm-col-12 m-1">
                                <input type="text" name="txtPantryMemberMail" id="txtPantryMemberMail" placeholder="Email of member">
                            </div>
                            <div class="col-4 md-col-4 sm-col-12 align-center">
                                <button id="submitNewPantryBtn" class="btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        <div class="row" id="changePantrySection">


            <div class="outer-selection sm-col-6 md-col-3 col-2 my-1" id="changeTab">
                <div class="select-field" id="changeTabTrigger" onclick="UI.openOptionsOnSelectElement('Pantry')"><p><?php echo $firstPantryName ?></p></div>
                    <div class="select-field-inner white-ouline-btn" id="Pantry">

            <?php

            $i = 0;

            foreach( $jData->pantries as $pantry ){
                if (in_array($id, $pantry->members)){

                    if( $i == 0 ){
                        echo '<div id="'.$pantry->id.'" class="select-option active">
                                <p>'.$pantry->name.'</p>
                             </div>';
                    } else {
                        echo '<div id="'.$pantry->id.'" class="select-option">
                                <p>'.$pantry->name.'</p>
                            </div>';
                    }

                };

                $i++;
            }
            ?>
                </div>
             </div>
                
            <div class="sm-col-4 md-col-9 col-9 py-1 text-left">
                <p><i>Click the icon to change pantry</i></p>
            </div>
        </div>
    </div>
</div>

        <div id="recipes" class="row md-col-12 col-12 recipes-row">

            <!-- Test recipe 1 -->
            <div class="recipe sm-col-12 md-col-6 col-4">
                <div class="recipe-image image-wrapper">
                    <img src="./src/images/test-recipe.jpg" alt="">
                    <div class="recipe-inner p-2">
                        <div class="recipe-match">
                            <p class="explainer text-primary text-center">
                                You have <b>6/9</b> items
                            </p>
                            <div class="align-center row">
                                <div class="bar col-12">
                                    <div id="matchBar" class="inner-bar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="recipe-excerpt">
                            <div class="recipe-title">
                                <p class="text-primary">Lamb with baked peber</p>
                            </div>
                            <div class="recipe-meta">
                                <p class="text-primary">2h 20m</p>
                            </div>
                            <div class="recipe-text">
                                <p class="text-secondary">Delicious lambchops with baked bell pebber and ...</p>
                            </div>
                        </div>
                        <button class="read-more-btn btn-white my-1"><a class="text-primary" href="single-recipe.php">Read more</a></button>
                    </div>
                </div>
            </div>

                        <!-- Test recipe 2 -->
            <div class="recipe sm-col-12 md-col-6 col-4">
                <div class="recipe-image image-wrapper">
                    <img src="./src/images/test-recipe.jpg" alt="">
                    <div class="recipe-inner p-2">
                        <div class="recipe-match">
                            <p class="explainer text-primary text-center">
                                You have <b>4/8</b> items
                            </p>
                            <div class="align-center row">
                                <div class="bar col-12">
                                    <div id="matchBar" class="inner-bar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="recipe-excerpt">
                            <div class="recipe-title">
                                <p class="text-primary">Lamb with baked peber</p>
                            </div>
                            <div class="recipe-meta">
                                <p class="text-primary">2h 20m</p>
                            </div>
                            <div class="recipe-text">
                                <p class="text-secondary">Delicious lambchops with baked bell pebber and ...</p>
                            </div>
                        </div>
                        <button class="read-more-btn btn-white my-1"><a class="text-primary" href="single-recipe.php">Read more</a></button>
                    </div>
                </div>
            </div>

                        <!-- Test recipe 3 -->
            <div class="recipe sm-col-12 md-col-6 col-4">
                <div class="recipe-image image-wrapper">
                    <img src="./src/images/test-recipe.jpg" alt="">
                    <div class="recipe-inner p-2">
                        <div class="recipe-match">
                            <p class="explainer text-primary text-center">
                                You have <b>2/10</b> items
                            </p>
                            <div class="align-center row">
                                <div class="bar col-12">
                                    <div id="matchBar" class="inner-bar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="recipe-excerpt">
                            <div class="recipe-title">
                                <p class="text-primary">Lamb with baked peber</p>
                            </div>
                            <div class="recipe-meta">
                                <p class="text-primary">2h 20m</p>
                            </div>
                            <div class="recipe-text">
                                <p class="text-secondary">Delicious lambchops with baked bell pebber and ...</p>
                            </div>
                        </div>
                        <button class="read-more-btn btn-white my-1"><a class="text-primary" href="single-recipe.php">Read more</a></button>
                    </div>
                </div>
            </div>

        </div>

        <div id="pantries" class="row hidden">

            <article class="pantry sm-col-12 md-col-6 col-6 m-1">
                <div class="pantry-head row">
                    <div class="head-section sm-col-6 md-col-6 col-6 text-left">
                        <p class="explainer bold"><i>Greens</i></p>
                    </div>
                    <div class="head-section sm-col-6 md-col-6 col-6 px-1 text-left">
                        <p class="explainer bold"><i>Qty</i></p>
                    </div>
                </div>

                <div class="separator"></div>

                <div class="pantry-body">

            
                    <div class="pantry-entry row align-center">
                        <p class="title sm-col-4 md-col-4 col-4">Carrots</p>
                                <div class="sm-col-2 md-col-2 col-2 text-right text-right">
                                    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 align-center">
                                    <p id="qty">2</p>   
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 text-left">
                                    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
                                </div>

                        <div class="sm-col-2 md-col-2 col-2">
                            <p class="pointer delete-btn text-danger underline bold">Delete</p>
                        </div>
                    </div>

                    <div class="pantry-entry row align-center">
                        <p class="title sm-col-4 md-col-4 col-4">Potatos</p>
                                <div class="sm-col-2 md-col-2 col-2 text-right text-right">
                                    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 align-center">
                                    <p id="qty">2</p>   
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 text-left">
                                    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
                                </div>

                        <div class="sm-col-2 md-col-2 col-2">
                            <p class="pointer delete-btn text-danger underline bold">Delete</p>
                        </div>
                    </div>

                    <div class="pantry-entry row align-center">
                        <p class="title sm-col-4 md-col-4 col-4">Ginger</p>
                                <div class="sm-col-2 md-col-2 col-2 text-right text-right">
                                    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 align-center">
                                    <p id="qty">2</p>   
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 text-left">
                                    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
                                </div>

                        <div class="sm-col-2 md-col-2 col-2">
                            <p class="pointer delete-btn text-danger underline bold">Delete</p>
                        </div>
                    </div>
            </article>

            <article class="pantry sm-col-12 md-col-6 col-6 m-1">
                <div class="pantry-head row">
                    <div class="head-section sm-col-6 md-col-6 col-6 text-left">
                        <p class="explainer bold"><i>Meat</i></p>
                    </div>
                    <div class="head-section sm-col-6 md-col-6 col-6 px-1 text-left">
                        <p class="explainer bold"><i>Qty</i></p>
                    </div>
                </div>

                <div class="separator"></div>

                <div class="pantry-body">

            
            <div class="pantry-entry row align-center">
                        <p class="title sm-col-4 md-col-4 col-4">Chicken</p>
                                <div class="sm-col-2 md-col-2 col-2 text-right text-right">
                                    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 align-center">
                                    <p id="qty">2</p>   
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 text-left">
                                    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
                                </div>

                        <div class="sm-col-2 md-col-2 col-2">
                            <p class="pointer delete-btn text-danger underline bold">Delete</p>
                        </div>
                    </div>
                    </div>

                    <div class="pantry-entry row align-center">
                        <p class="title sm-col-4 md-col-4 col-4">Salami</p>
                                <div class="sm-col-2 md-col-2 col-2 text-right text-right">
                                    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 align-center">
                                    <p id="qty">2</p>   
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 text-left">
                                    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
                                </div>

                        <div class="sm-col-2 md-col-2 col-2">
                            <p class="pointer delete-btn text-danger underline bold">Delete</p>
                        </div>
                    </div>

                    <div class="pantry-entry row align-center">
                        <p class="title sm-col-4 md-col-4 col-4">Ham</p>
                                <div class="sm-col-2 md-col-2 col-2 text-right text-right">
                                    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 align-center">
                                    <p id="qty">2</p>   
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 text-left">
                                    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
                                </div>

                        <div class="sm-col-2 md-col-2 col-2">
                            <p class="pointer delete-btn text-danger underline bold">Delete</p>
                        </div>
                    </div>
                </article>

            <article class="pantry sm-col-12 md-col-6 col-6 m-1">
                <div class="pantry-head row">
                    <div class="head-section sm-col-6 md-col-6 col-6 text-left">
                        <p class="explainer bold"><i>Frozen</i></p>
                    </div>
                    <div class="head-section sm-col-6 md-col-6 col-6 px-1 text-left">
                        <p class="explainer bold"><i>Qty</i></p>
                    </div>
                </div>

                <div class="separator"></div>

                <div class="pantry-body">

            
                    <div class="pantry-entry row align-center">
                        <p class="title sm-col-4 md-col-4 col-4">Carrots</p>
                                <div class="sm-col-2 md-col-2 col-2 text-right text-right">
                                    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 align-center">
                                    <p id="qty">2</p>   
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 text-left">
                                    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
                                </div>

                        <div class="sm-col-2 md-col-2 col-2">
                            <p class="pointer delete-btn text-danger underline bold">Delete</p>
                        </div>
                    </div>

                    <div class="pantry-entry row align-center">
                        <p class="title sm-col-4 md-col-4 col-4">Potatos</p>
                                <div class="sm-col-2 md-col-2 col-2 text-right text-right">
                                    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 align-center">
                                    <p id="qty">2</p>   
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 text-left">
                                    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
                                </div>

                        <div class="sm-col-2 md-col-2 col-2">
                            <p class="pointer delete-btn text-danger underline bold">Delete</p>
                        </div>
                    </div>

                    <div class="pantry-entry row align-center">
                        <p class="title sm-col-4 md-col-4 col-4">Ginger</p>
                                <div class="sm-col-2 md-col-2 col-2 text-right text-right">
                                    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 align-center">
                                    <p id="qty">2</p>   
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 text-left">
                                    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
                                </div>

                        <div class="sm-col-2 md-col-2 col-2">
                            <p class="pointer delete-btn text-danger underline bold">Delete</p>
                        </div>
                    </div>
            </article>


            <article class="pantry sm-col-12 md-col-6 col-6 m-1">
                <div class="pantry-head row">
                    <div class="head-section sm-col-6 md-col-6 col-6 text-left">
                        <p class="explainer bold"><i>Dairy</i></p>
                    </div>
                    <div class="head-section sm-col-6 md-col-6 col-6 px-1 text-left">
                        <p class="explainer bold"><i>Qty</i></p>
                    </div>
                </div>

                <div class="separator"></div>

                <div class="pantry-body">

            
                    <div class="pantry-entry row align-center">
                        <p class="title sm-col-4 md-col-4 col-4">Carrots</p>
                                <div class="sm-col-2 md-col-2 col-2 text-right text-right">
                                    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 align-center">
                                    <p id="qty">2</p>   
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 text-left">
                                    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
                                </div>

                        <div class="sm-col-2 md-col-2 col-2">
                            <p class="pointer delete-btn text-danger underline bold">Delete</p>
                        </div>
                    </div>

                    <div class="pantry-entry row align-center">
                        <p class="title sm-col-4 md-col-4 col-4">Potatos</p>
                                <div class="sm-col-2 md-col-2 col-2 text-right text-right">
                                    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 align-center">
                                    <p id="qty">2</p>   
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 text-left">
                                    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
                                </div>

                        <div class="sm-col-2 md-col-2 col-2">
                            <p class="pointer delete-btn text-danger underline bold">Delete</p>
                        </div>
                    </div>

                    <div class="pantry-entry row align-center">
                        <p class="title sm-col-4 md-col-4 col-4">Ginger</p>
                                <div class="sm-col-2 md-col-2 col-2 text-right text-right">
                                    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 align-center">
                                    <p id="qty">2</p>   
                                </div>
                                <div class="sm-col-2 md-col-2 col-2 text-left">
                                    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
                                </div>

                        <div class="sm-col-2 md-col-2 col-2">
                            <p class="pointer delete-btn text-danger underline bold">Delete</p>
                        </div>
                    </div>
            </article>


                
                <div id="addNewItem" class="sm-col-12 md-col-12 col-12 row m-1">
                    <div class="add-new-item-section sm-col-12 md-col-12 col-12 px-1 my-1">
                        <p class="enlarged"><i class="fa fa-plus text-white"></i>Add new item to pantry</p>
                        <p>Type in the name of the item and select the correct one from the suggestions list.</p>
                    </div>
                    <div class="add-new-item-section sm-col-12 md-col-6 col-6">
                        <input type="text" name="txtNewIngredient" placeholder="Add ingredient...">
                        <button class="btn-warning text-white">Add</button>
                        <div id="#suggestionsPanel">
                            <div class="suggestion">
                                <p></p>
                                <i></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>

<!-- Import footer from /components -->
<?php require_once('components/footer.php') ?>