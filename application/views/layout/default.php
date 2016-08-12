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
	<meta itemprop="image" content="<?php echo base_url() ?>template/assets/image/default-placeholder.png">
	<?php } ?>

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@">
    <meta name="twitter:title" content="<?php echo $title; ?> &#124; Istana Belajar Anak Banten">
    <meta name="twitter:description" content="We Are Youth Led-Organization That Focus On Helping Education Of Children In Rural Areas.">
    <?php if($meta_image) { ?>
    <meta name="twitter:image:src" content="<?php echo $meta_image; ?>">
    <?php } else { ?>
    <meta name="twitter:image:src" content="<?php echo base_url() ?>template/assets/image/default-placeholder.png">
    <?php } ?>

    <!-- Open Graph data -->
    <meta property="og:title" content="<?php echo $title; ?> &#124; Istana Belajar Anak Banten">
    <meta property="og:url" content="<?php echo $meta_url; ?>">
    <?php if($meta_image) { ?>
    <meta property="og:image" content="<?php echo $meta_image; ?>">
    <?php } else { ?>
    <meta property="og:image" content="<?php echo base_url() ?>template/assets/image/default-placeholder.png">
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

	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-78144706-1', 'auto');
		ga('send', 'pageview');
	</script>


</head>
<body>
	<?php $this->load->view('partials/header'); ?>

	<?php $this->load->view($page); ?>

	<?php $this->load->view('partials/footer'); ?>

	<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.2.14.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script>
</body>
</html>