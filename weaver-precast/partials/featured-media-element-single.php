<?php 
if( has_post_thumbnail() ) : ?>

    <div class="feature-well">
        <div class="feature-well-bg b-lazy" data-src="<?php the_post_thumbnail_url('hero-lg'); ?>" style="background-size: cover;background-position: center;">
        </div>
    </div>

<?php else: ?>
<?php endif; ?>