<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Open Recruitment &mdash; Istana Belajar Anak Banten</title>

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
<body>

<header class="navbar-<?php if($role=='normal') { echo "default"; } else { echo "inverse"; } ?>">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url() ?>">
				<img class="img-responsive" src="<?php echo base_url() ?>template/assets/image/typetext-black.png"></img>
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url() ?>">home</a></li>
				<li><a href="<?php echo base_url() ?>about">about</a></li>
				<li><a href="<?php echo base_url() ?>people">people</a></li>
				<li><a href="<?php echo base_url() ?>village">village</a></li>
				<li><a href="<?php echo base_url() ?>blog">blog</a></li>
				<li><a href="<?php echo base_url() ?>event">event</a></li>
				<li><a href="<?php echo base_url() ?>donate">donate</a></li>
			</ul>
		</div>
	</div>


<!-- Pull Right Navigation -->
	<div class="navmenu navmenu-default navmenu-fixed-right offcanvas">
		<ul class="nav navmenu-nav">
			<li><a href="<?php echo base_url() ?>">home <i class="fa fa-fw fa-home pull-right"></i></a></li>
			<li><a href="<?php echo base_url() ?>about">about <i class="fa fa-fw fa-info-circle pull-right"></i></a></li>
			<li><a href="<?php echo base_url() ?>people">people <i class="fa fa-fw fa-group pull-right"></i></a></li>
			<li><a href="<?php echo base_url() ?>village">village <i class="fa fa-fw fa-building pull-right"></i></a></li>
			<li><a href="<?php echo base_url() ?>blog">blog <i class="fa fa-fw fa-pencil pull-right"></i></a></li>
			<li><a href="<?php echo base_url() ?>event">event <i class="fa fa-fw fa-calendar pull-right"></i></a></li>
			<li><a href="<?php echo base_url() ?>donate">donate <i class="fa fa-fw fa-bank pull-right"></i></a></li>
		</ul>
	</div>
</header>