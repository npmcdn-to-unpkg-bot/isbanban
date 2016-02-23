<div class="container-fluid">
	<div class="side-body">
		<div class="page-title">
            <span class="title text-center">Edit Data Relawan</span>
        </div>

		
		<?php if(validation_errors()) { ?>
		<div class="panel panel-danger">
			<div class="panel-heading">
				Terjadi Kesalahan
			</div>
			<div class="panel-body">
			<?php echo validation_errors(); ?>
			</div>
		</div>
		<?php } ?>


		<?php foreach($getThis as $row) { ?>
		<form action="" method="post">
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Data Pribadi</div>
						</div>
					</div>
					<?php include "detail-personal.php"; ?>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Data Orang Tua</div>
						</div>
					</div>
					<?php include "detail-parent.php"; ?>
				</div>
			</div>
		</div>
		<?php } ?>

		<div style="margin-top:20px"></div>
		<button class="btn btn-primary btn-block" type="submit">Submit</button>
		</form>
	</div>
</div>


<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
<script src="<?php echo base_url() ?>template/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script>
$('.tglGabung').datepicker({
    format: "yyyy-mm-00",
    minViewMode: 1
});
$('.tglLahir').datepicker({
    format: "yyyy-mm-dd",
});
</script>