<div id="map" style="height:600px"></div>

<div class="post village">
    <div class="precontent">
        <div class="container">
    		<h1>Our Village</h1>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <p>Our movement reached out in 8 rural areas of 7 districts/cities in Banten</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    	<div class="row">
            <?php foreach($getAll as $row) { ?>
    		<div class="col-sm-6">
                <div class="begin-post">                        
                    <div class="row">
                        <div class="col-sm-4">
                            <?php if($row->picture_path) { ?>
                            <img src="<?php echo base_url() ?><?php echo $row->picture_path; ?>" alt="" class="img-responsive">
                            <?php } else { ?>
                            <img src="<?php echo base_url() ?>template/assets/image/placeholder.png" alt="" class="img-responsive">
                            <?php } ?>
                            </div>

                        <div class="col-sm-8">
                            <h3 class="title"><?php echo $row->nama; ?></h3>
                            <ul class="fa-ul">
                                <li style="text-transform: capitalize"><i class="fa fa-li fa-map-marker"></i> <span><?php echo $row->lokasi; ?></span></li>
                                <li><i class="fa fa-li fa-globe"></i> <span><u><?php echo $row->latitude; ?></u> &amp; <u><?php echo $row->longitude; ?></u></span></li>
                            </ul>
                            <a href="<?php echo base_url() ?>village/detail/<?php echo $row->slug; ?>" class="btn btn-primary btn-sm btn-raised">view detail</a>
                        </div>
                    </div>
                </div>
    		</div>
            <?php } ?>
    	</div>
    </div>
</div>




<!-- Modal -->
<?php include ('modal.php'); ?>



<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="http://kotahijau.dev/themes/kota-hijau/assets/vendor/googlemaps/markerclusterer_compiled.js"></script>
<script type="text/javascript">
function initialize() {
    var center = new google.maps.LatLng(-6.4444075, 105.9920291);
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 9,
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

    var dataMarker = [
        <?php foreach($getAll as $row) { ?>
    	{
            "name"      : "<?php echo $row->nama; ?>",
            "latitude"  : "<?php echo $row->latitude; ?>",
            "longitude" : "<?php echo $row->longitude; ?>",
        },
        <?php } ?>

    ];

    var clusterMarker = [];

    for (var i = 0; i < dataMarker.length; i++) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(dataMarker[i].latitude, dataMarker[i].longitude),
            map: map,
        });

        clusterMarker.push(marker);
 
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    map.setCenter(marker.getPosition());
                    $('#villageModal').modal('show');
                    $('#villageModal').find('h4').text(dataMarker[i].name);

                    if(dataMarker[i].alamat.length > 0) {   
                        $('#villageModal').find('.fa-ul').show();
                        $('#villageModal').find('.address').text(dataMarker[i].alamat);
                    } else {
                        $('#villageModal').find('.fa-ul').hide();
                    }

                    if(dataMarker[i].image.length > 0) {
                        $('#villageModal').find('.park-image').attr('src', dataMarker[i].image);
                    } else {
                        $('#villageModal').find('.park-image').attr('src', 'http://kotahijau.dev/themes/kota-hijau/assets/images/placeholder-kh.png');
                    }

                    $('#villageModal').find('.link').attr('href', '/explore/'+dataMarker[i].slug);
                    map.setZoom(8);
                    document.getElementById("title").innerHTML = dataMarker[i].Alamat;
                }
        })(marker, i));;
    }

    var option = [
        {
            textColor: 'white',
            url: 'path/to/smallclusterimage.png',
            height: 50,
            width: 50
        },
        {
            textColor: 'white',
            url: 'path/to/mediumclusterimage.png',
            height: 50,
            width: 50
        },
        {
            textColor: 'white',
            url: 'path/to/largeclusterimage.png',
            height: 50,
            width: 50
        }
    ];

    var markerCluster = new MarkerClusterer(map, clusterMarker, option);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>