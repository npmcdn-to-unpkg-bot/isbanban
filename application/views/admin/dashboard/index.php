<?php $now = date('Y'); ?>
<div class="container-fluid">
  <div class="side-body"> 
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <a href="#">
            <div class="card red summary-inline">
              <div class="card-body">
                <i class="icon fa fa-pencil fa-4x"></i>
                <div class="content">
                  <div class="title"><?php echo $countBlog; ?></div>
                  <div class="sub-title">Blog</div>
                </div>
                <div class="clear-both"></div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <a href="#">
            <div class="card yellow summary-inline">
              <div class="card-body">
                <i class="icon fa fa-map fa-4x"></i>
                <div class="content">
                  <div class="title"><?php echo $countVillage; ?></div>
                  <div class="sub-title">Desa Binaan</div>
                </div>
                <div class="clear-both"></div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <a href="#">
            <div class="card green summary-inline">
              <div class="card-body">
                <i class="icon fa fa-calendar-o fa-4x"></i>
                <div class="content">
                  <div class="title"><?php echo $countEvents; ?></div>
                  <div class="sub-title">Event</div>
                </div>
                <div class="clear-both"></div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
          <a href="#">
            <div class="card blue summary-inline">
              <div class="card-body">
                <i class="icon fa fa-users fa-4x"></i>
                <div class="content">
                  <div class="title"><?php echo $countRelawan; ?></div>
                  <div class="sub-title">Relawan</div>
                </div>
                <div class="clear-both"></div>
              </div>
            </div>
          </a>
        </div>
      </div>

    
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
              <div class="card-header">
                  <div class="card-title">
                      <div class="title">Relawan Insight</div>
                  </div>
              </div>
              <div class="card-body no-padding">
                  <canvas id="ee" class="chart" style="height:500px"></canvas>
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Chapter Insight</div>
                </div>
            </div>

            <div class="card-body no-padding">
                <canvas id="ee1" class="chart" style="height:500px"></canvas>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="title">Departemen Insight</div>
                </div>
            </div>

            <div class="card-body no-padding">
                <canvas id="ee2" class="chart" style="height:500px"></canvas>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/Chart.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.matchHeight-min.js"></script>
<script type="text/javascript">

// Insight Relawan
$(function() {
  var ctx, data, myBarChart, option_bars;
  Chart.defaults.global.responsive = true;
  ctx = $('#ee').get(0).getContext('2d');
  option_bars = {
    scaleBeginAtZero: true,
    scaleShowGridLines: true,
    scaleGridLineColor: "rgba(0,0,0,.05)",
    scaleGridLineWidth: 1,
    scaleShowHorizontalLines: true,
    scaleShowVerticalLines: false,
    barShowStroke: true,
    barStrokeWidth: 1,
    barValueSpacing: 5,
    barDatasetSpacing: 3,
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
  };
  data = {
    labels: [<?php echo $now-2; ?>, <?php echo $now-1; ?>, <?php echo $now; ?>, 'Total'],
    datasets: [
      {
        label: <?php echo $now-2; ?>,
        fillColor: "rgba(26, 188, 156,0.6)",
        strokeColor: "#1ABC9C",
        pointColor: "#1ABC9C",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "#1ABC9C",
        data: [<?php echo $countRLPast2; ?>, <?php echo $countRLPast1; ?>, <?php echo $countRLNow; ?>, <?php echo $countRLTotal; ?>]
      }, {
        label: <?php echo $now-1; ?>,
        fillColor: "rgba(34, 167, 240,0.6)",
        strokeColor: "#22A7F0",
        pointColor: "#22A7F0",
        pointStrokeColor: "#fff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "#22A7F0",
        data: [<?php echo $countRPPast2; ?>, <?php echo $countRPPast1; ?>, <?php echo $countRPNow; ?>, <?php echo $countRPTotal; ?>]
      }
    ]
  };
  myBarChart = new Chart(ctx).Bar(data, option_bars);
});


