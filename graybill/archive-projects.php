<?php get_header(); ?>

<section id="interior-intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="body">
                    <?php echo get_field('project-archive__intro-content', 'option'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="project-portfolio">
    <div class="container">
        <?php 
            query_posts(array( 
                'post_type' => 'projects', 
                'posts_per_page' => -1,
            ) );
        ?>
        <div class="row project-list">
            <?php while (have_posts()) : the_post(); 
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
            ?>
            <div class="col">
                <a href="<?php the_permalink() ?>">
                    <div class="card">
                        <div class="img" style="background-image: url('<?= $featured_img_url; ?>');"></div>
                        <div class="body">
                            <span class="title"><?php the_title(); ?></span>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile;?>
        </div>
        
        <div class="load-more-cont">
            <a href="#" id="loadMore">Load More Projects</a>
        </div>
    </div>
</section>

<section id="home-discuss" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/cta/cta-banner.jpg');">
	<div class="container">
		<div class="body">
			<h2><?= get_field('project-archive__discuss-title', 'option'); ?></h2>
			<p><?= get_field('project-archive__discuss-content', 'option'); ?></p>
			<a href="<?= get_field('project-archive__discuss-btn-url', 'option'); ?>" class="btn btn-primary"><?= get_field('project-archive__discuss-btn-text', 'option'); ?></a>
		</div>
	</div>
</section>

<?php get_footer(); ?>

<script>
    $(document).ready(function(){
        $(".col").slice(0, 11).show();
        $("#loadMore").on("click", function(e){
            e.preventDefault();
            $(".col:hidden").slice(0, 5).slideDown();
            if($(".col:hidden").length == 0) {
            $("#loadMore").addClass("noContent");
            }
        });
    })
</script>