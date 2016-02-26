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
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/vendor/font-awesome/css/font-awesome.min.css">

	<script src="<?php echo base_url() ?>template/assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/vendor/bootstrap-material-design/dist/js/material.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/vendor/bootstrap-material-design/dist/js/ripples.min.js"></script>
	<script type="text/javascript">
	$.material.init();
	</script>
</head>
<body>



<?php if($role=='full') { ?>
<!-- <header class="navbar-inverse">
	<div class="navbar-before">
		<div class="container">
				<img src="http://isbanban.org/wp-content/uploads/2015/07/isbanban1-e1437047014513.png" alt="" class="img-responsive">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

		<ul class="nav navbar-nav">
			<li class="active"><a href="">home</a></li>
			<li><a href="">about us</a></li>
			<li><a href="">people</a></li>
			<li><a href="">village</a></li>
			<li><a href="">blog</a></li>
			<li><a href="">events</a></li>
			<li><a href="">donate</a></li>
		</ul>
	</div>
</header> -->
<?php } ?>



<?php if($role=='normal') { ?>
<!-- <header class="navbar-inverse">
	<div class="container">
		<div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

		<ul class="nav navbar-nav">
			<li class="active"><a href="">home</a></li>
			<li><a href="">about us</a></li>
			<li><a href="">people</a></li>
			<li><a href="">village</a></li>
			<li><a href="">blog</a></li>
			<li><a href="">events</a></li>
			<li><a href="">donate</a></li>
		</ul>
	</div>
</header> -->



<header class="navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				<img class="img-responsive" src="<?php echo base_url() ?>template/assets/image/typetext-black.png"></img>
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">home</a></li>
				<li><a href="#">about</a></li>
				<li><a href="#">people</a></li>
				<li><a href="#">village</a></li>
				<li><a href="#">blog</a></li>
				<li><a href="#">events</a></li>
				<li><a href="#">donate</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</header>


<?php } ?>