// Insight Chapter
$(function() {
  var ctx, data, myPolarAreaChart, option_bars;
  Chart.defaults.global.responsive = true;
  ctx = $('#ee1').get(0).getContext('2d');
  option_bars = {
    scaleShowLabelBackdrop: true,
    scaleBackdropColor: "rgba(255,255,255,0.75)",
    scaleBeginAtZero: true,
    scaleBackdropPaddingY: 2,
    scaleBackdropPaddingX: 2,
    scaleShowLine: true,
    segmentShowStroke: true,
    segmentStrokeColor: "#fff",
    segmentStrokeWidth: 2,
    animationSteps: 100,
    animationEasing: "easeOutBounce",
    animateRotate: true,
    animateScale: false,
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
  };
  data = [
    {
      value: <?php echo $countChapterKotSerang; ?>,
      color: "#2ecc71",
      highlight: "#2ecc71",
      label: "Kota Serang"
    }, {
      value: <?php echo $countChapterKabSerang; ?>,
      color: "#8e44ad",
      highlight: "#8e44ad",
      label: "Kabupaten Serang"
    }, {
      value: <?php echo $countChapterCilegon; ?>,
      color: "#e67e22",
      highlight: "#e67e22",
      label: "Cilegon"
    }, {
      value: <?php echo $countChapterPandeglang; ?>,
      color: "#f39c12",
      highlight: "#f39c12",
      label: "Pandeglang"
    }, {
      value: <?php echo $countChapterLebak; ?>,
      color: "#34495e",
      highlight: "#34495e",
      label: "Lebak"
    },
      {
      value: <?php echo $countChapterKabTangerang; ?>,
      color: "#c0392b",
      highlight: "#c0392b",
      label: "Kabupaten Tangerang"
    },
     {
      value: <?php echo $countChapterTangsel; ?>,
      color: "#1abc9c",
      highlight: "#1abc9c",
      label: "Tangerang Selatan"
    },
    
  ];
  myPolarAreaChart = new Chart(ctx).PolarArea(data, option_bars);
});


// Insight Departemen
$(function() {
  var ctx, data, myLineChart, options;
  Chart.defaults.global.responsive = true;
  ctx = $('#ee2').get(0).getContext('2d');
  options = {
    showScale: false,
    scaleShowGridLines: false,
    scaleGridLineColor: "rgba(0,0,0,.05)",
    scaleGridLineWidth: 0,
    scaleShowHorizontalLines: false,
    scaleShowVerticalLines: false,
    bezierCurve: false,
    bezierCurveTension: 0.4,
    pointDot: false,
    pointDotRadius: 0,
    pointDotStrokeWidth: 2,
    pointHitDetectionRadius: 20,
    datasetStroke: true,
    datasetStrokeWidth: 4,
    datasetFill: true,
    legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"
  };
  data = [
    {
      value: <?php echo $countDepartemenIT; ?>,
      color: "#2e8ece",
      highlight: "#2e8ece",
      label: "IT and Media Social"
    }, {
      value: <?php echo $countDepartemenFN; ?>,
      color: "#2c3e50",
      highlight: "#2c3e50",
      label: "Fundraising"
    }, {
      value: <?php echo $countDepartemenCD; ?>,
      color: "#FABE28",
      highlight: "#FABE28",
      label: "Child Development"
    }, {
      value: <?php echo $countDepartemenVD; ?>,
      color: "#d35400",
      highlight: "#d35400",
      label: "Volunteer Resource Development"
    }, {
      value: <?php echo $countDepartemenIC; ?>,
      color: "#1abc9c",
      highlight: "#1abc9c",
      label: "Isbanban Community"
    }, {
      value: <?php echo $countDepartemenPR; ?>,
      color: "#95a5a6",
      highlight: "#95a5a6",
      label: "Public Relation"
    }, {
      value: <?php echo $countDepartemenIO; ?>,
      color: "#7f8c8d",
      highlight: "#7f8c8d",
      label: "Isbanban Official"
    }
  ];
  myLineChart = new Chart(ctx).Pie(data, options);
});
</script>