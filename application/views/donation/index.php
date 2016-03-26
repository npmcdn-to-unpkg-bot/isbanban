<!-- <div class="jumbotron bigger" style="background: url(<?php echo base_url() ?>template/assets/image/bg-donation.jpg) no-repeat center center;"> -->
<div class="jumbotron bigger" style="background: url(http://unsplash.it/1280/800?random&blur) no-repeat center center;">
	<div class="container">
		<h1>Donation</h1>
		<p>Your donation help us to make access of education through builiding a learning center and teaching for 455 children in 8 rural areas of Banten</p>
		<hr>
	</div>
</div>

<div class="precontent donation donation-info">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Counting From Our Bank</h1>
			</div>
			<div class="col-sm-6 poin">
				<h2 class="bigger">
				Rp. <span class="money moneyFormat"><?php foreach($totalMoney as $item) {
						echo $item->total_donasi_uang;
					} ?></span>
				</h2>
				<p>Cash</p>
			</div>

			<div class="col-sm-6 poin">
				<h2 class="bigger book">
					<?php foreach($totalBook as $item) {
						echo $item->total_donasi_uang;
					} ?>
				</h2>
				<p>Books</p>
			</div>
		</div>
	</div>
</div>

<section>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<?php for($i=0; $i<7; $i++) { ?>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio praesentium aliquam suscipit, animi quidem quia esse aperiam numquam minima libero dolores culpa molestias earum atque nihil deleniti dolor repudiandae alias.</p>
				<?php } ?>
			</div>

			<div class="col-sm-4">
				<div class="panel panel-default donation">
					<div class="panel-heading">
						<b>Donation Form</b>
					</div>

					<div class="panel-body">


						<?php if(validation_errors()) { ?>
<!-- If Errors -->
						<div class="panel panel-danger">
							<div class="panel-heading">
								Terjadi Kesalahan
							</div>

							<div class="panel-body">
								<?php echo validation_errors() ;?>
							</div>
						</div>
						<?php } ?>

						<form method="post">
							<div class="form-group label-floating">
								<label for="#uname" class="control-label">Full Name</label>
								<input id="uname" type="text" class="form-control" name="donatur_name">
							</div>

							<div class="form-group label-floating">
								<label for="#uname" class="control-label">Phone Number</label>
								<input type="text" id="uname" class="form-control" name="donatur_number">
							</div>

							<div class="form-group label-floating">
								<label for="#uname" class="control-label">Email</label>
								<input id="uname" type="text" class="form-control" name="donatur_email">
							</div>

							<div class="form-group label-floating">
								<label for="#uname" class="control-label">Message</label>
								<textarea id="uname" class="form-control" name="donatur_message"></textarea>
							</div>

							<hr>

							<div class="form-group label-floating">
								<label for="#default" class="control-label">Donation</label>
								<input id="default" type="text" class="form-control moneyFormat">
								<input class="realFormat" type="hidden" name="donation_cash">
							</div>

							<div class="form-group label-floating">
								<label for="#uname">Transfer Method</label>
								<select name="donation_method" id="uname" class="form-control">
									<option value="">-- Choose Option --</option>
									<?php foreach($getBankAccount as $item) { ?>
									<option value="<?php echo $item->id; ?>">
									<?php echo $item->nama; ?> &mdash; <?php echo $item->nomor_rekening; ?>
									</option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<button class="btn btn-primary btn-raised btn-block" type="submit">confirm</button>							
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="precontent donation">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 poin">
					<i class="fa fa-archive fa-3x"></i>
					<h4>Tools</h4>
					<p>We need more tools for support their unstoppable creativity</p>
				</div>

				<div class="col-sm-4 poin">
					<i class="fa fa-book fa-3x"></i>
					<h4>Books</h4>
					<p>Share your best smile today with giving your usefull book</p>
				</div>

				<div class="col-sm-4 poin">
					<i class="fa fa-briefcase fa-3x"></i>
					<h4>Briefcase</h4>
					<p>Curious with <b>ISBANBAN?</b> Why not coming and get your free coffee</p>
				</div>
			</div>
		</div>
	</div>
</section>

<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/vendor/sweetalert/dist/sweetalert.css">
<script src="<?php echo base_url() ?>template/assets/vendor/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/autoNumeric/autoNumeric.js"></script>
<script>
$(".moneyFormat").autoNumeric('init',{
    aSep: '.',
    dGroup: '3',
    aDec: " ",
    aPad: false
});

$("#default").bind('blur focusout keypress keyup', function() {
    var realValue = $("#default").autoNumeric('get');

    $(".realFormat").val(realValue);
});

<?php if($this->session->flashdata('success', true)) { ?>
swal({
  title: "Thank you!",
  text: "Please confirm to our number you finished transfer to bank account that we mentioned before <?php echo $confirm_code; ?> | <?php echo $this->input->post('donation_cash'); ?>",
  type: "success",
  confirmButtonText: "Close",
},
function(){ 
	window.location.href = "<?php echo base_url() ?>donate";
});

<?php $this->session->unset_userdata('success'); ?>
<?php } ?>
</script>