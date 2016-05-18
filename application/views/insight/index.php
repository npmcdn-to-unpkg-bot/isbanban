<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> -->
	<title>Istana Belajar Anak Banten &mdash; Insight</title>

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#21e2fc">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#21e2fc">


	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/site/theme.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/vendor/jasny-bootstrap/dist/css/jasny-bootstrap.min.css">

	<script src="<?php echo base_url() ?>template/assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/vendor/bootstrap-material-design/dist/js/material.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/vendor/bootstrap-material-design/dist/js/ripples.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>template/assets/vendor/jasny-bootstrap/dist/js/jasny-bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/vendor/fastclick/lib/fastclick.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){	
// Bootstrap Material
		$.material.init();

// Fastclick Init
		if ('addEventListener' in document) {
		    document.addEventListener('DOMContentLoaded', function() {
		        FastClick.attach(document.body);
		    }, false);
		}

		var domain = 'http://isbanban.dev/';	
		if($("header").hasClass('navbar-inverse')) {
			$(".navbar-brand img").attr('src', domain +'template/assets/image/typetext-white.png')
		}
	})
	</script>
</head>
<body style="background: #fafafa">

<div class="container-fluid" style="margin-top:50px; margin-bottom: 50px">
	<div class="row">

<!-- Donation -->
		<div class="col-sm-6">
			<div class="panel panel-insight">
				<div class="panel-body">
					<h1 class="moneyFormat"><?php 
						foreach($countDonationTotalToday as $row) {
							if($row->jumlah_uang) {
								echo $row->jumlah_uang;
							} else {
								echo "0";
							}
						}
						?></h1>
					<p>Cash Donation Today</p>
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="panel panel-insight">
				<div class="panel-body">
					<h1 class="moneyFormat"><?php foreach($countDonationTotal as $row) {
						if($row->jumlah_uang) {
								echo $row->jumlah_uang;
							} else {
								echo "0";
							}
						} ?></h1>
					<p>Cash Donation Total</p>
				</div>
			</div>
		</div>


<!-- Map  -->
		<div class="col-sm-12">
			<div class="panel panel-insight">
				<div class="panel-body">					
					<div id="map" style="height: 600px"></div>
					<p style="margin-top:20px">Village Location</p>
				</div>
			</div>
		</div>

<!-- Full Ingsight -->
		<div class="col-sm-3">
			<div class="panel panel-insight">
				<div class="panel-body">					
					<h1><?php echo $countBlog; ?></h1>
					<p>Blog</p>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="panel panel-insight">
				<div class="panel-body">					
					<h1><?php echo $countEvent; ?></h1>
					<p>Event</p>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="panel panel-insight">
				<div class="panel-body">					
					<h1><?php echo $countRelawan; ?></h1>
					<p>Relawan</p>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="panel panel-insight">
				<div class="panel-body">					
					<h1><?php echo $countVillage; ?></h1>
					<p>Desa</p>
				</div>
			</div>
		</div>

<!-- Relawan -->
		<div class="col-sm-6">
			<div class="panel panel-insight">
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Chapter</th>
								<th>Laki-laki</th>
								<th>Perempuan</th>
								<th>Total</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>Kota Serang</td>
								<td><?php echo $getRelawanKotSerangL; ?></td>
								<td><?php echo $getRelawanKotSerangP; ?></td>
								<td><?php echo $getRelawanKotSerangT; ?></td>
							</tr>
							<tr>
								<td>Kabupaten Serang</td>
								<td><?php echo $getRelawanKabSerangL; ?></td>
								<td><?php echo $getRelawanKabSerangP; ?></td>
								<td><?php echo $getRelawanKabSerangT; ?></td>
							</tr>
							<tr>
								<td>Cilegon</td>
								<td><?php echo $getRelawanCilegonL; ?></td>
								<td><?php echo $getRelawanCilegonP; ?></td>
								<td><?php echo $getRelawanCilegonT; ?></td>
							</tr>
							<tr>
								<td>Pandeglang</td>
								<td><?php echo $getRelawanPandeglangL; ?></td>
								<td><?php echo $getRelawanPandeglangP; ?></td>
								<td><?php echo $getRelawanPandeglangT; ?></td>
							</tr>
							<tr>
								<td>Lebak</td>
								<td><?php echo $getRelawanLebakL; ?></td>
								<td><?php echo $getRelawanLebakP; ?></td>
								<td><?php echo $getRelawanLebakT; ?></td>
							</tr>
							<tr>
								<td>Kabupaten Tangerang</td>
								<td><?php echo $getRelawanKabTangL; ?></td>
								<td><?php echo $getRelawanKabTangP; ?></td>
								<td><?php echo $getRelawanKabTangT; ?></td>
							</tr>
							<tr>
								<td>Tangerang Selatan</td>
								<td><?php echo $getRelawanTangselL; ?></td>
								<td><?php echo $getRelawanTangselP; ?></td>
								<td><?php echo $getRelawanTangselT; ?></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="panel panel-insight">
				<div class="panel-body" style="height: 357px; overflow-y: scroll">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Chapter</th>
								<th>Departemen</th>
								<th>Jumlah</th>
							</tr>
						</thead>

						<tbody>
