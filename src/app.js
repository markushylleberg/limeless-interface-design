// Helper functions

    // one = document.querySelector('element');
    // all = document.querySelectorAll('element');

    one = function(el){ return document.querySelector(el) }
    all = function(el){ return document.querySelectorAll(el) }


class UI {

    static openOptionsOnSelectElement(id) {
        
        let filter = one('#'+id);

        filter.classList.toggle('active');
        filter.parentElement.firstElementChild.classList.toggle('active');

    }

    static changeSelection(id, el){

        // 1) set the text of the new element in the select
        one('#'+id).parentElement.firstElementChild.firstElementChild.innerText = el;

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

        pageContent.classList.add('opacity-overlay');
        logoWrapper.classList.add('opacity-logo-overlay');

    }

    static removeOverlayToPageContent(){

        pageContent.classList.remove('opacity-overlay');
        logoWrapper.classList.remove('opacity-logo-overlay');

    }

}



// ******* Event listeners ***********

one('body').addEventListener('click', (e) => {
    if (e.target.classList.contains('select-option')) {

        let selectionFieldId = e.target.parentElement.id;
        let selectedElementText = e.target.innerText;

        UI.changeSelection(selectionFieldId, selectedElementText);

    } else if ( (e.target.classList.contains('tab')) ) {

        let tabContainerId = e.target.parentElement.id;
        let selectedTabElement = e.target.innerText;

        UI.changeTab(tabContainerId, selectedTabElement);
    } else if ( e.target.id == 'burger' ) {

        UI.openBurgerMenu()
    
    };
})