<?php
/**
 * Template Name: Projects Page
 */

get_header();
?>

	<main id="primary" class="site-main">
        
<!--        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRv4vuq_JLndAafOVc12UmEZaWQEQ5GdI&callback=Function.prototype"></script>-->
        <script type="text/javascript">
        (function( $ ) {

        /**
         * initMap
         *
         * Renders a Google Map onto the selected jQuery element
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @return  object The map instance.
         */
        function initMap( $el ) {

            // Find marker elements within map.
            var $markers = $el.find('.marker');

            // Create gerenic map.
            var mapArgs = {
                zoom        : $el.data('zoom') || 16,
                mapTypeId   : google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map( $el[0], mapArgs );

            // Add markers.
            map.markers = [];
            $markers.each(function(){
                initMarker( $(this), map );
            });

            // Center map based on markers.
            centerMap( map );

            // Return map instance.
            return map;
        }

        /**
         * initMarker
         *
         * Creates a marker for the given jQuery element and map.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @param   object The map instance.
         * @return  object The marker instance.
         */
        function initMarker( $marker, map ) {

            // Get position from marker.
            var lat = $marker.data('lat');
            var lng = $marker.data('lng');
            var latLng = {
                lat: parseFloat( lat ),
                lng: parseFloat( lng )
            };

            // Create marker instance.
            var marker = new google.maps.Marker({
                position : latLng,
                map: map
            });

            // Append to reference for later use.
            map.markers.push( marker );

            // If marker contains HTML, add it to an infoWindow.
            if( $marker.html() ){

                // Create info window.
                var infowindow = new google.maps.InfoWindow({
                    content: $marker.html()
                });

                // Show info window when marker is clicked.
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open( map, marker );
                });
            }
        }

        /**
         * centerMap
         *
         * Centers the map showing all markers in view.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   object The map instance.
         * @return  void
         */
        function centerMap( map ) {

            // Create map boundaries from all map markers.
            var bounds = new google.maps.LatLngBounds();
            map.markers.forEach(function( marker ){
                bounds.extend({
                    lat: marker.position.lat(),
                    lng: marker.position.lng()
                });
            });

            // Case: Single marker.
            if( map.markers.length == 1 ){
                map.setCenter( bounds.getCenter() );

            // Case: Multiple markers.
            } else{
                map.fitBounds( bounds );
            }
        }

        // Render maps on page load.
        $(document).ready(function(){
            $('.acf-map').each(function(){
                var map = initMap( $(this) );
            });
        });

        })(jQuery);
        </script>
        
        <?php $frontpage_id = get_option( 'page_on_front' ); ?>

        <div class="hero">
            <?php if( get_field('hero_image') ): ?>
                <img class="hero-image" src='<?php the_field('hero_image'); ?>'>
            <?php endif; ?>
            <div class="hero-content">
                <?php if( get_field('hero_heading') ): ?>
                    <h2 class="hero-heading"><?php the_field('hero_heading'); ?></h2>
                <?php endif;
                if( get_field('hero_text') ): ?>
                    <p class="hero-text"><?php the_field('hero_text'); ?></p>
                <?php endif;
                if( get_field('hero_cta') ): ?>
                    <a class="hero-cta" src=""><?php the_field('hero_cta'); ?></a>
                <?php endif; ?>
            </div>
        </div>
        <div class="cta">
            <div class="form">
            <?php get_template_part( 'template-parts/content', 'home' ); ?>
            </div>
            <div class="map">
                <?php $map = get_field('map', $frontpage_id);
                    if( $map ): ?>

                    <div class="acf-map">
                        <div class="marker" data-lat="<?php echo $map['lat']; ?>" data-lng="<?php echo $map['lng']; ?>"></div>
                    </div>

                    <?php endif; ?>
            </div>
        </div>
		  
	</main><!-- #main -->

<?php get_footer(); ?>