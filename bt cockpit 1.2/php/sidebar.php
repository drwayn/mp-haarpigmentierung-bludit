<?php Theme::plugins('siteSidebar') ?>

<aside>
    <div class="sticky">
        <div id="sidebar-termin" class="bg-light p-4">
            <h4>Buche jetzt dein friseur Termin Online</h4>
            <p>Trage dich in unserem Newsletter an</p>
            <button type="submit" method="GET" value="" name=""> Kostenfrei eintragen</button>
        </div>
        
        <div id="newsletter" class="bg-light p-4 my-3">
            <h4>Newsletter</h4>
            <p>Trage dich in unserem Newsletter an</p>
            <form id="newsletter-form" action="GET">
                <input type="email" placeholder="email-adresse eingeben" value="" name="newsletter-email">
                <button type="submit" method="GET" value="" name=""> Kostenfrei eintragen</button>  
            </form>
            
        </div>

    </div>
    
    

</aside>

<p class="strong lead">template: sidebar.php</p>