jQuery(function($){
    $(".p-hamburger").on( 'click', function() {
        $('.p-hamburger, .p-global-menu-wrap').toggleClass( 'is-active' );
    })

    if (window.matchMedia( 'screen and (min-width: 992px)' ).matches) {
        $('.p-global-menu__list').superfish();
    }
});