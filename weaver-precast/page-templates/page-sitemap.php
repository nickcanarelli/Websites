<?php
/**
   Template Name:  Sitemap
 */
?>
<?php get_header(); ?>

    <section class="tier sitemap --lbbg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <ul class="sitemap pages">
                        <li>Pages</li>
                    <?php 
                    
                    $args = array(
                            'depth'        => 2,
                            'exclude'      => '65, 369',
                            'title_li'     => '',
                            'sort_column'  => 'menu_order, post_title',
                        );

                    wp_list_pages($args); ?>

                    </ul>
                    <hr>
                    <?php 
                    // the query
                    $all_posts_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                     
                    <?php if ( $all_posts_query->have_posts() ) : ?>
                     
                    <ul class="sitemap">
                        <li>Posts</li>
                     
                        <!-- the loop -->
                        <?php while ( $all_posts_query->have_posts() ) : $all_posts_query->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                     
                    </ul>
                     
                        <?php wp_reset_postdata(); ?>
                     
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                    <hr>
                    <?php 
                    // the query
                    $all_projects_query = new WP_Query(array('post_type'=>'project', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
                     
                    <?php if ( $all_projects_query->have_posts() ) : ?>
                     
                    <ul class="sitemap">
                        <li>Projects</li>
                     
                        <!-- the loop -->
                        <?php while ( $all_projects_query->have_posts() ) : $all_projects_query->the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                     
                    </ul>
                     
                        <?php wp_reset_postdata(); ?>
                     
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>