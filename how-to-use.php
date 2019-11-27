<!-- Import header from /components -->
<?php 
$pageTitle = 'How to use';
require_once('components/header.php') ?>


<div class="columns row mx-1">
    <div id="onePageNavigation" class="sm-col-12 col-3 mx-1 py-2">
        <div class="about-left-nav">
            <div class="page-title about-right-border px-1">
                <h3 class="">How to use</h3>
                <a href="#partOne" class="hide-on-mobile py-1 about-nav">1  Sign up</a>
                <a href="#partTwo"class="hide-on-mobile py-1 about-nav">2 Pantries</a>
                <a href="#partThree"class="hide-on-mobile py-1 about-nav">3 Explore</a>
            </div>
        </div>
    </div>

    <div id="about" class="sm-col-12 col-9 mx-1">
        <article id="partOne" class="about-article py-4">
            <p class="my-1 sub-headline enlarged">1 Sign up</p>

                <div><i class="fa fa-minus text-white py-2"></i></div>

            <p>Limeless is a web service created by Kamille Rye and Markus Hylleberg.<br><br>

Have you ever forgot half of the inventory of your fridge right as you stand 
before the counters in the super market? And have you tried calling tour 
roommate to ask and been left none the wiser? Limeless is the solution to situations like 
these. <br><br>

Limeless gives you the opportunity to create <b>virtual pantries</b> and keep track of 
the inventory in your household kitchen. Being a web service Limeless is 
accessible for all who might need it. You can add users to your pantries and let 
them help maintaining the data in order to keep it up to date. The service is 
therefore also ideal for workplaces or other larger institutions with shared food 
storage.</p>
        </article>
        <article id="partTwo" class="about-article py-4">
            <p class="my-1 sub-headline enlarged">2 Pantries</p>

                    <div><i class="fa fa-minus text-white py-2"></i></div>

            <p>Limeless is the result of an exam project on 1st semester / web development on 
Copenhagen School of Technology & Design. Your data will therefore be accessible to 
the creators, Kamille and Markus, as well as other students and teachers at said school. <br><br>

All data will be stored in a single file located in a project folder which will be public on 
GitHub in order for teachers and students to access the project and view the code.<br><br>

We suggest you don't use your real email address since the service doesn't interact with 
users via email. The email and password function as credentials and have only one 
purpose which is to exemplify how we code an actual login system as well as visualize 
the interactions within the service.</p>
        </article>
        <article id="partThree" class="about-article py-2">
            <p class="my-1 sub-headline enlarged">3 Explore</p>

                    <div><i class="fa fa-minus text-white py-2"></i></div>

            <p>Limeless is the result of an exam project on 1st semester / web development on 
Copenhagen School of Technology & Design. Your data will therefore be accessible to 
the creators, Kamille and Markus, as well as other students and teachers at said school. <br><br>

All data will be stored in a single file located in a project folder which will be public on 
GitHub in order for teachers and students to access the project and view the code.<br><br>

We suggest you don't use your real email address since the service doesn't interact with 
users via email. The email and password function as credentials and have only one 
purpose which is to exemplify how we code an actual login system as well as visualize 
the interactions within the service.</p>
        </article>
    </div>

</div>


<!-- Import footer from /components -->
<?php require_once('components/footer.php') ?>