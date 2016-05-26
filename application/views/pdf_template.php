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


<div style="position: fixed; top: 230px; box-shadow: transparent !important;" class="panel panel-info">
	<div class="panel-body text-info">
		Your donation status is pending, please immediately confirm following the instructions in your email
	</div>
</div>

<div style="position:fixed; top: 320px;">
	<table class="table" style="background: transparent !important; width: 100%">
		<thead>
			<tr>
				<th colspan="2" style="text-align: left">Donator Information</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td style="padding: 10px; border: 1px solid #333; width: 30%"><b>Donation at</b></td>
				<td style="padding: 10px; border: 1px solid #333"><?php echo date("d-m-Y", strtotime($donasi_date)); ?></td>
			</tr>

			<tr>
				<td style="padding: 10px; border: 1px solid #333; width: 30%"><b>Donation Code</b></td>
				<td style="padding: 10px; border: 1px solid #333"><?php echo $confirm_code; ?></td>
			</tr>

			<tr>
				<td style="padding: 10px; border: 1px solid #333; width: 30%"><b>Name</b></td>
				<td style="padding: 10px; border: 1px solid #333"><?php echo $donatur_nama; ?></td>
			</tr>

			<tr>
				<td style="padding: 10px; border: 1px solid #333; width: 30%"><b>Email</b></td>
				<td style="padding: 10px; border: 1px solid #333"><?php echo $donatur_email; ?></td>
			</tr>

			<tr>
				<td style="padding: 10px; border: 1px solid #333; width: 30%"><b>Phone Number</b></td>
				<td style="padding: 10px; border: 1px solid #333"><?php echo $donatur_number; ?></td>
			</tr>


			<?php if($donatur_message) { ?>
			<tr>
				<td style="padding: 10px; border: 1px solid #333; width: 30%"><b>Message</b></td>
				<td style="padding: 10px; border: 1px solid #333"><?php echo $donatur_message; ?></td>
			</tr>
			<?php } ?>

			<tr>
				<td colspan="2" style="padding: 40px 0px; border: 1px solid #333; text-align: center">
					<b>Rp. <span style="font-size: 31px;"><?php echo number_format($donasi_cash); ?></span></b>
				</td>
			</tr>
		</tbody>
	</table>
</div>


<div style="position:fixed; top: 720px;">
	<table style=" background: none; width: 100%">
		<thead>
			<tr>
				<th colspan="3" style="text-align: left">Bank Information</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td colspan="3" style="padding: 10px; border: 1px solid #333; text-align: center">
					<b>Bank Central Asia</b> <br>
					<img src="http://www.bca.co.id/assets/images/logo-bca.png" style="height: 30px; margin: 10px auto;">
					<div><b>Yayasan Istana Belajar Anak Banten</b></div>
					<div><b>2453901513</b></div>
				</td>
			</tr>
		</tbody>
	</table>
</div>




</body>
</html>