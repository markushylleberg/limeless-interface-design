<!-- Import header from /components -->
<?php require_once('components/header.php') ?>





<div class="columns">

    <!-- Left section w. profile details -->
    <div id="profile">
        <div class="head profile-section">
            <div class="image-wrapper">
                <!-- Avatar -->
                <img src="./src/images/test-user.png" class="round-img" alt="User avatar">
            </div>
            <div class="title-wrapper">
                <h4>Hello, Name!</h4>
            </div>
            <div class="row edit-profile-btn btn-primary">
                <i class="fa fa-pencil"></i>
                <p>Edit profile</p>
            </div>
        </div>

        <div class="body profile-section">
            <div id="notificationsPanel">
                <div class="notification-item">
                    <span class="plain-circle"></span>
                    <p>Your broccoli might expire soon.</p>
                </div>
                <div class="notification-item">
                    <span class="plain-circle"></span>
                    <p>Your milk might expire soon.</p>
                </div>
                <div class="notification-item">
                    <span class="plain-circle"></span>
                    <p>Mike added you to Office.</p>
                </div>
                <div class="clear-all-btn"><p>Clear all</p></div>
            </div>    
        
        </div>
    </div>

    <div id="tabs">
        <div class="head tabs-section">
            <div class="tab">
                <h3>
                    <a href="#pantries">Pantries</a>
                </h3>
            </div>
            <div class="tab">
                <h3>
                    <a href="#recipes">Recipes</a>
                </h3>
            </div>
            <div id="changePantry">
                <div id="changePantryTrigger">
                    <div class="row white-outline-btn">
                        <p>Office</p>
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="head tabs-section">
            <div id="recipes">
                <div class="recipe">
                    <div class="recipe-image image-wrapper">
                        <img src="" alt="">
                        <div class="recipe-inner">
                            <div class="recipe-match">
                                <p class="explainer">
                                    You have x/x items
                                </p>
                                <div class="bar">bar here</div>
                            </div>
                            <div class="recipe-excerpt">
                                <div class="recipe-title">
                                    <h5>Test title</h5>
                                </div>
                                <div class="recipe-meta">
                                    <p>xh xxm</p>
                                </div>
                                <div class="recipe-text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas praesentium voluptatem possimus enim, corrupti totam, dolores blanditiis adipisci doloremque, tempore consequatur qui? Voluptates perferendis recusandae explicabo omnis. Debitis, sunt animi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recipe">
                    <div class="recipe-image image-wrapper">
                        <img src="" alt="">
                        <div class="recipe-inner">
                            <div class="recipe-match">
                                <p class="explainer">
                                    You have x/x items
                                </p>
                                <div class="bar">bar here</div>
                            </div>
                            <div class="recipe-excerpt">
                                <div class="recipe-title">
                                    <h5>Test title</h5>
                                </div>
                                <div class="recipe-meta">
                                    <p>xh xxm</p>
                                </div>
                                <div class="recipe-text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas praesentium voluptatem possimus enim, corrupti totam, dolores blanditiis adipisci doloremque, tempore consequatur qui? Voluptates perferendis recusandae explicabo omnis. Debitis, sunt animi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="recipe">
                    <div class="recipe-image image-wrapper">
                        <img src="" alt="">
                        <div class="recipe-inner">
                            <div class="recipe-match">
                                <p class="explainer">
                                    You have x/x items
                                </p>
                                <div class="bar">bar here</div>
                            </div>
                            <div class="recipe-excerpt">
                                <div class="recipe-title">
                                    <h5>Test title</h5>
                                </div>
                                <div class="recipe-meta">
                                    <p>xh xxm</p>
                                </div>
                                <div class="recipe-text">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas praesentium voluptatem possimus enim, corrupti totam, dolores blanditiis adipisci doloremque, tempore consequatur qui? Voluptates perferendis recusandae explicabo omnis. Debitis, sunt animi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="pantries"></div>
        </div>
    </div>

</div>







<!-- Import footer from /components -->
<?php require_once('components/footer.php') ?>