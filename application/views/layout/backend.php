<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	  <meta name="description" content="">
	  <meta name="author" content="">

	  <title>Dashboard &mdash; <?php echo $title; ?></title>

	  <link href="<?php echo base_url() ?>template/assets/bracket/css/style.default.min.css" rel="stylesheet">
	  <style>
		.form-group	{
			margin-bottom: 20px !important;
		}

		.pd-0 {
			padding:  0px;
		}
	  </style>

	  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	  <![endif]-->

	<script src="<?php echo base_url() ?>template/assets/bracket/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/jquery-ui-1.10.3.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/modernizr.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/toggles.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/retina.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/jquery.cookies.js"></script>
	<script src="<?php echo base_url() ?>template/assets/vendor/select2/dist/js/select2.min.js"></script>
	<script>
	$(document).ready(function(){
		$("select").select2({
		    theme: "bootstrap"
		}).css({"height":"$40px", "padding-top":"9px"});
	});
	</script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/flot/jquery.flot.resize.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/flot/jquery.flot.spline.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/morris.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/raphael-2.1.0.min.js"></script>

	<script src="<?php echo base_url() ?>template/assets/bracket/js/custom.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/dashboard.js"></script>
	</head>

	<body class="stickyheader">
		<section>
		  	<?php $this->load->view('partials/admin/header'); ?>

			<div class="mainpanel">
				<div class="headerbar">
					<a class="menutoggle"><i class="fa fa-bars"></i></a>      
				</div>

				<?php $this->load->view('partials/admin/pageheader', array('icon' => $icon, 'pagetitle' => $pagetitle)); ?>

				<div class="contentpanel">
					<?php $this->load->view($page); ?>
				</div>
			</div><!-- mainpanel -->

		  	<?php $this->load->view('partials/admin/footer'); ?>
		</section>
	</body>
</html>