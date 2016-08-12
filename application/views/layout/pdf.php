<html>
<head>
<style type="text/css" media="screen">    
@page {
	margin: 0;
	padding: 0;
}

table {
	width: 100%;
}

table tr td {
	padding: 10px;
	border: 1px solid red;
}
</style>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body style="background: url(<?php echo base_url() ?>template/assets/image/pdf_background.png) top left no-repeat;font-family: 'Open Sans', sans-serif;font-size: 14px;">


	<div style="position: fixed; top: 100px; width: 100%">
	    <p class="company-info" style="display: inline-block;line-height: 1.5em;font-size: 1.1em; text-align: right;">
	        <b>Yayasan Istana Belajar Anak Banten</b><br>
	        <b>Jl. Karya Bhakti 2A No. 98, Komplek KPPN Ciceri</b> <br>
	        <b>(+62)89665656796</b> <br>
	        <b>Serang, Banten</b> <br>
	        <b>Indonesia</b>
		</p>
	</div>

	<?php $this->load->view($page); ?>

</body>
</html>