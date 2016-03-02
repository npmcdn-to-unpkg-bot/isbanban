<div id="map" style="height:600px"></div>



<div class="post village">
	<div class="container">
		<h2>Our Village</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<div class="row">
			<div class="col-sm-6">
				<div class="title">Test</div>
			</div>
		</div>
	</div>
</div>






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
    	{
            "name"      : "Taman Expresi",
            "latitude"  : "-6.59214",
            "longitude" : "106.8017",
        }
    ];

    var clusterMarker = [];

    for (var i = 0; i < dataMarker.length; i++) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(dataMarker[i].latitude, dataMarker[i].longitude),
            map: map,
            icon: dataMarker[i].icon
        });

        clusterMarker.push(marker);
 
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    map.setCenter(marker.getPosition());
                    $('#myModal').modal('show');
                    $('#myModal').find('h4').text(dataMarker[i].name);

                    if(dataMarker[i].alamat.length > 0) {   
                        $('#myModal').find('.fa-ul').show();
                        $('#myModal').find('.address').text(dataMarker[i].alamat);
                    } else {
                        $('#myModal').find('.fa-ul').hide();
                    }

                    if(dataMarker[i].image.length > 0) {
                        $('#myModal').find('.park-image').attr('src', dataMarker[i].image);
                    } else {
                        $('#myModal').find('.park-image').attr('src', 'http://kotahijau.dev/themes/kota-hijau/assets/images/placeholder-kh.png');
                    }

                    $('#myModal').find('.link').attr('href', '/explore/'+dataMarker[i].slug);
                    // map.setZoom(8);
                    // document.getElementById("title").innerHTML = dataMarker[i].Alamat;
                }
        })(marker, i));;

        // google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
        //         return function() {
        //             marker.setAnimation(google.maps.Animation.BOUNCE);
        //         }
        // })(marker, i));;

        // google.maps.event.addListener(marker, 'mouseout', (function(marker, i) {
        //         return function() {
        //             marker.setAnimation(null);
        //         }
        // })(marker, i));;


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