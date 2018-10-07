function closePrimaryMenu() {
    var menuLink = document.querySelectorAll('#primary-menu .navigation__item a'); 

    for( var i = 0; i < menuLink.length; i++ ) {
        menuLink[i].addEventListener('click', function(e) {

            var naviToggle = document.getElementById('navi-toggle');

            if('checked' != naviToggle.checked) {
                naviToggle.click();
            }
            
        });
    }
}
closePrimaryMenu();
