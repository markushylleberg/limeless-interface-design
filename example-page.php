<!-- Import header from /components -->
<?php

$pageTitle = 'Example page';

require_once('components/header.php') ?>

<div class="extra-height"></div>

<h1 class="m-3 text-center"><u>Examples for using our stylesheet</u></h1>

<h4 class="m-3">Buttons</h4>
<div class="secondary p-1 m-3 align-center">
    <button class="btn-primary"><i class="fa fa-plus"></i>Add ingredient</button>
</div>

<div class="secondary p-1 m-3">
    <button class="btn-primary btn-big"><i class="fa fa-check"></i>Save changes</button>
</div>

<div class="primary p-1 m-3">
    <button class="btn-secondary"><i class="fa fa-user"></i>Login</button>
</div>

<div class="primary p-1 m-3">
    <button class="btn-secondary btn-big"><i class="fa fa-user"></i>Login</button>
</div>

<div class="primary p-1 m-3">
    <button class="btn-secondary btn-small"><i class="fa fa-plus"></i></button>
</div>

<div class="primary p-1 m-3">
    <button class="btn-secondary btn-small"><i class="fa fa-minus"></i></button>
</div>

<div class="secondary p-1 m-3">
    <button class="btn-white"><i class="fa fa-check"></i>Save changes</button>
</div>

<div class="secondary p-1 m-3">
    <button class="btn-white btn-big"><i class="fa fa-check"></i>Save changes</button>
</div>

<h4 class="m-3">Alignment</h4>
<div class="m-3 p-3 secondary">
    <p class="text-white-smoke text-center">This is a centered paragraph</p>
</div>

<div class="m-3 p-3 secondary">
    <p class="text-white-smoke text-left">This is a left aligned paragraph</p>
</div>

<div class="m-3 p-3 secondary">
    <p class="text-white-smoke text-right">This is a right aligned paragraph</p>
</div>

<h4 class="m-3">Vertical alignment</h4>

<div class="m-3 secondary extra-height align-center">
    <h1 class="text-white">Centered headline</h1>
</div>


<h4 class="m-3">Grid-system</h4>

<div class="row m-3 border">
    <div class="col-12 text-center border">
        <p>col-12</p>
    </div>
</div>



<div class="row m-3 border">
    <div class="col-6 sm-col-12 xs-col-6 text-center border">
        <p>col-6 sm-col-12 xs-col-6</p>
    </div>
    <div class="col-6 sm-col-12 xs-col-6 text-center border">
        <p>col-6 sm-col-12 xs-col-6</p>
    </div>
</div>

<div class="row m-3 border">
    <div class="col-4 xs-col-12 text-center border"><p>col-4 xs-col-12</p></div>
    <div class="col-4 xs-col-12 text-center border"><p>col-4 xs-col-12</p></div>
    <div class="col-4 xs-col-12 text-center border"><p>col-4 xs-col-12</p></div>
</div>


<h4 class="m-3">Round images</h4>

<div class="m-3">
    <img src="src/images/test-user.png" class="round-img">
</div>

<h4 class="m-3"> Square elegant images</h4>

<div class="m-3">
    <img src="src/images/test-user.png" class="square-img">
</div>


<h4 class="m-3"> Square elegant image aligned center in grid</h4>

<div class="extra-height m-3 row">
    <div class="m-1 col-6 secondary sm-col-12 align-center">
        <img src="src/images/test-user.png" class="square-img">    
    </div>
    <div class="m-1 sm-col-12 col-6 secondary"></div>
</div>


<h4 class="m-3">Input fields</h4>

<div class="secondary extra-height row m-3">
    <div class="m-1 col-12">
        <label class="has-float-label small-font">
        <input type="text" name="ingredient" placeholder="Your first name">
        <span>First name</span>
        </label>
    </div>

    <div class="m-1 col-12">
        <label class="has-float-label small-font">
        <input type="text" name="ingredient" placeholder="Your surname">
        <span>Surname</span>
        </label>
    </div>


    <div class="m-1 col-12">
        <label class="has-float-label small-font">
        <input type="text" name="ingredient" placeholder="Insert ingredient ...">
        <span>New ingredient</span>
        </label>
    </div>
