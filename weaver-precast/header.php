<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title>
        <?php
        global $page, $paged;
        wp_title( '|', true, 'right' );
        ?>
        </title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="referrer" content="unsafe-url">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png">
        <link rel="manifest" href="/favicons/manifest.json">
        <link rel="shortcut icon" href="/favicons/favicon.ico">
        <meta name="msapplication-config" content="/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <?php if(get_field('localdata', 'options')) {
            the_field('localdata', 'options');
        }; ?>

        <?php wp_head(); ?>

        <?php if(get_field('gtm_part_1', 'options')) {
            the_field('gtm_part_1', 'options');
        }; ?>

        <?php/*
        <script type='text/javascript'>
        //Bugherd
        (function (d, t) {
          var bh = d.createElement(t), s = d.getElementsByTagName(t)[0];
          bh.type = 'text/javascript';
          bh.src = 'https://www.bugherd.com/sidebarv2.js?apikey=vzwrfkjafquovqvjpypl9g';
          s.parentNode.insertBefore(bh, s);
          })(document, 'script');
        </script>
        */?>
		
<!-- Sharpspring Visitor ID -->
<script type="text/javascript">
    var _ss = _ss || [];
    _ss.push(['_setDomain', 'https://koi-3QNHP9VX4U.marketingautomation.services/net']);
    _ss.push(['_setAccount', 'KOI-42S988Y0QW']);
    _ss.push(['_trackPageView']);
(function() {
    var ss = document.createElement('script');
    ss.type = 'text/javascript'; ss.async = true;
    ss.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'koi-3QNHP9VX4U.marketingautomation.services/client/ss.js?ver=1.1.1';
    var scr = document.getElementsByTagName('script')[0];
    scr.parentNode.insertBefore(ss, scr);
})();
</script>
<!-- End Sharpspring -->
		
		<!-- Sharpspring Form Tracking -->
<!-- <script type="text/javascript">
    var __ss_noform = __ss_noform || [];
    __ss_noform.push(['baseURI', 'https://app-3QNHP9VX4U.marketingautomation.services/webforms/receivePostback/MzawMDE3NjGxBAA/']);
    __ss_noform.push(['endpoint', '3b2ea44d-337a-4631-ae02-3cd03cbbdd91']);
</script>
<script type="text/javascript" src="https://koi-3QNHP9VX4U.marketingautomation.services/client/noform.js?ver=1.24" ></script>
		
		<script type="text/javascript">
    var __ss_noform = __ss_noform || [];
    __ss_noform.push(['baseURI', 'https://app-3QNHP9VX4U.marketingautomation.services/webforms/receivePostback/MzawMDE3NjGxBAA/']);
    __ss_noform.push(['endpoint', '84581b20-64b6-4501-9935-f1fd4105e9d1']);
</script>
<script type="text/javascript" src="https://koi-3QNHP9VX4U.marketingautomation.services/client/noform.js?ver=1.24" ></script> -->

