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