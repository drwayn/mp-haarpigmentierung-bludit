<!doctype html>
<html lang="<?php echo Theme::lang() ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include(THEME_DIR_PHP.'head.php'); ?>
  </head>
  <body class="text-secondary">
   <div>
    <?php Theme::plugins('siteBodyBegin'); ?>
    <?php include(THEME_DIR_PHP.'topbar.php'); ?>

    
    <?php

        if ($WHERE_AM_I == 'page') {
            // Prüfen, ob die Seite zu einer Kategorie gehört (also ein Blog-Artikel ist)
            if ($page->category()) {
                $categoryTemplate = THEME_DIR . 'category/' . $page->categoryTemplate() . '.php';
                
                if (file_exists($categoryTemplate)) {
                    include($categoryTemplate); // Custom-Template aus dem category-Ordner
                } else {
                    include(THEME_DIR . 'php/single.php'); // Standard für Blog-Artikel
                }
            } else {
                $slugTemplate = THEME_DIR . 'page/' . $page->slug() . '.php';
                
                if (file_exists($slugTemplate)) {
                    include($slugTemplate); // Custom-Template für einzelne Seiten
                } else {
                    include(THEME_DIR . 'php/page.php'); // Standard für normale Seiten
                }
            }
        } elseif ($WHERE_AM_I == 'category') {
            $slugCategoryTemplate = THEME_DIR . 'category/' . $url->slug() . '.php';
            
            if (file_exists($slugCategoryTemplate)) {
                include($slugCategoryTemplate); // Custom-Template für Kategorien
            } else {
                include(THEME_DIR . 'php/archive.php'); // Standard für Kategorien
            }
        } else {
            include(THEME_DIR . 'php/home.php'); // Standard-Template für die Startseite oder andere Fälle
        }

    ?>
    
    <?php include(THEME_DIR_PHP.'footer.php'); ?>
    
    
    <!-- Javascript  -->
	<?php
		echo Theme::jquery();
		echo Theme::js('src/vendor/animation/aos.js');
        echo Theme::js('src/js/theme.js');
        echo Theme::js('src/js/custom.js');
        echo Theme::js('src/vendor/jquery/plugins/slim-navigation.js');
        echo Theme::js('src/vendor/jquery/plugins/animatedModal.min.js');
        echo Theme::js('src/vendor/jquery/plugins/drawsvg.js');
        echo Theme::js('src/vendor/jquery/plugins/fullpage.min.js');
        echo Theme::js('src/vendor/jquery/plugins/jquery.images-compare.js');
        echo Theme::js('src/vendor/jquery/plugins/jquery.superfish.min.js');
        echo Theme::js('src/vendor/jquery/plugins/parallax.min.js');
        echo Theme::js('src/vendor/jquery/plugins/scrollify.js');
        echo Theme::js('src/vendor/jquery/plugins/selectize.min.js');


	?>


    <?php Theme::plugins('siteBodyEnd'); ?>

    </div>
    
</html>