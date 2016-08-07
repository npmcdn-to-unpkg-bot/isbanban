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
                        <?php if($row->picture_path) { ?>
                        <img src="<?php echo base_url() ?><?php echo $row->picture_path; ?>" alt="" class="img-responsive img-center">
                        <?php } else { ?>  
						<img src="<?php echo base_url() ?>template/assets/image/placeholder.png" alt="" class="img-responsive img-center">
                        <?php } ?>
					</div>

					<?php echo $row->detail; ?>
				</div>

<!-- Shareholic -->
                <div class='shareaholic-canvas' data-app='share_buttons' data-app-id='24303855' expr:data-title='data:post.title' expr:data-link='data:post.url'></div>


<!-- Disquss Comment -->
                <hr>
                <div id="disqus_thread"></div>
                <script>
                var disqus_config = function () {
                this.page.url = 'http://isbanban.org';
                //this.page.identifier = PAGE_IDENTIFIER;
                };
                
                (function() { 
                var d = document, s = d.createElement('script');

                s.src = '//isbanban.disqus.com/embed.js';

                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
                </script>
                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJgV2HnjR7mqWBA5wp1ev6K2ItJ1g-PT8"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/google-maps/src/markerclusterer_compiled.js"></script>
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