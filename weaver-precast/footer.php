</div>

<?php if(!get_field('hide_trust_symbols') && !is_404() && !is_search() && !is_post_type_archive('careers') && !is_singular('careers')) : 
	get_template_part('partials/trust-symbols');
endif;
?>

<?php if(!is_post_type_archive('careers') && !is_singular('careers')): ?>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <a href="" class="logo">
              <img class="img-fluid" src="/wp-content/uploads/2018/05/weaver-precast-logo-new.png" alt="Logo" />
        </a>
        <h4>Corporate Office</h4>
        <address>
          <a href="https://www.google.com/maps/place/Superior+Walls+by+Weaver/@40.1682426,-76.163716,17z/data=!3m1!4b1!4m5!3m4!1s0x89c614349cc9b6b1:0x7d00ee65c78292e8!8m2!3d40.1682426!4d-76.1615273?shorturl=1" target="_blank">824 East Main Street<br>Ephrata, PA 17522</a>
        </address>
        <div class="phone">
          <span>Phone</span><a href="tel:7177334823">717.733.4823</a>
        </div>
        <a href="/service-area/" class="button --secondary">Find a Representative</a>
      </div>
      <div class="col-lg-2 col-sm-6">
        <?php wp_nav_menu( array(
            'menu'    => 'Footer Column 1',
            'depth'             => 1
        )
        ); ?>
      </div>
      <div class="col-lg-2 col-sm-6">
        <?php wp_nav_menu( array(
            'menu'    => 'Footer Column 2',
            'depth'             => 1
        )
        ); ?>
      </div>
      <div class="col-lg-2 col-sm-6">
        <?php wp_nav_menu( array(
            'menu'    => 'Footer Column 3',
            'depth'             => 1
        )
        ); ?>
      </div>
    <div class="col-lg-2 col-sm-6">
    <?php wp_nav_menu( array(
            'menu'    => 'Footer Column 4',
            'depth'             => 1
        )
        ); ?>
    </div>
    <div class="col-lg-9 offset-lg-3 enews">
        <h4>Email Newsletter</h4>
      <?php echo do_shortcode('[gravityform id=6 title=false description=false ajax=true]'); ?>
    </div>
    </div>
  </div>
  <div class="copyright">
    <div class="container">
      <div class="text-center">&copy; <?php echo date("Y"); ?> <a href="/" class="no-style">Weaver Precast, Inc.</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="/privacy-policy/" class="no-style">Privacy Policy</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="/sitemap/" class="no-style">Sitemap</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="/search/" class="no-style">Search</a></div>
    </div>
  </div>
</footer>

<?php else: ?>

<footer class="no-border">
    <div class="container">
      <div class="row">
      	<div class="col-lg-3 col-sm-6">
      		<a href="" class="logo">
                <img class="img-fluid" src="/wp-content/uploads/2018/05/weaver-precast-logo-new.png" alt="Logo" />
      		</a>
			<h4>Corporate Office</h4>
      		<address>
      			<a href="https://www.google.com/maps/place/Superior+Walls+by+Weaver/@40.1682426,-76.163716,17z/data=!3m1!4b1!4m5!3m4!1s0x89c614349cc9b6b1:0x7d00ee65c78292e8!8m2!3d40.1682426!4d-76.1615273?shorturl=1" target="_blank">824 East Main Street<br>Ephrata, PA 17522</a>
      		</address>
      		<div class="phone">
      			<span>Phone</span><a href="tel:7177334823">717.733.4823</a>
      		</div>
      		<a href="/service-area/" class="button --secondary">Find a Representative</a>
      	</div>
      	<div class="col-lg-2 col-sm-6">
      		<?php wp_nav_menu( array(
      		    'menu'    => 'Footer Column 1',
      		    'depth'             => 1
      		)
      		); ?>
      	</div>
      	<div class="col-lg-2 col-sm-6">
      		<?php wp_nav_menu( array(
      		    'menu'    => 'Footer Column 2',
      		    'depth'             => 1
      		)
      		); ?>
      	</div>
      	<div class="col-lg-2 col-sm-6">
      		<?php wp_nav_menu( array(
      		    'menu'    => 'Footer Column 3',
      		    'depth'             => 1
      		)
      		); ?>
      	</div>
		  <div class="col-lg-2 col-sm-6">
		  <?php wp_nav_menu( array(
      		    'menu'    => 'Footer Column 4',
      		    'depth'             => 1
      		)
      		); ?>
      	</div>
		<div class="col-lg-9 offset-lg-3 enews">
				<h4>Email Newsletter</h4>
			<?php echo do_shortcode('[gravityform id=6 title=false description=false ajax=true]'); ?>
		</div>
      </div>
    </div>
    <div class="copyright">
    	<div class="container">
    		<div class="text-center">&copy; <?php echo date("Y"); ?> <a href="/" class="no-style">Weaver Precast, Inc.</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="/privacy-policy/" class="no-style">Privacy Policy</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="/sitemap/" class="no-style">Sitemap</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="/search/" class="no-style">Search</a></div>
    	</div>
    </div>
</footer>

<?php endif; ?>

<?php wp_footer(); ?>

</div>



</body>
</html>