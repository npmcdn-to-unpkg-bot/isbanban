<div class="hero hero-insight mg-b-20"style="background: url('<?php echo base_url() ?>template/assets/image/bg-insight.jpg') no-repeat center center;">
    <div class="container">
        <div class="content-bottom">
            <div class="h1">Istana Belajar Anak Banten</div>
            <p class="lead">Summary Report (Today: <em><?php echo date('d-m-Y'); ?></em>)</p>
            <p class="lead"><i class="fa fa-chevron-down"></i></p>
        </div>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel-heading">
				<div class="panel-title">
					Donation Graph <?php echo date('Y'); ?>
				</div>
			</div>
            
			<div class="panel panel-default">
				<div class="panel-body pd-0">
					<canvas id="chart" style="height: 300px"></canvas>
				</div>
			</div>
		</div>

		<!-- Full Ingsight -->
		<div class="col-sm-3">
			<div class="panel text-center panel-insight">
				<div class="panel-body">					
					<h1 class="mg-t-10"><?php echo $countBlog; ?></h1>
					<p>Blog</p>
					<i class="fa fa-pencil"></i>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="panel text-center panel-insight">
				<div class="panel-body">					
					<h1 class="mg-t-10"><?php echo $countEvent; ?></h1>
					<p>Event</p>
					<i class="fa fa-calendar-o"></i>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="panel text-center panel-insight">
				<div class="panel-body">					
					<h1 class="mg-t-10"><?php echo $countRelawan; ?></h1>
					<p>Relawan</p>
					<i class="fa fa-users"></i>
				</div>
			</div>
		</div>

		<div class="col-sm-3">
			<div class="panel text-center panel-insight">
				<div class="panel-body">					
					<h1 class="mg-t-10"><?php echo $countVillage; ?></h1>
					<p>Desa</p>
					<i class="fa fa-university"></i>
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
				<div class="panel-body panel-donation-today">
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="panel text-center">
				<div class="panel-body panel-donation-overall">
				</div>
			</div>
		</div>
	</div>
</div>

<div id="map" style="height: 600px" class="mg-b-20"></div>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="h4 mg-0 mg-b-10">Volunteer Breakdown</div>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>
							Chapter
						</th>

						<th class="text-right">
							Jumlah
						</th>
					</tr>
				</thead>

				<tbody class="contentVolunteer">
				</tbody>
			</table>
		</div>
	</div>
</div>

<script src="<?php echo base_url() ?>template/assets/vendor/autoNumeric/autoNumeric.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJgV2HnjR7mqWBA5wp1ev6K2ItJ1g-PT8"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/google-maps/src/markerclusterer_compiled.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.1/Chart.bundle.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	load();
});

function load() {
	getVolunteer();
	getDonation();
	getToday();
    summaryDonation();
    google.maps.event.addDomListener(window, 'load', initialize);
}

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

function doFormat() {
	$(".moneyFormat").autoNumeric('init',{
	    aSep: '.',
	    dGroup: '3',
	    aDec: " ",
	    aPad: false
	});
}

// Volunteer
function getVolunteer() {
	var elements = $();
	$.ajax({
		url: '<?php echo base_url() ?>insight/data/volunteer',
		type: 'get',
		dataType: 'json',
		success: function(data) {
			for(var i =0; i < data.length; i++) {
				elements = elements.add("<tr><td class='text-capitalize'>"+ data[i].chapter + "</td><td><div class=pull-right><div class='label label-default' data-toggle='tooltip' data-placement='top'  data-original-title='Men'>"+ data[i].men +"</div><div class='label label-default' data-toggle='tooltip' data-placement='top' data-original-title='Women'>"+ data[i].women +"</div><div class='label label-primary' data-toggle='tooltip' data-placement='top' data-original-title='Total'>"+ data[i].total +"</div></td></tr>");
			}

			$(".contentVolunteer").html(elements);
			$('[data-toggle=tooltip]').tooltip({
		        container: 'body',
		    });
		}
	})
}

// Donation Overall
function getDonation() {
	$.ajax({
		url: '<?php echo base_url() ?>insight/data/donationall',
		type: 'get',
		dataType: 'json',
		success: function(data) {
            $(".panel-donation-overall").empty();
            $(".panel-donation-overall").append("<p>Cash Donation Overall</p>");
			$(".panel-donation-overall").append("<h1 class='mg-0 moneyFormat'>"+ data[0].total_donation +"</h1>");
			$(".panel-donation-overall").append("<p class='text-muted'><em>of <strong>"+ data[0].total_donator +"</strong> participant</em></h1>");
			doFormat();
		}
	});
}

// Donation Today
function getToday() {
	$.ajax({
		url: '<?php echo base_url() ?>insight/data/donationtoday',
		type: 'get',
		dataType: 'json',
		success: function(data) {
            $(".panel-donation-today").empty();
            $(".panel-donation-today").append("<p>Cash Donation Today</p>");
			$(".panel-donation-today").append("<h1 class='mg-0 moneyFormat'>"+ data[0].total_donation +"</h1>");
			$(".panel-donation-today").append("<p class='text-muted'><em>of <strong>"+ data[0].total_donator +"</strong> participant</em></h1>");
			doFormat();
		}
	});
}

function summaryDonation() {
    $.ajax({
        url: '<?php echo base_url() ?>insight/data/donation',
        type: 'get',
        dataType: 'json',
        success: function(arg) {

            var data = [
                arg[4].total,
                arg[3].total,
                arg[7].total,
                arg[0].total,
                arg[8].total,
                arg[6].total,
                arg[5].total,
                arg[1].total,
                arg[11].total,
                arg[10].total,
                arg[9].total,
                arg[2].total
            ];

            var ctx = document.getElementById("chart");
            var myLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
                    datasets: [{
                        label: 'Permonth',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
            });

        }
    })
}

setInterval(function() {
    load();
}, 1000 * 60 * 0.5);
</script>