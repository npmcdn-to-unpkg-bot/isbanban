<div id="map" style="height:600px"></div>


<?php foreach($getThis as $row) { ?>
<div class="single-post village">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="meta">					
					<h1 class="title"><?php echo $row->nama; ?></h1>

					<div class="postdate">
						Posted: <?php echo $this->barnlibs->dateForHumanClean($row->created_at) ?>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-sm-offset-1">
				<div class="post">

					<div class="thumbnails">
						<img src="http://placemi.com/1280x400" alt="" class="img-responsive">	
					</div>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="http://kotahijau.dev/themes/kota-hijau/assets/vendor/googlemaps/markerclusterer_compiled.js"></script>
<script type="text/javascript">
function initialize() {

	<?php foreach($getThis as $row) { ?>
    var center = new google.maps.LatLng('<?php echo $row->latitude; ?>', '<?php echo $row->longitude; ?>');
    <?php } ?>

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: center,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoomControl: true,
        zoomControlOptions: {
            position: google.maps.ControlPosition.LEFT_BOTTOM
        },
        mapTypeControl: false,
        streetViewControl: false,
        scaleControl: false,
        scrollwheel: false,
        styles: [
            {
                "featureType":"landscape",
                "stylers":[
                    {
                        "hue":"#FFA800"
                    },
                    {
                        "saturation":0
                    },
                    {
                        "lightness":0
                    },
                    {
                        "gamma":1
                    }
                ]
            },
            {
                "featureType":"road.highway",
                "stylers":[
                    {
                        "hue":"#53FF00"
                    },
                    {
                        "saturation":-73
                    },
                    {
                        "lightness":40
                    },
                    {
                        "gamma":1
                    }
                ]
            },
            {
                "featureType":"road.arterial",
                "stylers":[
                    {
                        "hue":"#FBFF00"
                    },
                    {
                        "saturation":0
                    },
                    {   
                        "lightness":0
                    },
                    {
                        "gamma":1
                    }
                ]
            },
            {
                "featureType":"road.local",
                "stylers":[
                    {
                        "hue":"#00FFFD"
                    },
                    {
                        "saturation":0
                    },
                    {
                        "lightness":30
                    },
                    {
                        "gamma":1
                    }
                ]
            },
            {
                "featureType":"water",
                "stylers":[
                    {
                        "hue":"#00BFFF"
                    },
                    {
                        "saturation":6
                    },
                    {
                        "lightness":8
                    },
                    {
                        "gamma":1
                    }
                ]
            },
            {
                "featureType":"poi",
                "stylers":[
                    {
                        "hue":"#679714"
                    },
                    {
                        "saturation":33.4
                    },
                    {
                        "lightness":-25.4
                    },
                    {
                        "gamma":1
                    }
                ]
            }
        ]
    });

    var marker = new google.maps.Marker({
	    position: center,
	    map: map,
	    title: 'Hello World!'
	  });

    marker.setAnimation(google.maps.Animation.BOUNCE);

}

google.maps.event.addDomListener(window, 'load', initialize);
</script>