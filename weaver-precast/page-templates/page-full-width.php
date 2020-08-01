<?php
/**
   Template Name:  Full-Width
 */
?>
<?php get_header(); ?>

    <section class="tier full-width --lbbg">
        <main class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="col">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </main>
    </section>

<?php get_footer(); ?>