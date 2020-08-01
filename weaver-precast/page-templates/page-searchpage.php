<?php
/**
   Template Name:  Search Page
 */
?>
<?php get_header(); ?>

    <section class="tier searchpage --lbbg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 searchform-wrapper">
                    <?php get_template_part('searchform'); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>