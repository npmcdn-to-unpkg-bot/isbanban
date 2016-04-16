<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>404 Page Not Found</title>
	<meta name="description" content="We Are Youth Led-Organization That Focus On Helping Education Of Children In Rural Areas.">

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
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:100,400,600,300italic,700' rel='stylesheet' type='text/css'>
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
<body class="errors">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3 errors-begin">
				<div class="logo">
					<img src="<?php echo base_url() ?>template/assets/image/logo.png" alt="" class="img-responsive img-center" style="height:120px; margin-top: 20px">
				</div>
				<h3>Halaman yang anda cari tidak ditemukan atau mungkin anda tersesat</h3>
				<a href="<?php echo base_url() ?>" class="btn btn-primary btn-raised">Halaman Utama</a>
			</div>
		</div>
	</div>

	<script>
	var isSmallScreen = 768;
	
	var docHeight = $(document).height();
	if($(window).width() > isSmallScreen) {
		var realHeight	= docHeight/8+"px";
		$(".errors-begin").css({"margin-top": realHeight});
	} else {
		var realHeight	= docHeight/10+"px";
		$(".errors-begin").css({"margin-top": realHeight});
	}
	</script>
</body>