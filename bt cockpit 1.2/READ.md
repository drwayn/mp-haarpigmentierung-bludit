
# GENERAL

## Logo verändern
Gehe in den Ordner img 
Lade dein Logo mit dem Namen logo-1.png hoch

## Font & Farben verändern
1. Lade dein Font in die src/fonts
2. Gehe in den Ordner css/custom.scss 
3. Verändere bei @font die URL im src: url('../src/font/die font datei mit endung') format('truetype');
4. Drücke auf watch sass in deinem Visual Code


## Farben verändern
5. Farben kannst du auch verändern, ändere die den Hexa-code bei $primary oder $secondary


## Bilder bennen
Lege alle Bilder mit den gleichen Namen im Ordner
Startseite Front Hero -> front-hero.jpeg
Startseite Leistung Card -> 1. leistung-img-card-1.jpeg / 2. leistung-img-card-2.jpeg / 3. leistung-img-card-3.jpeg

## Bilder vom img ordner laden im Bludit Editor
https://deine-domain.de/bludit/bl-themes/bt%20cockpit%201.1/img/die-wunschdatei.png

=================================================================


#TEMPLATE

## Standart Template 
page         ->  page.php
category     ->  archive.php
blog article ->  single.php


# Custom Template (page)
Lege eine PHP Datei im Page Ordner Mit dem gleichen slug
z.b kontakt seite in bludit mit url slug 
kontakt -> kontakt.php
leistung -> leistung.php

# Custom Template (category)
Lege eine PHP Datei im category Ordner mit dem gleichen slug
z.b kontakt seite in bludit mit url slug



=================================================================

#TAGS

### Titel ausgeben
<?php echo $site->title(); ?>

### Content ausgeben
<?php echo $page->content(); ?>

### Thumnail ausgeben
<?php echo $page->coverImage(); ?>

### Titel ausgeben
<?php echo $page->title(); ?>">

### Seiten url ausgeben 
<?php echo $site->url(); ?>

### Seiten includieren
<?php include(THEME_DIR_PHP.'footer.php'); ?>

### Bilder ausgeben
<?php echo Theme::src('img/deine-bild.jpg'); ?>
Beispiel-Code: <img src="<?php echo Theme::src('img/dein-bild.jpg'); ?>" alt="Service 3" class="img-fluid">


===================================================================

# CSS & JS EINBINDEN

##SCSS/CSS Datei einbinden
Erstelle ein css Datei im css ordner
Gehe zu head.php und füge folgenden code ein
<?php echo Theme::css('css/your-custom.css'); ?>


## Javascript Datei einbinden
Erstelle ein js Datei im js ordner
Gehe zu index.php und füge folgenden folgenden Code ganz unten bei <!---- Javascript --->
echo Theme::js('js/your-custom.js');


=====================================================================
# BOOTSTRAP 

## Bootstrap anpassen
1. Gehe in den Ordner css/bootstrap-custom.css
2. ändere deine gewünschte Klasse. 
3. Vergiss nicht (Run Watch)


============================================================================

# Kontaktformular
1. js/contact.js
2. config/mail.php (ändere dort die email adresse)

=============================================================================


#JS

===============================================================================



