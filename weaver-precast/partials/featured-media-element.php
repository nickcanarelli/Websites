<?php
    $media_bg = get_field('wpre_feat_media_bg_image');
    $media_content = get_field('wpre_feat_media_content');
    $media_content_auth = get_field('wpre_feat_media_quote_auth');
    $media_embed = get_field('wpre_feat_media_video_url');
    $media_action = get_field('wpre_feat_media_action_button');
?>

<?php if( $media_bg ) : ?>

    <div class="feature-well <?php if( $media_embed ) : echo '--video'; endif; ?>">
        <div class="feature-well-bg b-lazy" data-src="<?php echo $media_bg['sizes']['hero-lg']; ?>" style="background-position: center;background-size: cover;">
        </div>
        <div class="feature-well--content">
            <div class="quote">
                <?php echo $media_content; ?>
                <?php if( $media_embed ): ?><div class="quote-button"><a data-fancybox href="<?php echo $media_embed.'&amp;autoplay=1&amp;rel=0'; ?>" class="button --hollow"><?php if( $media_action ): echo $media_action; else: ?>Watch to Learn More<?php endif; ?></a></div><?php endif; ?>
            </div>
            <?php if($media_content_auth) : ?>
            <div class="quote-author">
                <span><?php echo $media_content_auth; ?></span>
            </div>
            <?php endif; ?>
        </div>
        <?php if( $media_embed ): ?><a class="media-button"><img src="/wp-content/themes/yboot/assets/img/icons/play.svg" class="play-button"></a><a class="block" data-fancybox href="<?php echo $media_embed.'&amp;autoplay=1&amp;rel=0'; ?>"></a><?php endif; ?>
    </div>

<?php endif; ?>