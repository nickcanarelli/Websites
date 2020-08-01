<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package Jobify
 * @since Jobify 1.0
 */
?>

		</div><!-- #main -->

		<?php if ( get_theme_mod( 'cta-display', true ) ) : ?>
		<?php endif; ?>
        

			<a id="Contact-Us"></a>
            <div class="contact">
                <div class="container">
                    <div class="row">
                        <h2>Contact Us</h2>
						<h3>We'd love to hear from you.</h3>
                    </div>
					<div class="row">
						<div class="col-xs-12 col-md-8" style="margin:0 auto; float:none;">
							<?php echo do_shortcode( '[ninja_form id=1]' ); ?>
						</div>
					</div>
                </div>
            </div>
   

		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php if ( is_active_sidebar( 'widget-area-footer' ) ) : ?>
			<div class="footer-widgets">
				<div class="container">
					<div class="row">
						<?php for ( $i = 1; $i <= 4; $i++ ) : ?> 
						<div class="col-xs-12 col-lg-3">
							<?php dynamic_sidebar( 'widget-area-footer' . ( $i > 1 ? ( '-' . absint( $i ) ) : '' ) ); ?>
						</div>
						<?php endfor; ?>
					</div>
				</div>
			</div>
			<?php endif; ?>

			<div class="copyright">
				<div class="container">
					<div class="site-info">
						<?php echo apply_filters( 'jobify_footer_copyright', get_theme_mod( 'copyright', sprintf( '&copy; %1$s %2$s &mdash; All Rights Reserved', date( 'Y' ), get_bloginfo( 'name' ) ) ) ); ?>
					</div><!-- .site-info -->

					<?php
						if ( has_nav_menu( 'footer-social' ) ) :
							$social = wp_nav_menu( array(
								'theme_location'  => 'footer-social',
								'container_class' => 'footer-social',
								'items_wrap'      => '%3$s',
								'depth'           => 1,
								'echo'            => false,
								'link_before'     => '<span class="screen-reader-text">',
								'link_after'      => '</span>',
							) );

							echo strip_tags( $social, '<a><div><span>' );
						endif;
					?>

					<a href="#top" class="scroll-top btt <?php if ( ! has_nav_menu( 'footer-social' ) ) : ?>btt--no-social<?php endif; ?>"><span class="screen-reader-text"><?php _e( 'Back to Top', 'jobify' ); ?></span>top</a>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<div id="ajax-response"></div>

	<?php wp_footer(); ?>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'b6bd68ac7f3ec84b32ba8fe3d511900d7c24b816';
window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>

</body>
</html>
