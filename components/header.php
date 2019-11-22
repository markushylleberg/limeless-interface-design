<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/float-label-css/v1.0.2/dist/float-label.min.css"/>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="recipe.css">
    <title><?php echo $pageTitle ?></title>
</head>
<body>
<!-- Header -->
<div id="headerContainer" class="fixed row p-1 z-index-9">
    <div id="logoWrapper" class="col-6 md-col-2 z-index-10">
        <img src="src/logo/logo.png" class="logo" id="logo">
    </div>
    <div id="navigationWrapper" class="col-6 md-col-10 align-center row">
        <ul id="mainMenu" class="hide-on-mobile small-padding text-right col-10 sm-col-2">
            <li class="menu-item mx-1">
                <a href="">About</a>
            </li>
            <li class="menu-item mx-1">
                <a href="">How to use</a>
            </li>
            <li class="menu-item mx-1">
                <a href="">Sign up/login</a>
            </li>
        </ul>
        <div class="avatar text-right col-2 sm-col-10 z-index-10">
            <img src="src/images/test-user.png" class="round-img small-avatar mx-1">
        </div>
        <div id="burger" class="z-index-10 hide-on-desktop align-center unclickable-icon"><i class="fa fa-bars text-white"></i></div>
        <div id="mobileMenuPanel" class="hide-on-desktop mobile-menu-panel shadow-heavy">
            <div class="py-3 inner text-left">
                <ul id="mobileMenu">
                    <li class="menu-item p-2">
                        <a href="#">About Limeless</a>
                    </li>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="#">What, why, who?</a>
                            </li>
                            <li class="menu-item">
                                <a href="#">Data Policy</a>
                            </li>
                        </ul>
                    <li class="menu-item p-2">
                        <a href="">How to use</a>
                    </li>

                    <li class="menu-item p-2">
                        <a href="">Profile</a>
                    </li>
                </ul>
                <div class="p-2">
                    <button class="btn-secondary btn-big">Logout</button>
                </div>
                <p class="p-2">Limesless 2019 Copyright</p>
            </div>
        </div>
    </div>
</div>


<!-- Page content container -->
<div id="pageContent">


