<?php
    $h_hero_heading = get_field('wpre_home_hero_heading');
    $h_hero_sub = get_field('wpre_home_hero_subheading');
    $h_hero_vid = get_field('wpre_home_hero_video');
    $h_hero_vid_thumb = get_field('wpre_home_hero_video_thumb');
    $h_hero_vid_cap = get_field('wpre_home_hero_video_caption');
?>

<section class="hero">
    <div class="hero-bg b-lazy" data-src="<?php the_post_thumbnail_url('hero-lg') ?>" style="background-size: cover;background-position: center;"></div>
    <div class="container">
        <div class="hero-content">
            <div class="text-content">
                <h1><?php echo $h_hero_heading; ?></h1>
                <p class="quote"><?php echo $h_hero_sub; ?></p>
            </div>
            <?php if($h_hero_vid): ?>
            <div class="media-item">
                <div class="media-thumb">
                    <img src="<?php echo $h_hero_vid_thumb['sizes']['card-thumb']; ?>" alt="<?php echo $h_hero_vid_thumb['alt']; ?>" class="img-fluid">
                    <img src="/wp-content/themes/yboot/assets/img/icons/play.svg" class="play-button">
                    <a data-fancybox href="<?php echo $h_hero_vid.'&amp;autoplay=1&amp;rel=0'; ?>" class="block"></a>
                </div>
                <?php if($h_hero_vid_cap): ?>
                <div class="caption">
                    <span><?php echo $h_hero_vid_cap; ?></span>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="hero-scroll"><span>Scroll Down</span></div>
</section>