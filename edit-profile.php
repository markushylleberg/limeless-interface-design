<!-- Import header from /components -->
<?php 
$pageTitle = 'Login';
require_once('components/header.php') ?>

<div class="align-center py-3 edit-section">

<a href="profile.php"><p class="text-left"><i class="fa fa-arrow-left text-warning"></i>Go back</p></a>

<h3 class="my-1">Edit profile</h3>
<p>Simply click the field you wish to edit and type in the new value. Remeber to hit 'Save changes' before you leave.</p>

    <form id="editProfile">
        <div class="text-left row">
                <div class="edit profile-picture col-6">
                    <div class="image-wrapper">
                        <label for="newProfilePicture">
                            <i class="fa fa-camera text-warning absolute"></i>
                            <img src="src/images/test-martha.jpg" class="round-img pointer">
                        <input type="file" class="hidden" name="newProfilePicture" id="newProfilePicture">
                        </label>
                    </div>
                </div>

            <div class="col-6">
                <div class="edit first-name my-1">
                    <label class="has-float-label small-font">
                            <input type="text" id="editFirstName" name="txtEditFirstName" oninput="UI.clearErrorMessage()" placeholder="First name">
                            <span>First name</span>
                    </label>
                </div>
                <div class="edit first-name my-1">
                    <label class="has-float-label small-font">
                            <input type="text" id="editLastName" name="txtEditLastName" oninput="UI.clearErrorMessage()" placeholder="Last name">
                            <span>Last name</span>
                    </label>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="edit first-name my-1 col-12">
                <label class="has-float-label small-font">
                        <input type="text" id="editEmail" name="txtEditEmail" oninput="UI.clearErrorMessage()" placeholder="Email">
                        <span>Email</span>
                </label>
        </div>
        <div class="edit first-name col-12">
                <label class="has-float-label small-font">
                        <input type="password" id="editPassword" name="txtEditPassword" oninput="UI.clearErrorMessage()" placeholder="Password">
                        <span>Password</span>
                </label>
        </div>
        <div class="text-right col-12">
            <button class="btn-primary btn-big warning">Save</button>
        </div>
    </div>
    </form>
</div>









<!-- Import footer from /components -->
<?php require_once('components/footer.php') ?>