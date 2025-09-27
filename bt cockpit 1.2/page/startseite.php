<?php Theme::plugins('pageBegin'); ?>

<main>


<!----Hero----->

    <section id="front-hero" class="w-100 p-5">


        <div class="text-center bg-image rounded-3" style="
            background-image: url('<?php echo Theme::src('img/front-hero.jpeg'); ?>');
            height: 400px;
        ">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white p-5">
                        <h1 class="mb-3">Überschrift</h1>
                        <h4 class="mb-3">Sub Überschrift</h4>
                        <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero -->


    </section>

<h1>Guthub Test war erfolgreich mit Push/ Pull usw</h1>



<!------Leistungen------->

    <section id="leistungen-card" class="py-5">
        <div id="leistung-heading" class="text-center mb-3"><h2>Unsere Leistungen im Überblick</h2></div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="<?php echo Theme::src('img/leistung-img-card-1.jpeg');?>)" alt="">
                    <h4>Herrenharschnitt</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores iste minima ducimus voluptatem nobis ratione, obcaecati error beatae nulla corrupti cum quidem libero quos tenetur nihil accusantium? Sequi, commodi amet?</p>
                    <a href="">zum Harschnitt </a>
                </div>
                <div class="col">
                    <img src="<?php echo Theme::src('img/leistung-img-card-2.jpeg');?>)" alt="">
                    <h4>Herrenharschnitt</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores iste minima ducimus voluptatem nobis ratione, obcaecati error beatae nulla corrupti cum quidem libero quos tenetur nihil accusantium? Sequi, commodi amet?</p>
                    <a href="">zum Harschnitt </a>
                </div>
                <div class="col">
                    <img src="<?php echo Theme::src('img/leistung-img-card-3.jpeg');?>)" alt="">
                    <h4>Herrenharschnitt</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores iste minima ducimus voluptatem nobis ratione, obcaecati error beatae nulla corrupti cum quidem libero quos tenetur nihil accusantium? Sequi, commodi amet?</p>
                    <a href="">zum Harschnitt </a>
                </div>
            </div>
        </div>
    </section>




    <section id="leistungen-card" class="py-5">
        <div id="leistung-heading" class="text-center mb-3"><h2>Unsere Leistungen im Überblick</h2></div>
        <div class="container">
            <div class="grid">
                <div class="">
                    <img src="<?php echo Theme::src('img/leistung-img-card-1.jpeg');?>)" alt="">
                    <h4>Haarpigmentierung</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores iste minima ducimus voluptatem nobis ratione, obcaecati error beatae nulla corrupti cum quidem libero quos tenetur nihil accusantium? Sequi, commodi amet?</p>
                    <a href="">zum Harschnitt </a>
                </div>
                <div class="">
                    <img src="<?php echo Theme::src('img/leistung-img-card-2.jpeg');?>)" alt="">
                    <h4>Fußpflege</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores iste minima ducimus voluptatem nobis ratione, obcaecati error beatae nulla corrupti cum quidem libero quos tenetur nihil accusantium? Sequi, commodi amet?</p>
                    <a href="">zum Harschnitt </a>
                </div>
                <div class="">
                    <img src="<?php echo Theme::src('img/leistung-img-card-3.jpeg');?>)" alt="">
                    <h4>Reinigung mit Säure</h4>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores iste minima ducimus voluptatem nobis ratione, obcaecati error beatae nulla corrupti cum quidem libero quos tenetur nihil accusantium? Sequi, commodi amet?</p>
                    <a href="">zum Harschnitt </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Content -->
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

</main>

<!-- full page -->