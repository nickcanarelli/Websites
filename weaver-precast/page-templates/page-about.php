<?php
/**
   Template Name:  About
 */
?>
<?php get_header(); ?>

    <?php if( have_rows('wpre_about_one') ): while( have_rows('wpre_about_one') ): the_row(); ?>
    <section class="tier local-experts --lbgrad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <?php the_sub_field('content_left'); ?>
                </div>
                <div class="col-lg-6">
                    <?php the_sub_field('content_right'); ?>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile; endif; ?>
    <?php if( have_rows('wpre_about_data') ): while( have_rows('wpre_about_data') ): the_row(); ?>
    <section class="tier numbers">
        <div class="container --ntp">
            <div class="text-center"><h3 class="alt"><em>By The Numbers</em></h3></div>
            <?php if( have_rows('data_points') ): ?>
            <div class="facts">
                <?php while( have_rows('data_points') ): the_row(); ?>
                <div class="fact">
                    <span class="data-point">
                        <?php the_sub_field('data_point'); ?>
                    </span>
                    <span class="data-description">
                        <?php the_sub_field('data_point_description'); ?>
                    </span>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endwhile; endif; ?>
    <?php if( have_rows('wpre_about_timeline') ): while( have_rows('wpre_about_timeline') ): the_row(); ?>
    <section class="tier who-we-are">
        <div class="container --ntp">
            <div class="text-center"><h2 class="has-line --center">Who We Are</h2></div>
            <?php if( have_rows('timeline') ): ?>
            <div class="timeline">
                <?php while( have_rows('timeline') ): the_row(); ?>
                <div class="event">
                    <div class="event-inner">
                    <?php the_sub_field('timeline_event'); ?>
                    </div>
                </div>
                <?php endwhile; ?>
                <div class="event-leaders">
                    <span class="event-leader"></span>
                    <span class="event-leader"></span>
                    <span class="event-leader"></span>
                    <span class="event-leader"></span>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endwhile; endif; ?>
    <?php if( have_rows('wpre_about_staff') ): while( have_rows('wpre_about_staff') ): the_row(); ?>

    <section class="tier staff">
        <div class="container --ntp">
            <div class="text-center"><h2 class="has-line --center">Our Staff</h2></div>
            <?php if( have_rows('staff') ): ?>

            <div class="row staff-members justify-content-center">

                <?php while( have_rows('staff') ): the_row(); 
                    $img = get_sub_field('avatar');
                    $size = 'post-thumbnail';
                    $name = get_sub_field('name');
                    $title = get_sub_field('title');
                ?>

                <div class="col-sm-6 col-lg-3 staff-member">
                    <?php echo wp_get_attachment_image( $img, $size, "", ["class" => "img-fluid"] ); ?>
                    <span class="staff-name"><?php echo $name; ?></span>
                    <span class="staff-title"><?php echo $title; ?></span>
                </div>

                <?php endwhile; ?>

            </div>
            <?php endif; ?>

        </div>
    </section>
    <?php endwhile; endif; ?>
    <?php if( have_rows('wpre_about_better') ): while( have_rows('wpre_about_better') ): the_row(); ?>

    <section class="tier better">
        <div class="container">
            <div class="text-center"><h3 class="alt"><em>We are compelled to make people’s lives better by:</em></h3></div>
            <?php if( have_rows('compelling_reasons') ): ?>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row reasons justify-content-center">
                    <?php while( have_rows('compelling_reasons') ): the_row(); ?> 

                        <div class="col-md-6 reason">
                            <img src="/wp-content/themes/yboot/assets/img/icons/circle-check.svg" class="img-fluid">
                            <p><?php the_sub_field('reason'); ?></p>
                        </div>

                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endwhile; endif; ?>
    <?php if( have_rows('wpre_community_activities_about') ): ?> 
    <section class="tier community-activities --lbbg">
        <div class="container">
            <div class="text-center"><h2 class="has-line --center">Community Activities</h2></div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <p>Supporting our local community is important to us. Here are a few organizations that we support.</p>
                </div>
            </div>
            <div class="row justify-content-center activities">
                <?php while( have_rows('wpre_community_activities_about') ): the_row(); ?>
                <div class="col-lg-6">
                    <div class="feature --shadow-well text-left">
                        <?php the_sub_field('community_activity_about'); ?>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <?php get_template_part('partials/trust-symbols'); ?>
    <?php get_template_part('partials/ask-question'); ?>

<?php get_footer(); ?>