<!-- Import header from /components -->
<?php

$pageTitle = 'Home';

require_once('components/header.php') ?>


<!-- Page stucture on this index page -->

    <!-- 1 if the user is not logged in 
        -> go on with this index.php as login

        else if user has a $_SESSION
        -> go to profile.php -->

    <div class="overlay max-vh">
        <article id="loginContainer">
            <div class="title-wrapper p-3 text-center">
                <h2>Your virtual pantry</h2>
                <p class="tagline">The easy way to keep track</p>
            </div>
            <form action="POST" id="login" class="mx-3 px-4">
                <p class="m-1">Login</p>

                <div class="m-1 col-12">
                    <label class="has-float-label small-font">
                        <input type="text" name="txtEmail" placeholder="Your email">
                    <span>E-mail</span>
                    </label>
                </div>

                <div class="m-1 col-12">
                    <label class="has-float-label small-font">
                        <input type="text" name="txtPassword" placeholder="Insert password">
                    <span>Password</span>
                    </label>
                </div>

                <div class="text-right m-1">
                    <button class="btn-primary btn-big">Login</button>
                </div>
            </form>
        </article>
    </div>


<!-- Import footer from /components -->
<?php require_once('components/footer.php') ?>