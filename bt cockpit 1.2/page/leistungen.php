  <?php Theme::plugins('pageBegin'); ?>
  <!-- full page -->




  <!-- Seitenbild als Hintergrund -->
  <?php
    $coverImage = $page->coverImage() ? $page->coverImage() : Theme::src('img/default-cover.jpg');
    ?>

  <div class="page-header container-fluid"
      style="background: url('<?php echo $coverImage; ?>') center/cover no-repeat; max-width:100%; height: 240px; display: flex; align-items: center; justify-content: start;">
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






  <!-- Content -->
  <div class="col-sm-9 container py-5">
      <p class="text-secondary"><?php echo $page->content(); ?></p>
      <?php if (!empty($page->tags(true))): ?>
      <p class="pt-3">
          <?php foreach ($page->tags(true) as $tagKey=>$tagName): ?>
          <a href="<?php echo DOMAIN_TAGS.$tagKey ?>"><span
                  class="badge rounded-pill bg-warning text-dark"><?php echo $tagName; ?></span></a>
          <?php endforeach ?>
      </p>
      <?php endif; ?>
      <br>
      <?php Theme::plugins('pageEnd'); ?>
  </div>

  </div>
  </div>

  <!--/ full page -->

  <p class="strong lead">template: leistung.php</p>
  <!--/ full page -->