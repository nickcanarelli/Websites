<?php get_header(); ?>

<!--  Intro -->
<section id="interior-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="body">
                    <?= get_field('standard-designs__intro-content', 'option'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<!--  END Intro -->

<span class="accent-bdr"></span>

<!--  Design Benefits -->
<section id="designs-benefits">
    <div class="container">
        <h2><?= get_field('standard-designs__benefits-title', 'option'); ?></h2>

        <div class="benefits-container">
            <span class="l-v-bdr"></span>
            <?php if( have_rows('standard-designs__benefits-list', 'option') ): ?>
            <div class="row">
                <?php while( have_rows('standard-designs__benefits-list', 'option') ): the_row(); 
                    $image = get_sub_field('image');
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                ?>
                <div class="col">
                    <div class="body">
                        <img src="<?= $image; ?>" class="why-img"/>
                        <div class="card">
                            <h3><?= $title; ?></h3>
                            <p>
                                <?= $content; ?> 
                            </p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <span class="r-v-bdr"></span>
        </div>
    </div>
</section>
<!--  END Design Benefits -->

<!--  Standard Designs -->
<section id="standard-designs">
    <div class="designs-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/home/why-bg.jpg');"></div>
    <div class="container">
        <h2 class="section-title">Standard Designs</h2>

        <?php 
            query_posts(array( 
                'post_type' => 'standard_designs', 
                'orderby' => 'date',
                'order'   => 'ASC',
                'posts_per_page' => -1,
            ) );
        ?>
        <div class="row design-list">
            <?php while (have_posts()) : the_post(); 
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
            ?>
            <div class="col">
                <a href="<?php the_permalink() ?>">
                    <div class="card">
                        <div class="img" style="background-image: url('<?= $featured_img_url; ?>');"></div>
                        <div class="body">
                            <span class="title"><?php the_title(); ?></span>
                            <div class="excerpt">
                                <?= get_the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile;?>
        </div>

        <?php 
            
        ?>
        <?php 
            $args = array(
                'post_type' => 'standard_designs'
            );
            $the_query = new WP_Query( $args );
            if($the_query->found_posts > 8 ) { 
        ?>
        <div class="load-more-cont">
            <a href="#" id="loadMore">Load More Standard Designs</a>
        </div>
        <?php } ?>
    </div>
</section>
<!--  END Standard Designs -->

<!--  Discuss With Graybill -->
<section id="home-discuss" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/cta/cta-banner.jpg');">
	<div class="container">
		<div class="body">
			<h2><?= get_field('standard-designs__discuss-title', 'option'); ?></h2>
			<p><?= get_field('standard-designs__discuss-content', 'option'); ?></p>
			<a href="<?= get_field('standard-designs__discuss-btn-url', 'option'); ?>" class="btn btn-primary"><?= get_field('standard-designs__discuss-btn-text', 'option'); ?></a>
		</div>
	</div>
</section>
<!--  END Discuss With Graybill -->

<?php get_footer(); ?>

<!--  Load More Script Settings -->
<script>
    $(document).ready(function(){
        $(".col").slice(0, 12).show();
        $("#loadMore").on("click", function(e){
            e.preventDefault();
            $(".col:hidden").slice(0, 4).slideDown();
            if($(".col:hidden").length == 0) {
                $("#loadMore").addClass("noContent");
            }
        });
    })
</script>