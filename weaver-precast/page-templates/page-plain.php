<?php
/**
   Template Name:  Plain
 */
?>
<?php get_header(); ?>
    <style>
        .hero-content {
            display: none;
        }
        .tier>.container {
            padding-top: 0;
            padding-bottom: 0;
        }
        .gform_wrapper ul.gfield_radio li {
            float: left;
            margin-right: 15px;
        }
        .gform_wrapper ul.gfield_radio li label {
            position: relative;
            top: 2px;
        }
        .gform_wrapper .top_label li ul.gfield_radio:before,
        .gform_wrapper .top_label li ul.gfield_radio:after {
            content: '';
            display: block;
            clear: both;
        }
        .tier.trust-symbols {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
    <section class="tier full-width --lbbg">
        <main class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="col-9 center-block">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </main>
    </section>

<?php get_footer(); ?>