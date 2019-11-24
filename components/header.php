<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.rawgit.com/tonystar/float-label-css/v1.0.2/dist/float-label.min.css"/>
    <link rel="stylesheet" href="src/style.css">
    <title><?php echo $pageTitle ?></title>
</head>
<body>

<!-- Is user login in? -->
<?php

    $session = true;

    // adjustments for the navigation for whether or not the user is logged in

    // Show "sign out" or "sign in"
    $signOutOrIn = ($session ? '<a href="signout.php">Log out</a>' : '<a href="signup.php">Login / sign up</a>');

    // Show avatar or nah
    $showAvatar = ($session ? '<a href="profile.php"><img src="src/images/test-user.png" class="round-img small-avatar mx-1"></a>' : '');

    // Adjust the columns in the navigation or nah
    $columnCount = ($session ? 'col-10' : 'col-12');

    // Show logout button in burger menu or nah
    $showLogoutButton = ($session ? '<a href="signout.php"><button class="btn-secondary btn-big">Logout</button></a>' : '');

    // Show "Profile" if user is logged in or nah
    $profileOrSignup = ($session ? '<a href="profile.php">Profile</a>' : '<a href="signup.php">Sign up</a>');

?>



<!-- Header -->
<div class="header-max-width">
<div id="headerContainer" class="fixed row m-1 px-1 z-index-9">
    <div id="logoWrapper" class="col-6 md-col-2 z-index-10">
        <a href="index.php"><img src="src/logo/logo.png" class="logo" id="logo"></a>
    </div>
    <div id="navigationWrapper" class="col-6 md-col-10 align-center row">
        <ul id="mainMenu" class="hide-on-mobile small-padding text-right sm-col-2 <?php echo $columnCount; ?>">
            <li class="menu-item mx-1">
                <a href="about.php">About</a>
            </li>
            <li class="menu-item mx-1">
                <a href="how-to-use.php">How to use</a>
            </li>
            <li class="menu-item mx-1">
                <?php 
                    echo $signOutOrIn;
                ?>
            </li>
        </ul>
        <div class="avatar text-right col-2 sm-col-10 z-index-10">
                <?php
                    echo $showAvatar;
                ?>
        </div>
        <div id="burger" class="z-index-10 hide-on-desktop align-center unclickable-icon mx-1"><i class="fa fa-bars text-white"></i></div>
        <div id="mobileMenuPanel" class="hide-on-desktop mobile-menu-panel shadow-heavy">
            <div class="py-3 inner text-left">
                <ul id="mobileMenu">
                    <li class="menu-item p-2">
                        <a href="about.php">About Limeless</a>
                    </li>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="about.php#www">What, why, who?</a>
                            </li>
                            <li class="menu-item">
                                <a href="about.php#dataPolicy">Data Policy</a>
                            </li>
                        </ul>
                    <li class="menu-item p-2">
                        <a href="how-to-use.php">How to use</a>
                    </li>

                    <li class="menu-item p-2">
                        <?php
                            echo $profileOrSignup;
                        ?>
                    </li>
                </ul>
                <div class="p-2">
                    <?php
                        echo $showLogoutButton;
                    ?>
                </div>
                <p class="p-2">Limesless &copy; <?php echo date('Y'); ?> Copyright</p>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Page content container -->

<?php

    $isLandingPage = ( ($pageTitle == 'Home' || $pageTitle == 'Sign up') ? 'login-image-background' : '');

?>

<div id="imageBackground" class="<?php echo $isLandingPage ?>">

<div id="pageContent" class="page-content">


