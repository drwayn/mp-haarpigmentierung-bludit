
jQuery(function ($) {
    // Hier dein Code


    // Button Animation
    $("button").addClass("hvr-grow-shadow");
    

    // Card Animation
    //$(".card").addClass("animate__animated animate__fadeInDown");
    

    //=============Animation FÜR MAGIC/ANIMATE

        //--------Für Magic
        function triggerAnimationWhenVisible() {
          $('.magictime').each(function() {
            var $elem = $(this);
            var elemTop = $elem.offset().top;
            var elemBottom = elemTop + $elem.outerHeight();
            var windowTop = $(window).scrollTop();
            var windowBottom = windowTop + $(window).height();
            
            // Prüfen, ob das Element (auch teilweise) im Viewport ist
            if (elemBottom > windowTop && elemTop < windowBottom - ($elem.outerHeight() / 2)) {
              // Falls noch nicht getriggert (damit es nur einmal abläuft)
              if (!$elem.data('animated')) {
                $elem.css({
                  'animation-play-state': 'running',
                  '-webkit-animation-play-state': 'running'
                });
                $elem.data('animated', true);
              }
            }
          });
        }
        
        // Überprüfe beim Laden und bei jedem Scroll-Event
        $(window).on('scroll load', triggerAnimationWhenVisible);
        triggerAnimationWhenVisible();


      
        //----------Für Animate
            function triggerAnimateCSS() {
              $('.animate__animated').each(function() {
                var $elem = $(this);
                var elemTop = $elem.offset().top;
                var elemBottom = elemTop + $elem.outerHeight();
                var windowTop = $(window).scrollTop();
                var windowBottom = windowTop + $(window).height();
          
                // Element ist (teilweise) sichtbar
                
                if (elemBottom > windowTop && elemTop < windowBottom - ($elem.outerHeight() / 2)) {

                  // Falls noch nicht animiert (damit es nur einmal läuft)
                  if (!$elem.data('animated')) {
                    $elem.css({
                      'animation-play-state': 'running',
                      '-webkit-animation-play-state': 'running'
                    });
                    $elem.data('animated', true);
                  }
                }
              });
            }
          
            // Überprüfe beim Laden und bei jedem Scroll-Event
            $(window).on('scroll load', triggerAnimateCSS);
            triggerAnimateCSS();

            


//======================Modal========================================================


//------ Modal 1

// Modal öffnen (Version 1)
$(".modal-btn-1").on("click", function(){
  $(".modal-trigger-1").get(0).showModal();
});

// Modal schließen (Version 1)
$(".btn-close-modal-1").on("click", function(){
  $(".modal-trigger-1").get(0).close();
});




//------ Modal 2

// Modal öffnen (Version 2)
$(".modal-btn-2").on("click", function(){
  $(".modal-trigger-2").get(0).showModal();
});

// Modal schließen (Version 1)
$(".btn-close-modal-2").on("click", function(){
  $(".modal-trigger-2").get(0).close();
});




//------ Modal 3 (login)

// Modal öffnen (Version 2)
$(".modal-btn-login").on("click", function(){
  $(".modal-trigger-login").get(0).showModal();
});

// Modal schließen (Version 1)
$(".btn-close-modal-login").on("click", function(){
  $(".modal-trigger-login").get(0).close();
});




//------ Modal 4 (Register)

// Modal öffnen (Version 2)
$(".modal-btn-register").on("click", function(){
  $(".modal-trigger-register").get(0).showModal();
});

// Modal schließen (Version 1)
$(".btn-close-modal-register").on("click", function(){
  $(".modal-trigger-register").get(0).close();
});



//------ Modal 5 (Contact)

// Modal öffnen (Version 2)
$(".modal-btn-contact").on("click", function(){
  $(".modal-trigger-contact").get(0).showModal();
});

// Modal schließen (Version 1)
$(".btn-close-modal-contact").on("click", function(){
  $(".modal-trigger-contact").get(0).close();
});



//------ Modal 5 (Newsletter)

// Modal öffnen (Version 2)
$(".modal-btn-newsletter").on("click", function(){
  $(".modal-trigger-newsletter").get(0).showModal();
});

// Modal schließen (Version 1)
$(".btn-close-modal-newsletter").on("click", function(){
  $(".modal-trigger-newsletter").get(0).close();
});











});





