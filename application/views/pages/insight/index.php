<div class="hero hero-insight mg-b-20"style="background: url('http://unsplash.it/1280/500') no-repeat center center; background-size: cover !important; height: 400px">
	<div class="container">
		
		<div class="bottom-content">
			<div class="row">
				<div class="col-xs-6">
					<div class="h4 mg-0">Kamis</div>
				</div>

				<div class="col-xs-6 text-right">
					<div class="h4 mg-0">25 Januari 2016</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body pd-0">
					<div id="barchart" style="height: 300px"></div>
				</div>
			</div>
		</div>
		<!-- Full Ingsight -->
		<div class="col-sm-3">
			<div class="panel text-center">
				<div class="panel-body">					
					<h1 class="mg-t-10"><?php echo $countBlog; ?></h1>
					<p>Blog</p>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="panel text-center">
				<div class="panel-body">					
					<h1 class="mg-t-10"><?php echo $countEvent; ?></h1>
					<p>Event</p>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="panel text-center">
				<div class="panel-body">					
					<h1 class="mg-t-10"><?php echo $countRelawan; ?></h1>
					<p>Relawan</p>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="panel text-center">
				<div class="panel-body">					
					<h1 class="mg-t-10"><?php echo $countVillage; ?></h1>
					<p>Desa</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<!-- Donation -->
		<div class="col-sm-6">
			<div class="panel text-center">
				<div class="panel-body">
					<h1 class="moneyFormat mg-t-10"><?php 
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
			<div class="panel text-center">
				<div class="panel-body">
					<h1 class="moneyFormat mg-t-10"><?php foreach($countDonationTotal as $row) {
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
	</div>
</div>

<div id="map" style="height: 600px" class="mg-b-20"></div>


<style>
	.table-anu tr td {vertical-align: middle}
</style>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<table class="table table-striped table-anu">
				<thead>
					<tr>
						<th>
							Chapter
						</th>

						<th>
							Department
						</th>

						<th>
							Jumlah
						</th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>
							Kota Serang
						</td>

						<td style="width: 25%">
							<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
								IT &amp; Social Media
							</div>

							<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
								Child Development
							</div>

							<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
								Fundraising
							</div>

							<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
								Volunteer Resource Development
							</div>

							<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
								Isbanban Community
							</div>

							<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
								Public Relation
							</div>

							<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
								Isbanban Official
							</div>
						<td>
							
						</td>

						<td>
							<div class="pull-right">
								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
									<?php echo $getRelawanKotSerangL; ?>
								</div>

								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Perempuan">
									<?php echo $getRelawanKotSerangP; ?>
								</div>

								<div class="label label-primary" data-toggle="tooltip" data-placement="top" title="Total">
									<?php echo $getRelawanKotSerangT; ?>
								</div>
							</div>
						</td>
					</tr>

					<tr>
						<td>
							Kabupaten Serang 
							<div class="pull-right">
								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
									<?php echo $getRelawanKabSerangL; ?>
								</div>

								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Perempuan">
									<?php echo $getRelawanKabSerangP; ?>
								</div>

								<div class="label label-primary" data-toggle="tooltip" data-placement="top" title="Total">
									<?php echo $getRelawanKabSerangT; ?>
								</div>
							</div>
						</td>
					</tr>

					<tr>
						<td>
							Cilegon
							<div class="pull-right">
								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
									<?php echo $getRelawanCilegonL; ?>
								</div>

								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Perempuan">
									<?php echo $getRelawanCilegonP; ?>
								</div>

								<div class="label label-primary" data-toggle="tooltip" data-placement="top" title="Total">
									<?php echo $getRelawanCilegonT; ?>
								</div>
							</div>
						</td>
					</tr>

					<tr>
						<td>
							Pandeglang
							<div class="pull-right">
								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
									<?php echo $getRelawanPandeglangL; ?>
								</div>

								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Perempuan">
									<?php echo $getRelawanPandeglangP; ?>
								</div>

								<div class="label label-primary" data-toggle="tooltip" data-placement="top" title="Total">
									<?php echo $getRelawanPandeglangT; ?>
								</div>
							</div>
						</td>
					</tr>

					<tr>
						<td>
							Lebak
							<div class="pull-right">
								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
									<?php echo $getRelawanLebakL; ?>
								</div>

								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Perempuan">
									<?php echo $getRelawanLebakP; ?>
								</div>

								<div class="label label-primary" data-toggle="tooltip" data-placement="top" title="Total">
									<?php echo $getRelawanLebakT; ?>
								</div>
							</div>
						</td>
					</tr>

					<tr>
						<td>
							Kabupaten Tangerang
							<div class="pull-right">
								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
									<?php echo $getRelawanKabTangL; ?>
								</div>

								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Perempuan">
									<?php echo $getRelawanKabTangP; ?>
								</div>

								<div class="label label-primary" data-toggle="tooltip" data-placement="top" title="Total">
									<?php echo $getRelawanKabTangT; ?>
								</div>
							</div>
						</td>
					</tr>

					<tr>
						<td>
							Tangerang Selatan
							<div class="pull-right">
								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Laki-laki">
									<?php echo $getRelawanTangselL; ?>
								</div>

								<div class="label label-default" data-toggle="tooltip" data-placement="top" title="Perempuan">
									<?php echo $getRelawanTangselP; ?>
								</div>

								<div class="label label-primary" data-toggle="tooltip" data-placement="top" title="Total">
									<?php echo $getRelawanTangselT; ?>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel">
				<div class="panel-body pd-0">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Chapter</th>
								<th>Departemen</th>
								<th>Jumlah</th>
							</tr>
						</thead>

						<tbody>
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




<script src="<?php echo base_url() ?>template/assets/vendor/autoNumeric/autoNumeric.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJgV2HnjR7mqWBA5wp1ev6K2ItJ1g-PT8"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/google-maps/src/markerclusterer_compiled.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('[data-toggle=tooltip]').tooltip({
        container: 'body',
    });
})
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
            "slug"		: "<?php echo $row->slug; ?>",
        },
        <?php } ?>

    ];

    var infowindow 		= new google.maps.InfoWindow();
    var clusterMarker	= [];
    var contentArray	= [];

    for (var i = 0; i < dataMarker.length; i++) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(dataMarker[i].latitude, dataMarker[i].longitude),
            map: map,
        });

        var infoWindowContent =
        ['<div class="info_content">' +
        '<h4>' + dataMarker[i].name + '</h4>' +
        '<p><b>Latitude:</b> ' + dataMarker[i].latitude + '<br> <b>Longitude:</b> ' + ': ' + dataMarker[i].longitude +'</p>' + '<a target="_blank" href="<?php echo base_url() ?>village/detail/' + dataMarker[i].slug +'">Selengkapnya</a>' +
        '</div>'];

        clusterMarker.push(marker);
        contentArray.push(infoWindowContent);
 
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                	infowindow.setContent(contentArray[i][0]);
                	infowindow.open(map, marker);
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

function getDonationRecent() {
	$.ajax({
		url: '<?php echo base_url() ?>insight/donation/recent',
		type: 'get',
		dataType: 'json',
		success: function(data) {
			// console.log(data);
			var i = 0;
			for(i; i < 10; i++) {
				console.log(data[i].nama+" just request a donation "+data[i].donasi_banyak);
			}
		}
	})
}

function getDonationCash() {
	$.ajax({
		url: '<?php echo base_url() ?>insight/donation/cash',
		type: 'get',
		dataType: 'json',
		success: function(data) {
			// console.log(data.asu);

		}
	})
}

getDonationRecent();
</script>