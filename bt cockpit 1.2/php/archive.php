<?php Theme::plugins('pageBegin'); ?>
    <!-- full page -->
     
<main>

    <!----Titel---->
    <div class="container pb-5">
            <div class="row">
                    <h1 class="fw-bold pt-4 pb-5"><?php echo $page->title(); ?></h1>
                </div>
            </div>
    </div>

    <!-----Foreach Loop---->
    <?php
    $coverImage = $page->coverImage() ? $page->coverImage() : Theme::src('img/default-cover.jpg');
    ?>

    <?php 
        foreach($blog as $blogs){
            echo ' 

            <div class="blog-list container">
                <div class="row">
                    <div id="blog-list-img-sec" class="col-4">
                        <a href="<?php echo page->url(); ?>" ><img id="blog-list-img" class="img-fluid w-100" src="<?php echo $coverImage; ?>" alt="<?php echo page ->title()?>"></a>
                    </div>
                    <div id="blog-list-title" class="col-8">
                        <h4><?php echo page->title(); ?></h4>
                        <p><?php echo page->content() ?> </p>
                        <a href="<?php echo page->url(); ?>">Weiterlesen</a>
                    </div>
                    
                </div>
            
            </div>
          

           ' ;
        }
    
    ?>



</main>



<p class="strong lead">template: archive.php</p>