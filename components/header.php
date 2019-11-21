<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/float-label-css/v1.0.2/dist/float-label.min.css"/>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="recipe.css">
    <title><?php echo $pageTitle ?></title>
</head>
<body>
<!-- Header -->
<div id="headerContainer" class="fixed row p-1">
    <div id="logoWrapper" class="col-6 align-center">
        <p>Limeless</p> 
        <!-- <img src="" alt="" id="logo"> -->
    </div>
    <div id="navigationWrapper" class="col-6 row">
        <ul id="mainMenu" class="hide-on-mobile small-padding text-right col-10 sm-col-2">
            <li class="menu-item">
                <a href="">About</a>
            </li>
            <li class="menu-item mx-1">
                <a href="">How to use</a>
            </li>
        </ul>
        <div class="avatar text-right col-2 sm-col-10">
            <img src="src/images/test-user.png" class="round-img small-avatar mx-1">
        </div>
        <div id="burger" class="hide-on-desktop align-center"><i class="fa fa-bars text-white"></i></div>
        <div id="mobileMenuPanel" class="hide-on-desktop hidden">
            <div class="inner">
                <ul id="mobileMenu">
                    <li class="menu-item">
                        <a href="">Menu item</a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="">Menu item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="">Menu item</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Page content container -->
<div id="pageContent">