<!-- End Sharpspring -->

		
    </head>
    <body <?php body_class(); ?>>
        <?php if(get_field('gtm_part_2', 'options')) {
            the_field('gtm_part_2', 'options');
        }; ?>
        <div id="canvas" class="">
        <header>                
            <div class="branding-header">
                <div class="container">
                    <a class="logo" href="/">
                        <img class="img-fluid" src="/wp-content/uploads/2018/05/weaver-precast-logo-new.png" alt="Weaver Precast logo" />
                    </a>
                    <div class="navs">
                        <nav class="menu primary-menu">
                                <?php wp_nav_menu( array(
                                    'menu'    => 'Primary Menu',
                                    'depth'             => 2
                                )
                                ); ?>
                        </nav>      
                        <nav class="menu upper-menu">
                            <?php wp_nav_menu( array(
                                    'menu'    => 'Upper Menu',
                                    'depth'             => 1
                                )
                                ); ?>
                        </nav>
                    </div>
                    <nav id="mobile-nav">
                        <?php wp_nav_menu( array(
                            'menu'    => 'Mobile Menu',
                            'depth'             => 3
                        )
                        ); ?>
                    </nav>
                    <div class="mobile-nav-toggles">
                        <div class="phone-container">
                            <a href="tel:<?php the_field('phone_number','options'); ?>" class="mobile-phone-toggle">
                                <span class="icon-phone"></span>
                            </a>
                            <span class="call-text">Call</span>
                        </div>
                        
                        <div class="hamburger-container">
                            <button href="#offcanvas-menu" class="brgr brgr--collapse" type="button">
                                <span class="brgr-box"><span class="brgr-inner"></span></span>
                            </button>
                            <span class="menu-text">Menu</span>
                        </div>
                        
                    </div>           
                </div>
            </div>
        </header>

        <?php if(is_front_page()):
            get_template_part('partials/home-hero');
        elseif(is_search()):
            get_template_part('partials/search-hero');
        elseif(is_post_type_archive('careers')): ?>
            
            <section class="hero <?php if( !get_field('wpre_feat_media_bg_image') ): echo '--no-media-element --lbgrad-rev'; else: echo '--lbbg'; endif; ?>" style="background-image: url('<?php echo get_field('careers-archive__head-bg', 'option'); ?>'); background-size: cover; background-position: center;">
                <div class="container">
                    <div class="hero-content">
                        <div class="text-content careers-archive__head">
                            <h1 class="--center has-line">Careers</h1>
                            <p class="careers-head-p">Help Us Make a Difference, One Foundation at a Time</p>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif(is_singular('careers')): ?>
            <section class="hero <?php if( !get_field('wpre_feat_media_bg_image') ): echo '--no-media-element --lbgrad-rev'; else: echo '--lbbg'; endif; ?> careers-post__head">
                <div class="container">
                    <div class="hero-content">
                        <div class="text-content">
                            <h1 class="--center has-line"><?php the_title(); ?></h1>
                            <p><?php echo get_field('weaver-careers__location'); ?></p>
                        </div>
                    </div>
                </div>
            </section>
        <?php else: ?>

        <section class="hero <?php if( !get_field('wpre_feat_media_bg_image') ): echo '--no-media-element --lbgrad-rev'; else: echo '--lbbg'; endif; ?>">
            <?php if( get_field('wpre_hero_style') == 'bg_image' ): ?>
                <div class="hero-bg b-lazy" data-src="<?php if( get_field('wpre_feat_media_bg_image') ): the_post_thumbnail_url('hero-lg'); else: the_post_thumbnail_url('hero-sm'); endif; ?>" style="background-size: cover;background-position: center;"></div>
            <?php endif; ?>
            <div class="container">
                <?php if ( function_exists('yoast_breadcrumb') && get_field('wpre_breadcrumbs')) { ?><div id="breadcrumbs"><?php yoast_breadcrumb(); ?></div><?php } ?>
                <div class="hero-content">
                    <div class="text-content">
                        <?php if(is_home()): ?>
                        <h1 class="--center has-line">Company News & Events</h1>
                        
                        <?php elseif(get_post_type( get_the_ID() ) == 'project' && !is_category()): ?>
                        <h1 class="--center has-line">Projects</h1>

                        <?php elseif( get_post_type( get_the_ID() ) == 'careers' ): ?>
                        <h1 class="--center has-line">Careers</h1>

                        <?php elseif(is_category()): ?>
                        <h1 class="--center has-line">Category: <?php single_cat_title(); ?></h1>
                        <?php elseif(is_page(854) ): ?>
                        <!-- <div class="circle --green-border">
                            <i class="icon-checkmark"></i>
                        </div> -->
                        <div class="circle-container">
                            <img src="/wp-content/uploads/2018/06/Group@2x.png" alt="" class="img-fluid">
                        </div>
                        <h1>Success!</h1>
                        <div class="sub--text">
                            <h4>Thanks for subscribing to our newsletter. Perhaps you want to take a look at our company news and events.</h4>
                            <a href="/news-events">View News & Events</a>
                        </div>
                        <?php else: ?>
                        <h1 class="--center has-line"><?php $region_icon = get_field('wpre_region_icon'); if( $region_icon ): ?><?php echo wp_get_attachment_image( $region_icon['ID'], "medium", "", ["class" => "img-fluid region-icon"] ); ?><?php endif; ?><?php if(get_field('wpre_custom_page_title')): the_field('wpre_custom_page_title'); elseif(is_404()): echo '<img src="/wp-content/themes/yboot/assets/img/shrug.svg" class="img-fluid shrug"> Page Not Found'; else: the_title(); endif; ?></h1>
                        <?php if(get_field('wpre_custom_page_subtitle')): ?><p class="subheading"><?php the_field('wpre_custom_page_subtitle'); ?></p><?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <?php 
                if(is_single()): get_template_part('partials/featured-media-element-single');
                elseif(!is_home() || !is_archive() || !is_category()): get_template_part('partials/featured-media-element');
                endif;
                ?>

            </div>
        </section>

        <?php endif; ?>

        <div class="page-sections <?php if( get_field('wpre_hero_style') == 'simple' || is_archive() || is_home() || is_404()): echo '--first-ntp'; endif; ?>">