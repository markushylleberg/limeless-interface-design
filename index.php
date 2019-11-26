<!-- Import header from /components -->
<?php

$pageTitle = 'Home';

require_once('components/header.php');


if ( $_SESSION ){
    header('Location: profile.php');
    exit;
}

?>

<!-- Page stucture on this index page -->

    <!-- 1 if the user is not logged in 
        -> go on with this index.php as login

        else if user has a $_SESSION
        -> go to profile.php -->


    <div class="overlay max-vh">
        <article id="loginContainer">
            <div class="title-wrapper py-2 text-center">
                <h2>Your virtual pantry</h2>
                <p class="tagline my-1">The easy way to keep track</p>
            </div>
            <form action="POST" id="login" class="login-form px-1">
                <p class="text-center bold">Login</p>

                <div class="col-12 my-1">
                    <label class="has-float-label small-font">
                        <input type="text" id="txtEmail" name="txtEmail" oninput="UI.clearErrorMessage()" placeholder="Your email">
                    <span>E-mail</span>
                    </label>
                </div>

                <div class="col-12 my-1">
                    <label class="has-float-label small-font">
                        <input type="password" id="txtPassword" name="txtPassword" oninput="UI.clearErrorMessage()" placeholder="Insert password">
                    <span>Password</span>
                    </label>
                </div>

                <p id="errorMessage" class="my-1 text-danger error-message"></p>

                <div class="text-right my-1">
                    <button id="login" class="btn-primary btn-big">Login</button>
                </div>
            </div>
            </form>
        </article>

        <div class="not-a-member text-center">
            <p>Not a member?</p>
            <a href="signup.php" class="underline">Create an account</a>
        </div>

    </div>


<!-- Import footer from /components -->
<?php require_once('components/footer.php') ?>