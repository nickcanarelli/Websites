<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yscores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'yscores' ); ?></a>

	<section id="head-bar">
		<div class="container">
			<div class="body">
				<?php wp_nav_menu( array(
					'menu'    			=> 'Header Bar Menu',
					'depth'             => 1,
					'container'         => '',
					'container_class'   => '',
					'container_id'      => ''
					)
				); ?>
			</div>
		</div>
	</section>

	<header id="masthead" class="site-header">
		<div class="main-nav">
			<div class="container">
				<div class="main-nav__row">
					<div class="main-nav__left">
						<a href="/">
							<img src="<?php echo get_field('def-graybill__logo', 'option' ) ?>" class="logo">
						</a>
					</div>
					<div class="main-nav__right">
						<div class="main-nav__desktop">
               				<?php wp_nav_menu( array(
	                            'menu'    			=> 'Main Menu',
	                            'depth'             => 2,
	                            'container'         => 'nav',
	                            'container_class'   => 'main__nav',
	                            'container_id'      => 'my-menu'
	                            )
	                        ); ?>
						</div>
						<div class="main-nav__mobile main-nav-mobile">
							<div class="main-nav-mobile__cell">
								<a href="tel:">
									<svg width="20" height="31" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M23.166 2.99h-12.01c-.863 0-1.566.703-1.566 1.567v1.567h15.143V4.557c0-.864-.703-1.567-1.567-1.567zM9.59 25.338h15.143V7.794H9.59v17.544zm0 1.67v1.567c0 .864.703 1.567 1.567 1.567h12.009c.864 0 1.567-.703 1.567-1.567v-1.567H9.59zM26.403 4.557v24.018a3.24 3.24 0 0 1-3.237 3.237h-12.01a3.24 3.24 0 0 1-3.236-3.237V4.557a3.24 3.24 0 0 1 3.237-3.237h12.009a3.24 3.24 0 0 1 3.237 3.237zM17.16 29.41a.836.836 0 0 0 0-1.67.836.836 0 0 0 0 1.67zm2.036-24.853c0 .46-.374.835-.835.835h-2.401a.836.836 0 0 1 0-1.67h2.401c.46 0 .835.374.835.835z" id="a"></path></defs><g transform="translate(-7 -1)" fill="none" fill-rule="evenodd"><mask id="b" fill="#fff"><use xlink:href="#a"></use></mask><use fill="#000" xlink:href="#a"></use><g mask="url(#b)" fill="#000"><path d="M0 0h33v33H0z"></path></g></g></svg>
									<label>Call</label>
								</a>
							</div>
							<div class="main-nav-mobile__cell">
								<a class="hamburger">
									<div class="hamburger__wrap">
										<span></span>
										<span></span>
										<span></span>
									</div>
									<label>Menu</label>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


	</header>
	
	<?php if (is_front_page()) { ?>
		<!-- Home Hero -->
		<section id="home-hero" class="hero" style="background-image: url('<?= get_field('home-hero__bg-img', 'option'); ?>');">
			<div class="container">
				<div class="page-head">
					<div class="body">
						<span class="l-vo-bdr"></span>
						<span class="l-vi-bdr"></span>
						<h1><?= get_field('home-hero__title-one', 'option'); ?><br /><?= get_field('home-hero__title-two', 'option'); ?></h1>
						<p><?= get_field('home-hero__title-content', 'option'); ?></p>
						<span class="b-hi-bdr"></span>
						<span class="b-ho-bdr"></span>
					</div>
				</div>
			</div>
		</section>
		<!-- END Home Hero -->
		<!-- Home Page Head [Mobile Only] -->
		<section id="page-head-mobile">
			<div class="body">
				<h1><?= get_field('home-hero__title-one', 'option'); ?><br /><?= get_field('home-hero__title-two', 'option'); ?></h1>
				<p><?= get_field('home-hero__title-content', 'option'); ?></p>
			</div>
		</section>
		<!-- END Home Page Head [Mobile Only] -->
	<?php } elseif (is_404()) { ?>
		<!-- See 404.php template -->
	<?php } elseif ( is_post_type_archive( 'projects' ) ) { ?>
		<!-- Projects Archive Page Hero -->
		<section id="interior-hero" style="background-image: url('<?= get_field('project-archive__hero-img', 'option'); ?>');">
			<div class="container">
				<div class="page-head">
					<div class="body">
						<span class="l-vo-bdr"></span>
						<span class="l-vi-bdr"></span>
						<h1><?= get_field('project-archive__title-one', 'option'); ?><br /> <?= get_field('project-archive__title-two', 'option'); ?></h1>
						<span class="b-hi-bdr"></span>
						<span class="b-ho-bdr"></span>
					</div>
				</div>
			</div>
		</section>
		<!-- END Projects Archive Page Hero -->
		<!-- Projects Archive Page Head [Mobile Only] -->
		<section id="interior-page-head-mobile">
			<div class="body">
				<h1><?= get_field('project-archive__title-one', 'option'); ?><br /> <?= get_field('project-archive__title-two', 'option'); ?></h1>
			</div>
		</section>
		<!-- END Projects Archive Page Head [Mobile Only] -->
	<?php } elseif ( is_post_type_archive( 'standard_designs' ) ) { ?>
		<!-- Standard Designs Archive Page Hero -->
		<section id="interior-hero" style="background-image: url('<?= get_field('standard-designs__hero-img', 'option'); ?>');">
			<div class="container">
				<div class="page-head">
					<div class="body">
						<span class="l-vo-bdr"></span>
						<span class="l-vi-bdr"></span>
						<h1><?= get_field('standard-designs__title-one', 'option'); ?><br /> <?= get_field('standard-designs__title-two', 'option'); ?></h1>
						<span class="b-hi-bdr"></span>
						<span class="b-ho-bdr"></span>
					</div>
				</div>
			</div>
		</section>
		<!-- END Standard Designs Archive Page Hero -->
		<!-- Standard Designs Archive Page Head [Mobile Only] -->
		<section id="interior-page-head-mobile">
			<div class="body">
				<h1><?= get_field('standard-designs__title-one', 'option'); ?><br /> <?= get_field('standard-designs__title-two', 'option'); ?></h1>
			</div>
		</section>
		<!-- END Standard Designs Archive Page Head [Mobile Only] -->
	<?php } elseif ( is_singular( array( 'projects', 'standard_designs' ) ) ) { ?>
		<!-- Projects Single Page Hero -->
		<section id="projects-hero" style="background-image: url('<?= get_field('interior-hero__image'); ?>);"></section>
		<!-- END Projects Single Page Hero -->
	<?php } elseif (is_single()) { ?>
		<!-- Single Page Hero -->
		<section id="interior-hero" style="background-image: url('<?= get_field('interior-hero__image'); ?>');">
			<div class="container">
				<div class="page-head">
					<div class="body">
						<span class="l-vo-bdr"></span>
						<span class="l-vi-bdr"></span>
						<h1><?= get_field('interior-page__title-one'); ?> <br /> <?= get_field('interior-page__title-two'); ?> </h1>
						<span class="b-hi-bdr"></span>
						<span class="b-ho-bdr"></span>
					</div>
				</div>
			</div>
		</section>
		<!-- END Single Page Hero -->
		<!-- Single Page Head [Mobile Only] -->
		<section id="interior-page-head-mobile">
			<div class="body">
				<h1><?= get_field('interior-page__title-one'); ?> <br /> <?= get_field('interior-page__title-two'); ?> </h1>
			</div>
		</section>
		<!-- END Single Page Head [Mobile Only] -->

		<div id="content" class="site-content">
			<div class="container">
	<?php } else { ?>
		<!-- If :not Single this Displays -->
		<section id="interior-hero" style="background-image: url('<?= get_field('interior-hero__image'); ?>');">
			<div class="container">
				<div class="page-head">
					<div class="body">
						<span class="l-vo-bdr"></span>
						<span class="l-vi-bdr"></span>
						<h1><?= get_field('interior-page__title-one'); ?> <br /> <?= get_field('interior-page__title-two'); ?> </h1>
						<span class="b-hi-bdr"></span>
						<span class="b-ho-bdr"></span>
					</div>
				</div>
			</div>
		</section>
		<!-- END If :not Single this Displays -->
		<!-- If :not Single this Page Head [Mobile Only] Displays -->
		<section id="interior-page-head-mobile">
			<div class="body">
				<h1><?= get_field('interior-page__title-one'); ?> <br /> <?= get_field('interior-page__title-two'); ?> </h1>
			</div>
		</section>
		<!-- END If :not Single this Page Head [Mobile Only] Displays -->
	<?php } ?>
	
