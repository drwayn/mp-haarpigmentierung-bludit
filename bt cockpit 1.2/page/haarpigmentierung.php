

    <?php Theme::plugins('pageBegin'); ?>
    <!-- full page -->
    
    
    
    
            <!-- Seitenbild als Hintergrund -->
    <?php
    $coverImage = $page->coverImage() ? $page->coverImage() : Theme::src('img/default-cover.jpg');
    ?>

    <div class="page-header container-fluid" style="background: url('<?php echo $coverImage; ?>') center/cover no-repeat; max-width:100%; height: 240px; display: flex; align-items: center; justify-content: start;">
        <h1 class="text-white ps-4"><?php echo $page->title(); ?></h1>
    </div>


    <!-- Breadcrumb -->
     <div class="container-fluid bg-white">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb container-fluid mt-3">
                <li class="breadcrumb-item"><a href="<?php echo $site->url(); ?>">Startseite</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $page->title(); ?></li>
            </ol>
        </nav>
    </div>
            
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


        <!----Blogartikel--->

            <section class="py-5">
                <div class="container">
                        <h2 class="text-center">Blogbeiträge zum thema Leben</h2>
                    <div class="row py-1">

                        <div class="col-xs-12 col-md-3 ">
                            <img src="https://images.unsplash.com/photo-1726179612723-124312ff97a8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            <div class="p-1">
                                <h4>Das iste eine Headline</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati aspernatur voluptate eum officiis illum fuga at, mollitia quis unde quia sit nostrum numquam impedit voluptates atque necessitatibus et corporis.</p>
                                <a href="#">Mehr erfahren</a>
                            </div>

                        </div>

                        <div class="col-xs-12 col-md-3 ">
                            <img src="https://plus.unsplash.com/premium_photo-1676977395455-e083eed4bbff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            <h4>Das iste eine Headline</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati aspernatur voluptate eum officiis illum fuga at, mollitia quis unde quia sit nostrum numquam impedit voluptates atque necessitatibus et corporis.</p>
                            <a href="#">Mehr erfahren</a>
                        </div>

                        <div class="col-xs-12 col-md-3 ">
                            <img src="https://images.unsplash.com/photo-1743074745121-235a12c74889?q=80&w=1828&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            <h4>Das iste eine Headline</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati aspernatur voluptate eum officiis illum fuga at, mollitia quis unde quia sit nostrum numquam impedit voluptates atque necessitatibus et corporis.</p>
                            <a href="#">Mehr erfahren</a>
                        </div>

                        <div class="col-xs-12 col-md-3 ">
                            <img src="https://images.unsplash.com/photo-1743044114794-dd3244e5141f?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            <h4>Das iste eine Headline</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae obcaecati aspernatur voluptate eum officiis illum fuga at, mollitia quis unde quia sit nostrum numquam impedit voluptates atque necessitatibus et corporis.</p>
                            <a href="#">Mehr erfahren</a>
                        </div>

                    </div>
                </div>
            </section>



        <!-- Akkordion Leistungen -->

        <div class="container">

            <details name="example" open>
                <summary>Accordion 1</summary>
                <p>...</p>
            </details>

            <hr />

            <details name="example">
                <summary>Accordion 2</summary>
                <ul>
                    <li>...</li>
                    <li>...</li>
                </ul>
            </details>

        </div>






            
        </div>
    </div>



    

    <!--/ full page -->

    <!--/ full page -->