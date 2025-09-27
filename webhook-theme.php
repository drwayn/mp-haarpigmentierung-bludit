<?php
// webhook-theme.php

$themeDir = '/pfad/zu/bludit/bl-themes/dein-theme-name';

// Sicherheitsprüfung: Nur POST erlauben
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(403);
    exit('Forbidden');
}

// Git pull ausführen
exec("cd $themeDir && git pull origin main");

echo "Theme aktualisiert.";
?>