<!-- Kot Ser -->
							<tr>
								<td style="vertical-align:middle" rowspan="7">Kota Serang</td>
								<td>IT &amp; Sosial Media</td>
								<td><?php echo $countITKotSer; ?></td>
							</tr>
							<tr>
								<td>Child Development</td>
								<td><?php echo $countCDKotSer; ?></td>
							</tr>
							<tr>
								<td>Fundraising</td>
								<td><?php echo $countFNKotSer; ?></td>
							</tr>
							<tr>
								<td>Volunteer Resource Development</td>
								<td><?php echo $countVDKotSer; ?></td>
							</tr>
							<tr>
								<td>Isbanban Community</td>
								<td><?php echo $countICKotSer; ?></td>
							</tr>
							<tr>
								<td>Public Relation</td>
								<td><?php echo $countPRKotSer; ?></td>
							</tr>
							<tr>
								<td>Isbanban Official</td>
								<td><?php echo $countIOKotSer; ?></td>
							</tr>

<!-- Kab Ser -->
							<tr>
								<td style="vertical-align:middle" rowspan="7">Kabupaten Serang</td>
								<td>IT &amp; Sosial Media</td>
								<td><?php echo $countITKabSer; ?></td>
							</tr>
							<tr>
								<td>Child Development</td>
								<td><?php echo $countCDKabSer; ?></td>
							</tr>
							<tr>
								<td>Fundraising</td>
								<td><?php echo $countFNKabSer; ?></td>
							</tr>
							<tr>
								<td>Volunteer Resource Development</td>
								<td><?php echo $countVDKabSer; ?></td>
							</tr>
							<tr>
								<td>Isbanban Community</td>
								<td><?php echo $countICKabSer; ?></td>
							</tr>
							<tr>
								<td>Public Relation</td>
								<td><?php echo $countPRKabSer; ?></td>
							</tr>
							<tr>
								<td>Isbanban Official</td>
								<td><?php echo $countIOKabSer; ?></td>
							</tr>

<!-- Cilegon -->
							<tr>
								<td style="vertical-align:middle" rowspan="7">Cilegon</td>
								<td>IT &amp; Sosial Media</td>
								<td><?php echo $countITCilegon; ?></td>
							</tr>
							<tr>
								<td>Child Development</td>
								<td><?php echo $countCDCilegon; ?></td>
							</tr>
							<tr>
								<td>Fundraising</td>
								<td><?php echo $countFNCilegon; ?></td>
							</tr>
							<tr>
								<td>Volunteer Resource Development</td>
								<td><?php echo $countVDCilegon; ?></td>
							</tr>
							<tr>
								<td>Isbanban Community</td>
								<td><?php echo $countICCilegon; ?></td>
							</tr>
							<tr>
								<td>Public Relation</td>
								<td><?php echo $countPRCilegon; ?></td>
							</tr>
							<tr>
								<td>Isbanban Official</td>
								<td><?php echo $countIOCilegon; ?></td>
							</tr>

