<!-- Import header from /components -->
<?php 
$pageTitle = 'Login';
require_once('components/header.php') ?>
<div id="imageBackground">
    <div class="overlay">
        <article id="loginContainer">
            <div class="title-wrapper">
                <h2>Your virtual pantry</h2>
                <p class="tagline">The easy way to keep track</p>
            </div>
            <form action="POST" id="login">
                <p>Login</p>
                <input type="text" name="txtEmail" placeholder="E-mail">
                <input type="text" name="txtPassword" placeholder="Password">
                <button class="primary-btn">Login</button>
            </form>
        </article>
    </div>
</div>

<!-- Import footer from /components -->
<?php require_once('components/footer.php') ?>