</div>


<h4 class="m-3">Checkboxes</h4>

<div class="secondary m-3 p-1">
    <div class="m-1">
        <label for="checkboxTest" class="text-white-smoke">
        <input type="checkbox" value="value" id="checkboxTest">
        Fruit / Vegetables</label>
    </div>

    <div class="m-1">
        <label for="checkboxTest" class="text-white-smoke">
        <input type="checkbox" value="value" id="checkboxTest">
        Meat</label>
    </div>
</div>

<h4 class="m-3">Custom list of checkboxes</h4>

<div class="secondary m-3 p-1 extra-height">

<div class="outer-checkbox-selection">
    <div class="checkbox-field" onclick="UI.openOptionsOnSelectElement('Category')"><p>Filter</p></div>
        <div class="checkbox-field-inner" id="Category">

            <div class="select-field-inner-div">
                <label for="checkboxTest" class="text-white-smoke">
                    <input type="checkbox" value="value" id="checkboxTest">
                Fruit / Vegetables</label>
            </div>

            <div class="select-field-inner-div">
                <label for="checkboxTest" class="text-white-smoke">
                    <input type="checkbox" value="value" id="checkboxTest">
                Fruit / Vegetables</label>
            </div>

            <div class="select-field-inner-div">
                <label for="checkboxTest" class="text-white-smoke">
                    <input type="checkbox" value="value" id="checkboxTest">
                Fruit / Vegetables</label>
            </div>
        </div>
    </div>
</div>

<h4 class="m-3">Custom select field</h4>

<div class="secondary m-3 p-1 extra-height">

<div class="outer-selection">
    <div class="select-field" onclick="UI.openOptionsOnSelectElement('City')"><p>Roskilde</p></div>
        <div class="select-field-inner" id="City">
            <div class="select-option active">
                <p>Roskilde</p>
            </div>
            <div class="select-option">
                <p>København</p>
            </div>
            <div class="select-option">
                <p>Odense</p>
            </div>

        </div>
    </div>
</div>





<h4 class="m-3">Tabs</h4>
<div class="m-3 row">
    <div class="col-6">
        <div id="tabsProfile">
            <div class="tab active"><p>Recipes</p></div>
            <div class="tab"><p>Pantries</p></div>
        </div>
    </div>
    <div class="col-6 align-center border">
        <div id="tabsPantries">
                <div class="tab active"><p>Home</p></div>
                <div class="tab"><p>Office</p></div>
            </div>
    </div>
</div>

<h4 class="m-3">Shadows</h4>

<div class="row m-1">

    <div class="col-6 m-2 p-2 secondary text-white-smoke text-center shadow-light"><p>light shadow</p></div>
    <div class="col-6 m-2 p-2 green text-white-smoke text-center shadow-heavy"><p>heavy shadow</p></div>

</div>


<h4 class="m-3">Notifications</h4>

<div class="m-3">
    <div id="noficationsPanel" class="notifications-panel">
        <p class="m-1">You've got {} notifications</p>
        <div class="notification-item">
            <span class="plain-circle"></span>
            <p>Your <u>milk</u> might expire soon!</p>
            <i class="fa fa-times"></i>
        </div>

        <div class="notification-item">
            <span class="plain-circle"></span>
            <p>Your <u>potatos</u> might get all green and nasty soon!</p>
            <i class="fa fa-times"></i>
        </div>

        <div class="notification-item">
            <span class="plain-circle"></span>
            <p>Your <u>cucumbers</u> are getting wet and soft.</p>
            <i class="fa fa-times"></i>
        </div>
    </div>
</div>




<!-- Import footer from /components -->
<?php require_once('components/footer.php') ?>