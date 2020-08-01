<?php
/**
   Template Name:  Contact
 */
?>
<?php get_header(); ?>

    <section class="tier contact --lbbg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <p>Weaver Precast manufactures and installs more Superior Walls products than any company in the Northeastern United States. We are a trusted partner for home builders, architects, and commercial real estate developers who want a quality product they can rely on to perform as stated, and that is backed by our knowledgeable customer support team.</p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-5">
                    <div class="ask-question">
                        <h3>Contact Us</h3>
                        <div class="form-wrapper">
                            <?php echo do_shortcode('[gravityforms id=7 title=false ajax=true]'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h3>Location &amp; Directions</h3>
					<p class="company-name"><a href="/" class="no-style"><?php the_field('company_name','options'); ?></a></p>
                    <div class="row">
                        <div class="col-sm-4 custom-margin">
                            <p><strong>Phone</strong><br><a href="tel:<?php echo str_replace('-', '', the_field('phone_number','options')); ?>" class="no-style"><?php the_field('phone_number','options'); ?></a></p>
                            <p><strong>Fax</strong><br>717-733-0386</p>
                        </div>
                        <div class="col-sm-6 custom-margin">
                            <p><strong>Address</strong><br><a href="<?php the_field('google_maps_directions_link','options'); ?>" class="no-style" target="_blank"><?php the_field('address','options'); ?></a></p>
                        </div>
                        <div class="col-sm-4">
                            <p class="company-name small-address"><a href="/service-area/new-york/">New York</a> &amp; <a href="/service-area/connecticut/">Connecticut</a></p>                        
                            <p><strong>Address</strong><br><a href="https://www.google.com/maps/place/68+Violet+Ave,+Poughkeepsie,+NY+12601/@41.719959,-73.9125893,17z/data=!3m1!4b1!4m5!3m4!1s0x89dd3e218eabf25f:0xf4761a426587a1f!8m2!3d41.719959!4d-73.9104006" target="_blank" class="no-style">68 Violet Ave., Poughkeepsie, NY 12601</a></p>
                        </div>
                        <div class="col-sm-4">
                            <p class="company-name small-address"><a href="/service-area/new-york/">Long Island</a> &amp; <a href="/service-area/rhode-island/">Rhode Island</a></p>                                            
                            <p><strong>Address</strong><br><a href="https://www.google.com/maps/place/7+Tradesmans+Path,+Bridgehampton,+NY+11932/@40.9396477,-72.3146947,17z/data=!3m1!4b1!4m5!3m4!1s0x89e8bde19ae6d299:0x58efa737ddb00508!8m2!3d40.9396477!4d-72.312506" target="_blank" class="no-style">7 Tradesmans Path, Suite 10, Bridgehampton, NY 11932</a></p>
                        </div>
                        <div class="col-sm-4">
                            <p class="company-name small-address shorter"><a href="/service-area/massachusetts/">MA</a>, <a href="/service-area/vermont/">VT</a>, <a href="/service-area/new-hampshire/">NH</a>, &amp; <a href="/service-area/maine/">ME</a></p>                                            
                            <p><strong>Address</strong><br>
								Brookfield Rd., Charlton, MA</p>
                        </div>
                    </div>
                    <div id="map" class="embed-responsive embed-responsive-16by9"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="builder-partners">
        <div class="container">
            <div class="text-center"><h3 class="alt">Trusted Builder Partners</h3></div>
            <?php 
            $rows = get_field('wpre_partners', 'options');
                if($rows): 
                    $i = 0;?>
            <div class="partner-grid">
                <div class="partner-slider">
                <?php shuffle( $rows );
                foreach($rows as $row):
                    $i++; if($i==13) break;
                $partner_logo = $row['wpre_partner_logo'];

                ?>
                    <div class="slide">
                        <a href="/construction-professionals/"><img src="<?php echo $partner_logo['sizes']['medium']; ?>" alt="<?php echo $partner_logo['alt']; ?>" class="img-fluid"></a>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>

<script>


function initMap() {
  var ephrata = {
        info: '<div id="content" class="location__card">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<div id="bodyContent" class="text-center">'+
          '<strong>'+
          'Main Address'+
          '</strong>'+
          '<p>' +
          '824 E. Main St. Ephrata, PA 17522'+
          '</p>' +
          '<p>' +
          '</p>'+
          '<p>' +
          '</p>'+
          '</div>'+
          '</div>',
        lat: 40.168243,
        long: -76.161527
    };

    var poughkeepsie = {
        info: '<div id="content" class="location__card">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<div id="bodyContent" class="text-center">'+
          '<strong>' +
          'Poughkeepsie'+
          '</strong>' +
          '<p>' +
          '68 Violet Ave, Poughkeepsie, NY 12601'+
          '</p>' +
          '<p>' +
          '</p>'+
          '</div>'+
          '</div>',
        lat: 41.719959,
        long: -73.910401
    };

    var bridgehampton = {
        info: '<div id="content" class="location__card">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<div id="bodyContent" class="text-center">'+
          '<strong>' +
          'Bridgehampton'+
          '</strong>' +
          '<p>' +
          '7 Tradesman Path Suite 10, Bridgehampton, NY 11932'+
          '</p>' +
          '<p>' +
          '</p>'+
          '</div>'+
          '</div>',
        lat: 40.939648,
        long: -72.312506
    };

    var brookfield = {
        info: '<div id="content" class="location__card">'+
          '<div id="siteNotice">'+
          '</div>'+
          '<div id="bodyContent" class="text-center">'+
          '<strong>' +
          'Brookfield' +
          '</strong>' +
          '<p>' +
          'Brookfield Rd, Charlton, MA 01507'+
          '</p>' +
          '<p>' +
          '</p>'+
          '</div>'+
          '</div>',
        lat: 42.160880,
        long: -72.007093
    };

    var locations = [
      [ephrata.info, ephrata.lat, ephrata.long, 0],
      [poughkeepsie.info, poughkeepsie.lat, poughkeepsie.long, 1],
      [bridgehampton.info, bridgehampton.lat, bridgehampton.long, 2],
      [brookfield.info, brookfield.lat, brookfield.long, 3]
    ];

  var uluru = {lat: 40.3381586, lng: -76.4561319};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 6,
    center: uluru
  });

  var infowindow = new google.maps.InfoWindow({});

  var marker, i;

  for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
          position: new google.maps.LatLng(locations[i][1], locations[i][2], locations[i][3]),
          map: map,
          title: 'Weaver Precast',
          icon: '/wp-content/themes/yboot/assets/img/icons/location.svg'
      });

      google.maps.event.addListener(marker, 'click', (function (marker, i) {
          return function () {
              infowindow.setContent(locations[i][0]);
              infowindow.open(map, marker);
          }
      })(marker, i));
  }
}
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8h3xUrjBMjMrUA2bT8tN958VWDbsxP8k&callback=initMap">
</script>
<?php get_footer(); ?>