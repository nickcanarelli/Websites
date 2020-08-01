<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PPN2848');</script>
	<!-- End Google Tag Manager —>

	<!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s)
		{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};
		if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
		n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];
		s.parentNode.insertBefore(t,s)}(window,document,'script',
		'https://connect.facebook.net/en_US/fbevents.js');
		 fbq('init', '722682168093906'); 
		fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=722682168093906&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->

    

	<?php wp_head(); ?>
	
	<script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://use.typekit.net/vto5uvg.css">
	
</head>

<body <?php body_class(); ?>>

	<!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PPN2848" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) -->

	<div id="page" class="hfeed site">

		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="site-branding">
					<?php $header_image = get_header_image(); ?>
					<h1 class="site-title">
						<?php if ( ! empty( $header_image ) ) : ?>
							<img src="<?php echo $header_image ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="Logo" />
						<?php endif; ?>

						<span><?php bloginfo( 'name' ); ?></span>
					</h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</a>

				<nav id="site-navigation" class="site-primary-navigation">
					<a href="#site-navigation" class="js-primary-menu-toggle primary-menu-toggle primary-menu-toggle--close"><?php _e( 'Close', 'jobify' ); ?></a>

					<?php
						// output searchform-header.php
						add_filter( 'get_search_form', array( jobify()->template->header, 'search_form' ) );
						get_search_form();
						remove_filter( 'get_search_form', array( jobify()->template->header, 'search_form' ) );

						// output primary menu location
						wp_nav_menu( array( 
							'theme_location' => 'primary', 
							'menu_class' => 'nav-menu nav-menu--primary' ,
							'container_class' => 'nav-menu nav-menu--primary' 
						) ); 
					?>
				</nav>

				<a href="#site-navigation" class="js-primary-menu-toggle primary-menu-toggle primary-menu-toggle--open"><span class="screen-reader-text"><?php _e( 'Menu', 'jobify' ); ?></span></a>
			</div>
		</header><!-- #masthead -->

		<div id="main" class="site-main">
