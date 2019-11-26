// Helper functions

    // one = document.querySelector('element');
    // all = document.querySelectorAll('element');

    one = function(el){ return document.querySelector(el) }
    all = function(el){ return document.querySelectorAll(el) }


class API {

    static loginRequest(e) {

        e.preventDefault();

        const loginEmail = one('#txtEmail').value;
        const loginPassword = one('#txtPassword').value;

        let errorMessage = one('#errorMessage');
        let errorMessageOpacity = one('.error-message');

        if ( loginEmail == '' || loginPassword == '' ){
            errorMessage.innerText = 'Please enter a valid email and password';
            errorMessageOpacity.style.opacity = '1';
        } else {

            $.ajax({
                url: `apis/api-login.php?email=${loginEmail}&password=${loginPassword}`,
                method: 'get'
            }).done( function(response){
                console.log(response);

                if ( response == 'succes' ) {
                    window.location.replace('profile.php');
                }
            } )
        }
    }

    static signUpRequest(e) {

        e.preventDefault();

        const signupFirstName = one('#signupFirstName').value;
        const signupLastName = one('#signupLastName').value;
        const signupEmail = one('#signupEmail').value;
        const signupPassword = one('#signupPassword').value;

        let errorMessage = one('#errorMessage');
        let errorMessageOpacity = one('.error-message');

        if ( signupFirstName == '' || signupLastName == '' || signupEmail == '' || signupPassword == '' ) {

            errorMessage.innerText = 'Please fill out all the fields';
            errorMessageOpacity.style.opacity = '1';

        } else {

            fetch( 'apis/api-sign-up.php', {
                method: "POST",
                body: new FormData( document.getElementById('signup'))
            }).then((responseJson) => {
                window.location.replace('profile.php');
              })
    
        }

    }

    static saveProfileEdit(e){
        e.preventDefault();

        fetch( 'apis/api-edit-profile.php', {
            method: "POST",
            body: new FormData( document.getElementById('editProfile'))
        }).then((responseJson) => {
            window.location.replace('profile.php');
          })
    }

    static newPantry(e){

        e.preventDefault();

        let newPantryName = one('#txtPantryName').value;
        let newPantryMember = one('#txtPantryMemberMail').value;

        $.ajax({
            url: `apis/api-create-pantry.php?name=${newPantryName}&member=${newPantryMember}`,
            method: 'get'
        }).done( function(response){
            console.log(response);

            // trigger UI function to close pantry section
            UI.triggerNewPantrySection();
        });
        
        // clear fields after submit
            newPantryName = '';
            newPantryMember = '';

    }

}

class UI {

    static openOptionsOnSelectElement(id) {
        
        let filter = one('#'+id);

        filter.classList.toggle('active');
        filter.parentElement.firstElementChild.classList.toggle('active');

    }

    static switchProfileTabs(id){

        let recipesContainer = one('#recipes');
        let pantriesContainer = one('#pantries');
        let newPantryBtn = one('#newPantryBtn').parentElement;
        let newPantrySection = one('#newPantrySection');
        let cancelPantryBtn = one('#cancelPantryBtn').parentElement;

        let isRecipesTabActive = one('#recipesTab').classList.contains('active');

        recipesContainer.classList.toggle('hidden');
        pantriesContainer.classList.toggle('hidden');
        newPantryBtn.classList.toggle('hidden');

        if ( isRecipesTabActive ) {
            
            newPantryBtn.classList.add('hidden');
            newPantrySection.classList.add('hidden');
            cancelPantryBtn.classList.add('hidden');

        }

    }

    static changeSelection(id, el){

        // 1) set the text of the new element in the select
        one('#'+id).parentElement.firstElementChild.firstElementChild.innerText = el;
        one('#pantrySelected').innerText = el;

        // 2) toggle class 'active' to new element and remove from elsewhere
        let selectionContainer = one('#'+id);
        
        for( let i = 0; i < selectionContainer.children.length; i++ ) {

            let eachOptionText = selectionContainer.children[i].firstElementChild.innerText;

            // firstly remove 'active' from all options
            selectionContainer.children[i].classList.remove('active')

            // loop through each select option and see if there's a match betweeen el and eachOptionText
            // + toggle 'active'
            if( eachOptionText == el ){
                selectionContainer.children[i].classList.toggle('active');

                one('#'+id).classList.remove('active');
            }
        }
    }

    static changeTab(id, el){

        let tabId = one('#'+id);

        for ( let i = 0; i < tabId.children.length; i++ ){

            if ( tabId.children[i].innerText == el ){
                tabId.children[i].classList.add('active');
            } else {
                tabId.children[i].classList.remove('active');
            }
        }

    }

    static openBurgerMenu(){
        
        one('#mobileMenuPanel').classList.toggle('active');

            // change icon when active

            let icon = one('#burger i');
            let burgerIconClass = one('#burger i').classList.contains('fa-bars');

            if ( one('#mobileMenuPanel').classList.contains('active') && burgerIconClass ){
                
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');

                UI.applyOverlayToPageContent();

            } else {

                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');

                UI.removeOverlayToPageContent();
                

            }

    }

