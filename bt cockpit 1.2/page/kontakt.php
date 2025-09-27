<?php Theme::plugins('pageBegin'); ?>
<!-- full page -->

<main>


    <section class="container-fluid p-5 mt-5">
        <h1>Kontakt</h1>

    </section>
    <!---Hero für Kontakt
    <section>
        <?php
        //$coverImage = $page->coverImage() ? $page->coverImage() : Theme::src('img/default-cover.jpg');
        ?>

        <div class="page-header container-fluid" style="background: url('<?php echo $coverImage; ?>') center/cover no-repeat; max-width:100%; height: 240px; display: flex; align-items: center; justify-content: start;">
            <h1 class="text-white ps-4"><?php echo $page->title(); ?></h1>
        </div>


    </section>

    ------->


    <!---Breadcrump------->
     <div class="container-fluid bg-white">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb container">
                <li class="breadcrumb-item"><a href="<?php echo $site->url(); ?>">Startseite</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $page->title(); ?></li>
            </ol>
        </nav>
    </div>
            
    

    <!---Content------->
    <div class="col-sm-9 container py-5">
                <p class="text-secondary"><?php echo $page->content(); ?></p>
                <?php if (!empty($page->tags(true))): ?>
                <p class="pt-3">
                    <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
                    <a href="<?php echo DOMAIN_TAGS.$tagKey ?>"><span class="badge rounded-pill bg-warning text-dark"><?php echo $tagName; ?></span></a>
                    <?php endforeach ?>
                </p>
                <?php endif; ?>
                <br>
                 <?php Theme::plugins('pageEnd'); ?>
    </div>


    <!---Kontaktformular------->
    <section>
        <div #id="kontakt" class="container">
            <form id="kontaktformular" action="mail.php" method="get">
                <label for="">Name</label>
                <input type="text" value="" name="name">
                <label for="">E-Mail</label>
                <input type="text" value="" name="email">
                <label for="">Telefon</label>
                <input type="text" value="" name="phone">
                <label for="">Nachricht</label>
                <input type="text" value="" name="text">
                <button type="submit" class="btn btn-lg btn-primary">Senden</button>
            </form>
        </div>
    </section>


</main>