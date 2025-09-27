<?php include('header.php'); ?>

<main class="container mt-4">
    <h1><?php echo $page->title(); ?></h1>
    <div class="content">
        <?php echo $page->content(); ?>
    </div>
    <p class="text-muted">Dies ist ein benutzerdefiniertes Template.</p>
</main>

<?php include('footer.php'); ?>