    static applyOverlayToPageContent(){

        const pageContent = one('#pageContent');
        const logoWrapper = one('#logoWrapper');
        const imageBackground = one('#imageBackground');

        pageContent.classList.add('opacity-overlay');
        logoWrapper.classList.add('opacity-logo-overlay');
        imageBackground.classList.add('opacity-overlay');

    }

    static removeOverlayToPageContent(){

        pageContent.classList.remove('opacity-overlay');
        logoWrapper.classList.remove('opacity-logo-overlay');
        imageBackground.classList.remove('opacity-overlay');

    }

    static clearErrorMessage(){

        let errorMessage = one('#errorMessage');
        let errorMessageOpacity = one('.error-message');

        errorMessage.innerText = '';
        errorMessageOpacity.style.opacity = '0';
    }

    static toggleShowHideNotificaitons(){
        let noticationsPanel = one('#notificationsPanel').firstElementChild;
        let hideShowButton = one('#showHideNotificationsButton');
        let clearAllButton = one('#clearAllNotificationsButton');

        noticationsPanel.classList.toggle('hidden');

        if ( noticationsPanel.classList.contains('hidden') ){
            hideShowButton.innerText = 'Show';
            clearAllButton.classList.toggle('hidden');
        } else {
            hideShowButton.innerText = 'Hide';
            clearAllButton.classList.toggle('hidden');
        }
    }

    static clearNotifications(){
        let noticationsPanel = all('.notification-item');

        for ( let i = 0; i < noticationsPanel.length; i++ ){
            noticationsPanel[i].remove();
        }

        UI.updateNotificationsCount();
    }

    static updateNotificationsCount(){

        let textBlock = one('.explainer p');
        let noticationsCount = all('.notification-item').length;

        textBlock.innerText = 'You have '+noticationsCount+' new notifications';

    }

    static triggerNewPantrySection(){

        let newPantrySection = one('#newPantrySection');
        let newPantryBtn = one('#newPantryBtn').parentElement;
        let cancelPantryBtn = one('#cancelPantryBtn').parentElement;

        newPantrySection.classList.toggle('hidden');
        newPantryBtn.classList.toggle('hidden');
        cancelPantryBtn.classList.toggle('hidden');

    }

    static loadMemberImages(id){

        $.ajax({
            url: 'apis/api-load-member-images.php?id='+id,
            method: 'get'
        }).done( function(response) {

            let array = JSON.parse(response);

            let container = one('.members-of-pantry');

            container.innerHTML = '';


            array.forEach(element => {

                let div = document.createElement('div');
                div.classList.toggle('member-image');
                div.innerHTML = `<img src="src/images/${element}" class="small-avatar round-img sm-col-2">
                                `;

                container.appendChild(div);

                console.log(element);
            });

        })

    }

}



// ******* Event listeners ***********

one('body').addEventListener('click', (e) => {

    // select-option event listener
    if (e.target.classList.contains('select-option')) {

        let selectionFieldId = e.target.parentElement.id;
        let selectedElementText = e.target.innerText;

        UI.changeSelection(selectionFieldId, selectedElementText);

    }; 
    
    // tab event listerner
    if ( (e.target.classList.contains('tab')) ) {

        let tabContainerId = e.target.parentElement.id;
        let selectedTabElement = e.target.innerText;

        UI.changeTab(tabContainerId, selectedTabElement);
    }; 

    // burger event listener
    if ( e.target.id == 'burger' ) {

        UI.openBurgerMenu();
    
    };

    // login event listener
    if ( e.target.id == 'login' ) {

        API.loginRequest(e);

    }

    // signup event listener
    if ( e.target.id == 'signup' ) {
        API.signUpRequest(e);
    }

    // Hide/show notications event listenrer
    if ( e.target.id == 'showHideNotificationsButton' ){
        UI.toggleShowHideNotificaitons();
    }

    // Profile tabs
    if ( e.target.id == 'recipesTab' || e.target.id == 'pantriesTab' ){
        UI.switchProfileTabs(e.target.id);
    }

    if ( e.target.id == 'clearAllNotificationsButton' ) {
        UI.clearNotifications();
    }

    if ( e.target.id == 'newPantryBtn' ) {
        UI.triggerNewPantrySection();
    }

    if ( e.target.id == 'cancelPantryBtn' ){
        UI.triggerNewPantrySection();
    }

    if ( e.target.id == 'saveEditProfileBtn' ){
        API.saveProfileEdit(e);
    }

    if ( e.target.id == 'submitNewPantryBtn' ){
        API.newPantry(e);
    }

    if ( (e.target.classList.contains('select-option')) ) {
        UI.loadMemberImages(e.target.id);
    }

})