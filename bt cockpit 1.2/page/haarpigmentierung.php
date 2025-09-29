

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
            <div class="container-fluid">

                <section class="py-5">
                    <div class="container">
                        <div class="grid">
                            <div class="py-3">
                                <h2>Das ist ein Header</h2>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos aliquam laboriosam odit ullam distinctio commodi quibusdam ad architecto voluptas vitae asperiores repudiandae dolore, non tenetur, ipsum in esse vero quasi.</p>
                                <details name="example" >
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
                                <button class="my-2 primary ">HIER KLICKEN →</button>
                            </div>
                            <div>
                                <img src="https://images.unsplash.com/photo-1740482903249-a49246de837d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            </div>
                        </div>
                    </div>
                </section>


                <section class="py-5 ">
                    <div class="container">
                        <div class="grid">
                            <div class=" order-1 my-1">
                                <i class="text-center bi bi-check"></i>
                                <h4 class="text-center">Massgeschneiderte Lösung</h4>
                            </div>
                            <div class=" order-2 my-1">
                                <i class="mx-auto bi bi-check"></i>
                                <h4 class="text-center">Diskrete Vorabanalyse</h4>
                            </div>
                            <div class="order-3 my-1">
                                <i class="mx-auto bi bi-check"></i>
                                <h4 class="text-center">Haarpigmentierung im Detail</h4>
                            </div>
                            <div class="order-4 my-1">
                                <i class="mx-auto bi bi-check"></i>
                                <h4 class="text-center">Haarpigmentierung im Detail</h4>
                            </div>
                        </div>
                    </div>
                </section>



                <section class="py-5 bg-primary">
                    <div class="container">
                        <div class="grid align-items-center justify-items-center ">
                            <div class="">
                                <h4 class="text-white uppercase">BUCHE JETZT DEINEN DISKRETE VORABANALYSE ÜBER WHATSAPP</h4>
                                <p class="text-white">Erhalten sie ihre Behandlung um volles Haar zu erhalten. Egal ob sie eine komplette Glatze haben oder nur eine Teilbereich mit der Haarpigmentierung können sie in kürzester Zeit fantastische Ergebnisse erzielen. Der Einsatz</p>
                            </div>
                            <div class="">
                                <a href=""><button class="secondary uppercase">Diskrete Whatsapp Analyse -></button></a>
                            </div>
                        </div>
                    </div>
                </section>
                 
                <!----Slider------>





                
                <section class="py-4">
                    <div class="container ">
                        <div class="w-50 justify-self-center">
                            <h2 class="text-center">Die lösung <br>
                            Micro Haarpigmentierung</h2>
                            <p class="text-center">Die Micro Haar Pigmentierung (auch Kopfhautpigmentierung genannt) ist eine moderne, nicht-invasive Methode, um das Erscheinungsbild voller Haare zurückzugewinnen.</p>
                        </div>
                    </div>
                </section>




                <section class="py-5">
                    <div class="container">
                        <div class="grid">
                            <div>
                                <img src="https://images.unsplash.com/photo-1740482903249-a49246de837d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            </div>
                            <div class="py-3">
                                <h2>So funktioniert es </h2>
                                <p>Mit einer speziellen Technik werden farblich perfekt abgestimmte Pigmente in die Kopfhaut eingebracht. Das erzeugt die optische Illusion von dichterem Haar oder frisch rasierten Haarstoppeln.</p><br>
                                                                
                                <details name="example" >
                                    <summary class="uppercase">Haarpigmentierung im Detail</summary>
                                    <ul>
                                        <p>Erhalten sie ihre Behandlung um volles Haar zu erhalten. Egal ob sie eine komplette Glatze haben oder nur eine Teilbereich mit der Haarpigmentierung können sie in kürzester Zeit fantastische Ergebnisse erzielen. Der Einsatz von Haarpigmentierung ist risikolos und hilft </p>
                                    </ul>
                                    </details>

                                    <hr />

                                    <details name="example">
                                    <summary class="uppercase">DIESE METHODE VERWENDEN WIR</summary>
                                    <ul>
                                        <p></p>
                                    </details>

                                                                        <details name="example">
                                    <summary class="uppercase">SO LÄUFT EINE BEHANDLUNG AB</summary>
                                    <ul>
                                        <p></p>
                                    </ul>
                                    </details>

                                <button class="my-2 primary ">HIER KLICKEN →</button>
                            </div>
                        </div>
                    </div>
                </section>















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