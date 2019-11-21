<!-- Import header from /components -->
<?php require_once('components/header.php') ?>





<div class="columns">

    <!-- Left section w. profile details -->
    <div id="profile">
        <div class="head profile-section">
            <div class="image-wrapper">
                <!-- Avatar -->
                <img src="./src/images/test-martha.jpg" class="round-img" alt="User avatar">
            </div>
            <div class="title-wrapper">
                <h4>Hello, Martha!</h4>
            </div>
            <div class="row edit-profile-btn btn-primary">
                <i class="fa fa-pencil"></i>
                <p>Edit profile</p>
            </div>
        </div>

        <div class="body profile-section">
            <div class="explainer">
                You have <i class="fa fa-circle">3</i> new notifications
            </div>
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
                <div class="clear-all-btn">
                    <p>Clear all</p>
                </div>
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
            <div id="recipes" class="row">

                <!-- Test recipe 1 -->
                <div class="recipe xs-col-12">
                    <div class="recipe-image image-wrapper">
                        <img src="./src/images/test-recipe.jpg" alt="">
                        <div class="recipe-inner p-1">
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas praesentium
                                        voluptatem possimus enim, corrupti totam, dolores blanditiis adipisci
                                        doloremque, tempore consequatur qui? Voluptates perferendis recusandae explicabo
                                        omnis. Debitis, sunt animi.</p>
                                </div>
                            </div>
                            <div class="read-more-btn btn-white"><a href="">Read more</a></div>
                        </div>
                    </div>
                </div>

                <!-- Test recipe 2 -->
                <div class="recipe xs-col-12">
                    <div class="recipe-image image-wrapper">
                        <img src="./src/images/test-recipe.jpg" alt="">
                        <div class="recipe-inner p-1">
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
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas praesentium
                                        voluptatem possimus enim, corrupti totam, dolores blanditiis adipisci
                                        doloremque, tempore consequatur qui? Voluptates perferendis recusandae explicabo
                                        omnis. Debitis, sunt animi.</p>
                                </div>
                            </div>
                            <div class="read-more-btn btn-white"><a href="">Read more</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="pantries" class="row">
            <div class="pantry xs-col-12 m-1">

                <div class="pantry-head row">
                    <div class="head-section xs-col-6">
                        <p class="explainer">Greens</p>
                    </div>
                    <div class="head-section xs-col-6">
                        <p class="explainer">Qty</p>
                    </div>
                </div>

                <div class="pantry-body">
                    <div class="pantry-entry row">
                        <p class="title">Carrots</p>
                        <div class="qty row">
                            <div class="btn-secondary btn-small">
                                <i class="fa fa-plus"></i>
                            </div>
                            <span>2</span>   
                            <div class="btn-secondary btn-small">
                                <i class="fa fa-minus"></i>
                            </div>
                        </div>
                        <p class="delete-btn danger">Delete</p>
                    </div>
                    <div class="pantry-entry row">
                        <p class="title">Carrots</p>
                        <div class="qty row">
                            <div class="btn-secondary btn-small">
                                <i class="fa fa-plus"></i>
                            </div>
                            <span>2</span>   
                            <div class="btn-secondary btn-small">
                                <i class="fa fa-minus"></i>
                            </div>
                        </div>
                        <p class="delete-btn danger">Delete</p>
                    </div>
                    <div class="pantry-entry row">
                        <p class="title">Carrots</p>
                        <div class="qty row">
                            <div class="btn-secondary btn-small">
                                <i class="fa fa-plus"></i>
                            </div>
                            <span>2</span>   
                            <div class="btn-secondary btn-small">
                                <i class="fa fa-minus"></i>
                            </div>
                        </div>
                        <p class="delete-btn danger">Delete</p>
                    </div>
                </div>
            </div>


            <div class="pantry xs-col-12 m-1">

                <div class="pantry-head row">
                    <div class="head-section xs-col-6">
                        <p class="explainer">Greens</p>
                    </div>
                    <div class="head-section xs-col-6">
                        <p class="explainer">Qty</p>
                    </div>
                </div>

                <div class="pantry-body">
                    <div class="pantry-entry row">
                        <p class="title">Carrots</p>
                        <div class="qty row">
                            <div class="btn-secondary btn-small">
                                <i class="fa fa-plus"></i>
                            </div>
                            <span>2</span>   
                            <div class="btn-secondary btn-small">
                                <i class="fa fa-minus"></i>
                            </div>
                        </div>
                        <p class="delete-btn danger">Delete</p>
                    </div>
                    <div class="pantry-entry row">
                        <p class="title">Carrots</p>
                        <div class="qty row">
                            <div class="btn-secondary btn-small">
                                <i class="fa fa-plus"></i>
                            </div>
                            <span>2</span>   
                            <div class="btn-secondary btn-small">
                                <i class="fa fa-minus"></i>
                            </div>
                        </div>
                        <p class="delete-btn danger">Delete</p>
                    </div>
                    <div class="pantry-entry row">
                        <p class="title">Carrots</p>
                        <div class="qty row">
                            <div class="btn-secondary btn-small">
                                <i class="fa fa-plus"></i>
                            </div>
                            <span>2</span>   
                            <div class="btn-secondary btn-small">
                                <i class="fa fa-minus"></i>
                            </div>
                        </div>
                        <p class="delete-btn danger">Delete</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>







<!-- Import footer from /components -->
<?php require_once('components/footer.php') ?>