<!-- Lebak -->
							<tr>
								<td style="vertical-align:middle" rowspan="7">Lebak</td>
								<td>IT &amp; Sosial Media</td>
								<td><?php echo $countITLebak; ?></td>
							</tr>
							<tr>
								<td>Child Development</td>
								<td><?php echo $countCDLebak; ?></td>
							</tr>
							<tr>
								<td>Fundraising</td>
								<td><?php echo $countFNLebak; ?></td>
							</tr>
							<tr>
								<td>Volunteer Resource Development</td>
								<td><?php echo $countVDLebak; ?></td>
							</tr>
							<tr>
								<td>Isbanban Community</td>
								<td><?php echo $countICLebak; ?></td>
							</tr>
							<tr>
								<td>Public Relation</td>
								<td><?php echo $countPRLebak; ?></td>
							</tr>
							<tr>
								<td>Isbanban Official</td>
								<td><?php echo $countIOLebak; ?></td>
							</tr>

<!-- Pandeglang -->
							<tr>
								<td style="vertical-align:middle" rowspan="7">Pandeglang</td>
								<td>IT &amp; Sosial Media</td>
								<td><?php echo $countITPandeglang; ?></td>
							</tr>
							<tr>
								<td>Child Development</td>
								<td><?php echo $countCDPandeglang; ?></td>
							</tr>
							<tr>
								<td>Fundraising</td>
								<td><?php echo $countFNPandeglang; ?></td>
							</tr>
							<tr>
								<td>Volunteer Resource Development</td>
								<td><?php echo $countVDPandeglang; ?></td>
							</tr>
							<tr>
								<td>Isbanban Community</td>
								<td><?php echo $countICPandeglang; ?></td>
							</tr>
							<tr>
								<td>Public Relation</td>
								<td><?php echo $countPRPandeglang; ?></td>
							</tr>
							<tr>
								<td>Isbanban Official</td>
								<td><?php echo $countIOPandeglang; ?></td>
							</tr>

<!-- Kabupaten Tangerang -->
						<tr>
							<td style="vertical-align:middle" rowspan="7">Kabupaten Tangerang</td>
							<td>IT &amp; Sosial Media</td>
							<td><?php echo $countITKabTang; ?></td>
						</tr>
						<tr>
							<td>Child Development</td>
							<td><?php echo $countCDKabTang; ?></td>
						</tr>
						<tr>
							<td>Fundraising</td>
							<td><?php echo $countFNKabTang; ?></td>
						</tr>
						<tr>
							<td>Volunteer Resource Development</td>
							<td><?php echo $countVDKabTang; ?></td>
						</tr>
						<tr>
							<td>Isbanban Community</td>
							<td><?php echo $countICKabTang; ?></td>
						</tr>
						<tr>
							<td>Public Relation</td>
							<td><?php echo $countPRKabTang; ?></td>
						</tr>
						<tr>
							<td>Isbanban Official</td>
							<td><?php echo $countIOKabTang; ?></td>
						</tr>
						</tbody>

<!-- Tangerang Selatan -->
						<tr>
							<td style="vertical-align:middle" rowspan="7">Tangerang Selatan</td>
							<td>IT &amp; Sosial Media</td>
							<td><?php echo $countITTangsel; ?></td>
						</tr>
						<tr>
							<td>Child Development</td>
							<td><?php echo $countCDTangsel; ?></td>
						</tr>
						<tr>
							<td>Fundraising</td>
							<td><?php echo $countFNTangsel; ?></td>
						</tr>
						<tr>
							<td>Volunteer Resource Development</td>
							<td><?php echo $countVDTangsel; ?></td>
						</tr>
						<tr>
							<td>Isbanban Community</td>
							<td><?php echo $countICTangsel; ?></td>
						</tr>
						<tr>
							<td>Public Relation</td>
							<td><?php echo $countPRTangsel; ?></td>
						</tr>
						<tr>
							<td>Isbanban Official</td>
							<td><?php echo $countIOTangsel; ?></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>




<style>
table tr td {
	text-align: left;
}
</style>
<script src="<?php echo base_url() ?>template/assets/vendor/autoNumeric/autoNumeric.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJgV2HnjR7mqWBA5wp1ev6K2ItJ1g-PT8"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/google-maps/src/markerclusterer_compiled.js"></script>
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
        <?php foreach($getLocationMap as $row) { ?>
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


$(".moneyFormat").autoNumeric('init',{
    aSep: '.',
    dGroup: '3',
    aDec: " ",
    aPad: false
});
</script>