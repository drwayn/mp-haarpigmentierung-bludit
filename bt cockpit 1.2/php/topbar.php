<!-- Begin Nav
================================================== -->


<!---------Navigation---->


<header class="header_slim shadow-2">
  <div class="container">
    <div class="header__body">
	<!-- Begin Logo -->
      <a href="" class="header__logo" href="<?php echo $site->url(); ?>">
	   <img class="logo logo-md logo-lg logo-xxl" src="<?php echo Theme::src('img/logo-1.png'); ?>" alt="logo">
      </a>
	<!-- End Logo -->
      <div class="header__burger">
        <span></span>
      </div>
      <nav class="header__menu">

		<!-- Begin Menu -->

		
		<ul class="header__list">
			<!-----Static pages statt Dynamisch
			<li class=" <?php echo (($url->whereAmI()=='home')?'active':'') ?>">
				<a class="header__link" href="<?php echo $site->url(); ?>">Blog</a>
			</li>

			
			<?php foreach ($staticContent as $staticPage): ?>
			<li class=" <?php echo (($url->slug()==$staticPage->slug())?'active':'') ?>">
				<a class="header__link" href="<?php echo $staticPage->permalink(); ?>"><?php echo $staticPage->title(); ?></a>
			</li>
			<?php endforeach ?>
			-->

			<!-- Dynamisches Menu NavX -->
			<?php getNavx() ;?>

			<!---Blog einfügen------>
			<li class=" <?php echo (($url->whereAmI()=='home')?'active':'') ?>">
				<a class="header__link" href="<?php echo $site->url(); ?>">Blog</a>
			</li>

			<!-----CTA Button------>
			<a href="#"><button class="btn-primary btn btn-sm">Termin buchen</button></a>
		


		</ul>
		<!-- End Menu -->
      </nav>
    </div>
  </div>
</header>


<!-- End Nav
================================================== -->

