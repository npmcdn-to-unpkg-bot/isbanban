<div style="position: fixed; top: 230px; box-shadow: transparent !important;" class="panel panel-success">
	<div class="panel-body text-success">
		Terimakasih atas uluran tangan anda serta dukungan pergerakan kami, donasi anda akan sangat membantu untuk terus membangun pendidikan hingga ke pelosok desa di Banten. <br>
		<div class="text-muted">salam hangat dari kami beserta adik-adik dipelosok desa</div>
	</div>
</div>

<div style="position:fixed; top: 350px;">
	<table class="table" style="background: transparent !important; width: 100%">
		<thead>
			<tr>
				<th colspan="2" style="text-align: left">Donator Information</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td colspan="2" style="padding: 40px 0px; border: 1px solid #333; text-align: center">
					<b>Rp. <span style="font-size: 31px;"><?php echo number_format($donasi_cash); ?></span></b>
				</td>
			</tr>
			<tr>
				<td style="padding: 10px; border: 1px solid #333; width: 30%"><b>Donation at</b></td>
				<td style="padding: 10px; border: 1px solid #333"><?php echo date("d-m-Y", strtotime($donasi_date)); ?></td>
			</tr>

			<tr>
				<td style="padding: 10px; border: 1px solid #333; width: 30%"><b>Confirmed at</b></td>
				<td style="padding: 10px; border: 1px solid #333"><?php echo date("d-m-Y", strtotime($confirmed_date)); ?></td>
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

			<tr>
				<td style="padding: 10px; border: 1px solid #333; width: 30%"><b>Bank Account Information</b></td>
				<td style="padding: 10px; border: 1px solid #333">
					<strong><?php echo $donatur_rekening_nama; ?></strong> <br>
					<?php echo $donatur_rekening_nomor; ?>
				</td>
			</tr>
		</tbody>
	</table>
</div>


<div style="position:fixed; top: 790px;">
	<table style=" background: none; width: 100%">
		<tbody>
			<tr>
				<td colspan="3" style="padding: 10px; border: 1px solid #333; text-align: center">
					<img src="<?php echo base_url() ?>template/assets/image/relawan-logo.png" style="height: 150px; margin: 10px auto;">
				</td>
			</tr>
		</tbody>
	</table>
</div>