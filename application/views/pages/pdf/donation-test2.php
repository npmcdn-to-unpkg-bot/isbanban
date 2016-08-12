<div class="alert alert-success">
	Terimakasih atas uluran tangan anda serta dukungan pergerakan kami, donasi anda akan sangat 	membantu untuk terus membangun pendidikan hingga ke pelosok desa di Banten. <br>
	Salam hangat dari kami beserta adik-adik dipelosok desa
</div>
<div class="mg-t-20"></div>


<div class="page-header">
	<div class="h4 mg-0">
		General Information
	</div>
</div>
<hr class="mg-0">
<table class="table table-condensed table-information mg-0">
	<tr>
		<td style="width: 30%">Confirmation Code</td>
		<td><?php echo $confirm_code; ?></td>
	</tr>

	<tr>
		<td style="width: 30%">Donation At</td>
		<td><?php echo date("d-m-Y", strtotime($donasi_date)); ?></td>
	</tr>

	<tr>
		<td style="width: 30%">Confirmed At</td>
		<td><?php echo date("d-m-Y", strtotime($confirmed_date)); ?></td>
	</tr>
</table>
<hr class="mg-0">


<div class="page-header">
	<div class="h4 mg-0">
		Donator Information
	</div>
</div>
<hr class="mg-0">
<table class="table table-condensed table-information mg-0">
	<tr>
		<td style="width: 30%">Your Name</td>
		<td><?php echo $donatur_nama; ?></td>
	</tr>

	<tr>
		<td style="width: 30%">Your Phone</td>
		<td><?php echo $donatur_number; ?></td>
	</tr>

	<tr>
		<td style="width: 30%">Your Mail</td>
		<td><?php echo $donatur_email; ?></td>
	</tr>

	<tr>
		<td style="width: 30%">Your Message</td>
		<td><?php echo $donatur_message; ?></td>
	</tr>

	<tr>
		<td colspan="2" class="text-center">
			Rp. <span class="bigger"><?php echo number_format($donasi_cash); ?></span>
		</td>
	</tr>
</table>
<hr class="mg-0">


<img src="<?php echo base_url() ?>template/assets/image/relawan-logo.png" alt="" class="img-stamp">