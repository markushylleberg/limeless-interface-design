<!-- Import header from /components -->
<?php 
$pageTitle = 'Login';
require_once('components/header.php') ?>

<div class="columns row">
    <div id="onePageNavigation" class="left hide-on-mobile sm-col-4">
        <div class="page-title">
            <h2>About</h2>
        </div>
        <a href="#whatWhyWho">What, Why, Who</a>
        <a href="#dataPolicy">Data Policy</a>
    </div>
    <div id="about" class="left xs-col-12 sm-col-8 col-8">
        <article id="whatWhyWho" class="about-article">
            <h6>What, why, who?</h6>
            <p>Limeless is a web service created by Kamille Rye and Markus Hylleberg.

Have you ever forgot half of the inventory of your fridge right as you stand 
before the counters in the super market? And have you tried calling tour 
roommate to ask and been left none the wiser? Limeless is the solution to situations like 
these. 

Limeless gives you the opportunity to create virtual pantries and keep track of 
the inventory in your household kitchen. Being a web service Limeless is 
accessible for all who might need it. You can add users to your pantries and let 
them help maintaining the data in order to keep it up to date. The service is 
therefore also ideal for workplaces or other larger institutions with shared food 
storage.</p>
        </article>
        <article id="dataPolicy" class="about-article">
            <h6>Data policy</h6>
            <p>Limeless is the result of an exam project on 1st semester / web development on 
Copenhagen School of Technology & Design. Your data will therefore be accessible to 
the creators, Kamille and Markus, as well as other students and teachers at said school. 

All data will be stored in a single file located in a project folder which will be public on 
GitHub in order for teachers and students to access the project and view the code.

We suggest you don't use your real email address since the service doesn't interact with 
users via email. The email and password function as credentials and have only one 
purpose which is to exemplify how we code an actual login system as well as visualize 
the interactions within the service.</p>
        </article>
    </div>

</div>

<!-- Import footer from /components -->
<?php require_once('components/footer.php') ?>