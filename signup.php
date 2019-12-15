<!-- Import header from /components -->
<?php 
$pageTitle = 'Sign up';
require_once('components/header.php');

if ( $session == true ){
    header('Location: profile.php');
    exit;
}

?>


    <div class="overlay">
        <article id="loginContainer">
            <div class="title-wrapper py-2 text-center">
                <h2>Welcome</h2>
                <p class="tagline my-1">We're glad that you're here!</p>
            </div>
            <form action="POST" id="signup" class="login-form px-2">
                <p class="text-center bold">Signup</p>

                <div class="col-12 my-1">
                    <label class="has-float-label small-font">
                        <input type="text" id="signupFirstName" name="txtSignupFirstName" oninput="UI.clearErrorMessage()" placeholder="Your first name">
                    <span>First name</span>
                    </label>
                </div>

                <div class="col-12 my-1">
                    <label class="has-float-label small-font">
                        <input type="text" id="signupLastName" name="txtSignupLastName" oninput="UI.clearErrorMessage()" placeholder="Your last name">
                    <span>Last name</span>
                    </label>
                </div>

                <div class="col-12 my-1">
                    <label class="has-float-label small-font">
                        <input type="text" id="signupEmail" name="txtSignupEmail" oninput="UI.clearErrorMessage()" placeholder="Your email">
                    <span>Email</span>
                    </label>
                </div>

                <div class="col-12 my-1">
                    <label class="has-float-label small-font">
                        <input type="password" id="signupPassword" name="txtSignupPassword" oninput="UI.clearErrorMessage()" placeholder="Choose a password">
                    <span>Password</span>
                    </label>
                </div>

                <div class="col-12 my-1 text-white row">

                    <div class="col-6">
                        <label for="image">
                                <i class="fa fa-camera"></i>Add image
                        <input type="file" name="image" id="image" class="hidden">
                        </label>
                    </div>
                    
                    <div class="text-right col-6">
                        <button id="signup" class="btn-primary btn-big">Signup</button>
                    </div>

                </div>

                <p id="errorMessage" class="error-message"></p>

            </form>
        </article>

        <div class="not-a-member text-center my-3">
            <p>Already have an account?</p>
            <a href="index.php" class="underline">Login</a>
        </div>

    </div>



<!-- Import footer from /components -->
<?php require_once('components/footer.php') ?>