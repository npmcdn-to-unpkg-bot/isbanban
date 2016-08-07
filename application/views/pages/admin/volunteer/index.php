<?php if($this->session->flashdata('SIR')) { ?>
<div class="alert alert-success" role="alert">
  <strong><?php echo $this->session->flashdata('SIR'); ?></strong>
</div>
<?php } ?>


<?php if(validation_errors()) { ?>
<div class="panel panel-danger">
	<div class="panel-heading">
		<div class="panel-title">
			Terjadi Kesalahan
		</div>
	</div>
	<div class="panel-body">
	<?php echo validation_errors(); ?>
	</div>
</div>
<?php } ?>

<form method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="col-sm-6">
			<div class="panel">
				<div class="panel-heading">
					<div class="panel-title">
						Data Pribadi
					</div>
				</div>

				<div class="panel-body">
					<?php include "personal.php"; ?>
				</div>
			</div>
		</div>

		<div class="col-sm-6">
			<div class="panel">
				<div class="panel-heading">
					<div class="panel-title">
						Gambar
					</div>
				</div>

				<div class="panel-body">
					<div class="form-group">
						<input type="file" name="gambar">
					</div>
				</div>
			</div>


			<div class="panel">
				<div class="panel-heading">
					<div class="panel-title">
						Data Orang Tua
					</div>
				</div>

				<div class="panel-body">
					<?php include "parent.php"; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<button class="btn btn-primary btn-block">Submit</button>
	</div>
</form>


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