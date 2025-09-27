
<!-----------------------------JAVASCRIPT-------------------------------->



<!-----Link JS----->



<!---<script type="module" src="src/vendor/jquery/plugins/all.js"></script> jQuery Plugins import--->


<?php 
echo Theme::js('src/vendor/jquery/jquery.min.js');
echo Theme::js('js/navigation.js');
echo Theme::js('js/custom.js');
echo Theme::js('js/app.js');
echo Theme::js('js/search.js');
echo Theme::js('js/contact.js');
echo Theme::js('src/vendor/jquery/plugins/all.js');
?>


<!-----Plugins js----->

<?php 

echo Theme::js('src/vendor/animation/aos.js');
echo Theme::js('src/vendor/jquery/plugins/slim-navigation.js');
echo Theme::js('src/vendor/jquery/plugins/animatedModal.min.js');
echo Theme::js('src/vendor/jquery/plugins/drawsvg.js');
echo Theme::js('src/vendor/jquery/plugins/fullpage.min.js');
echo Theme::js('src/vendor/jquery/plugins/jquery.images-compare.js');
echo Theme::js('src/vendor/jquery/plugins/jquery.superfish.min.js');
echo Theme::js('src/vendor/animation/parallax.min.js');
echo Theme::js('src/vendor/animation/scrollify.js');
echo Theme::js('src/vendor/animation/selectize.min.js');


?>






   


  <!-- Navigation Toogle -->

<script>
$(document).ready(function() {
      // Toggle für das gesamte mobile Menü
      $('.simple-btn-toggle, .simple-mobile-close').on('click', function() {
        $('.simple-menu-wrapper').toggleClass('active');
      });

      // Akordeon-Verhalten für Untermenüs in Mobile-Ansicht (Breakpunkt: 768px)
      $('.simple-menu li:has(.simple-submenu) > a').on('click', function(e) {
        if ($(window).width() < 768) {
          e.preventDefault();
          // Toggle Klasse, die per CSS die Höhe und Opacity ändert
          $(this).parent().toggleClass('active').siblings().removeClass('active');
        }
      });
    });

</script>

<!-----AOS JS----->


 <script>
    AOS.init();
</script>


<!-----Swiper JS----->

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper('.swiper', {
      loop: true,
      autoplay: {
        delay: 3000,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });
  });
</script>




<!----Footer Top---->
<section class="pt-4">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <h6 class="text-secondary">Buche jetzt deinen Diskreten Termin für eine Haarpigmentierung</h6>
        <p class="text-secondary">Erfinde dich neu. Deine Haare dein Leben, mehr Selbstbewusstsein alles Disket und unsichtbar.</p>
      </div>
      <div class="col-xs-12 col-md-4">
        <a href=""><button class="btn btn-lg btn-light uppercase">Termin buchen</button>
        </a>
      </div>
    </div>
  </div>
</section>
  
<!------Footer Style 3------>

<footer class="pt-5 bg-secondary footer">
    <div class="container-fluid">

        <div class="row">
            <div class="mx-auto">
                <img class="rounded-4" src="<?php echo Theme::src('img/logo-1.png'); ?>" href="<?php echo $site->url(); ?>" width="240px" alt="">
            </div>
        </div>

        <!---Navigation------->
        
            <div class="row pt-3">
                <ul class="mx-auto">
                    <a href="#" class="rounded-circle"><i class="bi bi-facebook text-white"></i></a>
                    <a href="#" class="rounded-circle"><i class="bi bi-twitter text-white"></i></a>
                    <a href="#" class="rounded-circle"><i class="bi bi-instagram text-white"></i></a>
                    <a href="#" class="rounded-circle"><i class="bi bi-tiktok text-white"></i></a> 
                </ul>

            </div>


            <div class="grid d-flex justify-items-center align-items-center pb-2">
                <!---widget 1------->

                <div class="widget-four justify-self-start">
                    <p><a class="text-white d-none" href="#">Termin buchen</a></p>
                </div>

                <!---widget 2------->
                <div class="widget-four justify-self-center">
                    <nav class="">
                        <ul class="">
                            <li class="mx-2"><a class="text-white uppercase" href="#">Haarpigmentierung</a></li>
                            <li class="mx-2"><a class="text-white uppercase" href="#">Preise</a></li>
                            <li class="mx-2"><a class="text-white uppercase" href="#">Maniküre</a></li>
                            <li class="mx-2"><a class="text-white uppercase" href="#">Datenschutz</a></li>
                            <li class="mx-2"><a class="text-white uppercase" href="#">Über uns</a></li>
                        </ul>
                </nav>
                </div>
                <!---widget 3------->
                <div class="widget-four justify-self-end">
                    <p class="text-white">Copyright © <?php echo date('Y'); ?></p>
                </div>
            </div>

              <hr>
                <!---Credit Footer---->
              <div class="pb-1 container-fluid">
                <!---widget 4------->

                  <div class="widget-four justify-self-start">
                      <p class="text-white d-none">Copyright © <?php echo date('Y'); ?></p>
                  </div>

                  <!---widget 5------->
                  <div class="widget-four justify-self-center">
                      <nav class="">
                          <ul class="">
                              <li class="mx-2"><a class="text-white uppercase" href="www.mk-webdesign-hamburg.de">Webdev by Mahmoud Kanaan</a></li>
                          </ul>
                  </nav>
                  </div>
                  <!---widget 6------->
                  <div class="widget-four justify-self-end">
                      
                      <li class="mx-2"><a class="text-white uppercase" href="#"><button class="bg-white">Termin buchen</button></a></li>
                  </div>
            </div>




              </div>

    </div>
</footer> 







<!--/ footer -->