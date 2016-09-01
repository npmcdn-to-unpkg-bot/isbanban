<!DOCTYPE html>
<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"> -->
	  <meta name="description" content="">
	  <meta name="author" content="Istana Belajar Anak Banten">

	  <title>Istana Belajar Anak Banten Summary</title>

	  <link href="<?php echo base_url() ?>template/assets/bracket/css/style.default.min.css" rel="stylesheet">
	  <link href="<?php echo base_url() ?>template/assets/bracket/css/morris.css" rel="stylesheet">
	  <link href="<?php echo base_url() ?>template/assets/css/site/theme.min.css" rel="stylesheet">
	  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	  <!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	  <script src="js/respond.min.js"></script>
	  <![endif]-->

	<script src="<?php echo base_url() ?>template/assets/bracket/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/bracket/js/bootstrap.min.js"></script>
	</head>

	<body class="horizontal-menu" style="background: transparent; padding-top: 0px;">
		<section>
			<div class="mainpanel">
				<div class="">
					<?php $this->load->view($page); ?>
				</div>
			</div><!-- mainpanel -->
		</section>
	</body>
</html>