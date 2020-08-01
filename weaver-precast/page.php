<?php get_header(); ?>

    <section class="tier default --lbbg">
        <main class="container">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <?php the_content(); ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </main>
    </section>

<?php get_footer(); ?>