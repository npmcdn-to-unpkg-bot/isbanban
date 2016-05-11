<!--
.########..##.......########....###.....######..########
.##.....##.##.......##.........##.##...##....##.##......
.##.....##.##.......##........##...##..##.......##......
.########..##.......######...##.....##..######..######..
.##........##.......##.......#########.......##.##......
.##........##.......##.......##.....##.##....##.##......
.##........########.########.##.....##..######..########

.##.....##.########.##.......########.                  
.##.....##.##.......##.......##.....##                  
.##.....##.##.......##.......##.....##                  
.#########.######...##.......########.                  
.##.....##.##.......##.......##.......                  
.##.....##.##.......##.......##.......                  
.##.....##.########.########.##.......    
              
.########.....###....##....##.########.########.##....##
.##.....##...##.##...###...##....##....##.......###...##
.##.....##..##...##..####..##....##....##.......####..##
.########..##.....##.##.##.##....##....######...##.##.##
.##.....##.#########.##..####....##....##.......##..####
.##.....##.##.....##.##...###....##....##.......##...###
.########..##.....##.##....##....##....########.##....##
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php echo $title; ?> &mdash; Istana Belajar Anak Banten</title>
	<meta name="description" content="We Are Youth Led-Organization That Focus On Helping Education Of Children In Rural Areas.">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="<?php echo $title; ?> &mdash; Istana Belajar Anak Banten">
    <meta itemprop="description" content="We Are Youth Led-Organization That Focus On Helping Education Of Children In Rural Areas.">
    <?php if($meta_image) { ?>
	<meta itemprop="image" content="<?php echo $meta_image; ?>">
	<?php } else { ?>
	<meta itemprop="image" content="<?php echo base_url() ?>template/assets/image/typetext-black.png">
	<?php } ?>

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@">
    <meta name="twitter:title" content="<?php echo $title; ?> &#124; Istana Belajar Anak Banten">
    <meta name="twitter:description" content="We Are Youth Led-Organization That Focus On Helping Education Of Children In Rural Areas.">
    <?php if($meta_image) { ?>
    <meta name="twitter:image:src" content="<?php echo $meta_image; ?>">
    <?php } else { ?>
    <meta name="twitter:image:src" content="<?php echo base_url() ?>template/assets/image/typetext-black.png">
    <?php } ?>

    <!-- Open Graph data -->
    <meta property="og:title" content="<?php echo $title; ?> &#124; Istana Belajar Anak Banten">
    <meta property="og:url" content="<?php echo $meta_url; ?>">
    <?php if($meta_image) { ?>
    <meta property="og:image" content="<?php echo $meta_image; ?>">
    <?php } else { ?>
    <meta property="og:image" content="<?php echo base_url() ?>template/assets/image/typetext-black.png">
    <?php } ?>
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:description" content="We Are Youth Led-Organization That Focus On Helping Education Of Children In Rural Areas.">
    <meta property="og:site_name" content="Istana Belajar Anak Banten">


    <link rel="canonical" href="<?php echo $meta_url; ?>">
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

		var domain = 'http://isbanban.org/';	
		if($("header").hasClass('navbar-inverse')) {
			$(".navbar-brand img").attr('src', domain +'template/assets/image/typetext-white.png')
		}


		var navbarTrans = $("header").hasClass('navbar-inverse');
		if(navbarTrans) {
        $(document).on('scroll', function() {
            if(navbarTrans && window.scrollY >= 250) {
                $('header').addClass('navbar-default').removeClass('navbar-inverse');
				$(".navbar-brand img").attr('src', domain +'template/assets/image/typetext-black.png')
                navbarTrans = false;
            } else if(! navbarTrans && window.scrollY < 250) {
                $('header').addClass('navbar-inverse').removeClass('navbar-default');
				$(".navbar-brand img").attr('src', domain +'template/assets/image/typetext-white.png')
                navbarTrans = true;
            }
        })
    }
	})
	</script>

	<!-- Shareholic -->
	<script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='7052b25fdf339afd6e55faacc466eee0' data-cfasync='false' async='async'></script>

	<!-- Hotjar Tracking Code for http://isbanban.org -->
	<script>
	    (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:193264,hjsv:5};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
	</script>


</head>
<body>

<header class="navbar-fixed-top navbar-<?php if($role=='normal') { echo "default"; } else { echo "inverse"; } ?>">
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
				<li <?php if($current =='home') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>">home</a></li>
				<li <?php if($current =='about') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>about">about</a></li>
				<li <?php if($current =='people') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>people">people</a></li>
				<li <?php if($current =='village') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>village">village</a></li>
				<li <?php if($current =='blog') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>blog">blog</a></li>
				<li <?php if($current =='event') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>event">event</a></li>
				<li <?php if($current =='donate') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>donate">donate</a></li>
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