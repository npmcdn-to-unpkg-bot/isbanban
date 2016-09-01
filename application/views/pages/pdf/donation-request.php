<div class="alert alert-warning">
	Your donation status is pending, please immediately confirm following the instructions in your email
</div>
<div class="mg-t-20"></div>


<div class="page-header">
	<div class="h4 mg-0">
		Donator Information
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




<hr class="mg-0">
<div class="page-header">
	<div class="h4">
		Bank Information
	</div>
</div>
<div class="table table-information text-center">
	<tr>
		<td class="mg-t-20 mg-b-20">
			<img src="http://www.bca.co.id/assets/images/logo-bca.png" style="height: 30px; margin: 10px auto;">
			<div><b>Yayasan Istana Belajar Anak Banten</b></div>
			<div><b>2453901513</b></div>
		</td>
	</tr>
</div>
<hr class="mg-0">