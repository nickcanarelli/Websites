<?php
/**
 * Template Name: Page: Home
 *
 * @package Jobify
 * @since Jobify 1.0
 */

get_header(); ?>

    <div id="primary" role="main">
        
        <section id="jobify_widget_feature_callout-2" class="widget widget--home widget--home--no-margin jobify_widget_feature_callout widget--home-feature-callout">            
            <div class="feature-callout text-center image-cover">                
                <div class="feature-callout-cover feature-callout-cover--overlay-full">
                    <div class="video" style="position:absolute;width:100%;left:50%;margin-left:-50%;height:100%;">
                        <!-- <video class="videoplay" style="max-width:inherit;" autoplay poster="<?php echo get_stylesheet_directory_uri(); ?>/html5video/shyft-main-video.jpg" title="Shyft Video" loop onended="var v=this;setTimeout(function(){v.play()},300)">
                            <source src="<?php echo get_stylesheet_directory_uri(); ?>/html5video/shyft-main-video.m4v" type="video/mp4" />
                            <source src="<?php echo get_stylesheet_directory_uri(); ?>/html5video/shyft-main-video.webm" type="video/webm" />
                            <source src="<?php echo get_stylesheet_directory_uri(); ?>/html5video/shyft-main-video.ogv" type="video/ogg" />
                            <source src="<?php echo get_stylesheet_directory_uri(); ?>/html5video/shyft-main-video.mp4" />
                        </video> -->
						<img class="home-banner" src="/wp-content/uploads/2019/02/bigstock-Smiling-mature-man-with-laptop-250593652_color.jpg" />
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 ">
                                <div class="callout-feature-content callout-feature-content--height-medium">
                                    <span class="title"><?php the_field('video_section_main_title'); ?></span>
                                    <span class="subtitle"><?php the_field('video_section_subtitle'); ?></span>
                                    <!-- <h2 class="callout-feature-title" style="color:#ffffff;"><?php the_field('video_section_main_title'); ?></h2>
                                    <p style="color:#ffffff;"><?php the_field('video_section_subtitle'); ?></p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php if ( jobify()->get( 'woocommerce' ) ) : ?>
            <?php wc_print_notices(); ?>
        <?php endif; ?>

        <?php
            if ( ! dynamic_sidebar( 'widget-area-front-page' ) ) :
                the_widget( 
                    'Jobify_Widget_Map', 
                    array( 'filters' => 1 ), 
                    array(
                        'before_widget' => '<section class="widget widget--home jobify_widget_map">',
                        'after_widget'  => '</section>',
                        'before_title'  => '<h3 class="widget-title widget-title--hom">',
                        'after_title'   => '</h3>'
                    )
                );

                the_widget( 
                    'Jobify_Widget_Jobs', 
                    array( 'title' => 'Recent Jobs', 'filters' => 0, 'number' => 5, 'spotlight' => 1, 'spotlight-title' => 'Job Spotlight' ), 
                    array(
                        'before_widget' => '<section class="widget widget--home jobify_widget_jobs">',
                        'after_widget'  => '</section>',
                        'before_title'  => '<h3 class="widget-title widget-title--home">',
                        'after_title'   => '</h3>'
                    )
                );
            endif;
        ?>

    </div><!-- #primary -->

<?php get_footer(); ?>
