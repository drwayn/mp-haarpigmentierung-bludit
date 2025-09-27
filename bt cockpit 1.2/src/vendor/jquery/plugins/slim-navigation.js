$(document).ready(function() {
    $('.header__burger').click(function(event) {
        $('.header__burger, .header__menu').toggleClass('active')
        $('body').toggleClass('lock')
    })



    $(".mobile_menu").slideMobileMenu({ 
          // Hamburger Id
          "hamburgerId"   :"sm_menu_ham",
         
          // Menu Wrapper Class
          "wrapperClass"  :"sm_menu_outer",

          // Submenu Class
          "submenuClass"  :"submenu",

          // or 'accordion'

          "menuStyle":"slide",

          // Calls when menu loaded

          "onMenuLoad"    :function() {return true; },

          // Calls when menu open/close

          "onMenuToggle"  :function() {return true; }

        });
        


    //$(".mobile_menu").slideMobileMenu();
})