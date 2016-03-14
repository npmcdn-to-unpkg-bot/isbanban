<div class="jumbotron bigger" style="background: url(<?php echo base_url() ?>template/assets/image/bg-donation.jpg) no-repeat center center;">
	<div class="container">
		<h1>Donation</h1>
		<p>start sharing your best smile today with them</p>
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
				Rp. <span class="money"><?php foreach($totalMoney as $item) {
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
						Donation Form
					</div>

					<div class="panel-body">
						<div class="form-group label-floating">
							<label for="#uname" class="control-label">Full Name</label>
							<input id="uname" type="text" class="form-control">
						</div>

						<div class="form-group label-floating">
							<label for="#uname" class="control-label">Phone Number</label>
							<input type="text" id="uname" class="form-control">
						</div>

						<div class="form-group label-floating">
							<label for="#uname" class="control-label">Email</label>
							<input id="uname" type="text" class="form-control">
						</div>

						<div class="form-group label-floating">
							<label for="#uname" class="control-label">Message</label>
							<textarea name="" id="uname" class="form-control"></textarea>
						</div>


						<div class="form-group label-floating">
							<label for="#uname">Transfer Methode</label>
							<select name="" id="uname" class="form-control">
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


<script src="<?php echo base_url() ?>template/assets/vendor/autoNumeric/autoNumeric-min.js"></script>
<script>
$(".money, .book").autoNumeric('init',{
    aSep: ',',
    dGroup: '3',
    aDec: " ",
    aPad: false
});
</script>