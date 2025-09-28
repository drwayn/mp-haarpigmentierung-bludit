<?php Theme::plugins('pageBegin'); ?>
    <!-- full page -->
    
    

    <div class="container pb-5">
        <div class="row">

            <div class="col-md-12">
                <?php if ($page->coverImage()): ?>
                <img src="<?php echo $page->coverImage(); ?>" class="img-fluid rounded" alt="<?php echo $page->title(); ?>">
                <small><span class="text-secondary"><?php echo $page->custom('figure'); ?></span></small>
                <?php endif ?>
                <h1 class="fw-bold text-primary pt-1 pb-1 text-center"><?php echo $page->title(); ?></h1>
                <small><span>Author: <img src="<?php echo ($page->user('profilePicture')?$page->user('profilePicture'):Theme::src('img/noimage.png')) ?>" alt="mdo" width="45" height="45" class="rounded-circle">&nbsp; <?php echo $page->user('nickname'); ?></span><span>Veröffentlicht am: </i>&nbsp; <?php echo $page->date(); ?></span><span>Kategorie: </i>&nbsp; <?php echo $page->category() ?></span></small>
            </div>

            
            <div class="col-sm-3 py-5 mx-auto">
                
                <?php include(THEME_DIR_PHP.'sidebar.php'); ?>

            </div>
            
            <div class="col-sm-9 py-5 mx-auto">
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
            
        </div>
    </div>

    <p class="strong lead">template: single.php</p>
    <!--/ full page -->