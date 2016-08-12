<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/helpers.css">
	<style>
	@page {
	  margin: 0cm 0cm;
	  font-size: 12px;
	}

	#header {
		position: fixed;
		width:  100%;
		border-top: 5px solid #00aced;
		background: #fafafa;
		text-align: center;
		padding: 20px;
	}

	.img-logo {
		width: 180px;
		margin-bottom: 10px;
	}

	#content,
	#footer {
		position: fixed;
		left: 1cm; right:  1cm;
	}

	#content {
		top: 200px;
	}

	#footer {
		border-top: 2px solid #00aced;
		padding-top: 5px;
		bottom: 50px;
	}

	.table tr td {
		padding: 10px;
	}

	.table-information tr:nth-child(odd) td {
		background: #fafafa;
	}

	.bigger {
		font-size: 31px;
		line-height: 38px;
	}

	.img-stamp {
		width: 150px;
		float: right;
		margin-top: -100px;
	}


	</style>
	</head>
<body>
	<div id="header">
		<img src="<?php echo base_url() ?>template/assets/image/typetext-black.png" alt="" class="img-responsive img-logo" style="margin:0px auto">
		<p>
			Yayasan Istana Belajar Anak Banten <br>
			Jl. Karya Bhakti 2A No. 98, Komplek KPPN Ciceri Serang, Banten <br>
		</p>

	</div>

	<div id="footer">
	    <div class="line"></div>
	    <div class="left">
	        <strong>Yayasan Istana Belajar anak Banten</strong>
	        &middot;
	        (+62)89665656796
	        &middot;
	        <a href="mailto:hello@isbanban.org">hello@isbanban.org</a>
	        &middot;
	        <a href="http://isbanban.com">www.isbanban.org</a>
	    </div>
	</div>

	<div id="content" class="content">
		<?php $this->load->view($page); ?>
	</div>
</body>
</html>