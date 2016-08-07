<div class="container-fluid">
	<div class="side-body">		

		<?php if($this->session->flashdata('SIR')) { ?>
		<div class="alert alert-success" role="alert">
		  <strong><?php echo $this->session->flashdata('SIR'); ?></strong>
		</div>
		<?php } ?>

		
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

		<form method="post" enctype="multipart/form-data">
		<div class="row">
			<div class="col-sm-6">
				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Data Pribadi</div>
						</div>
					</div>
					<?php include "personal.php"; ?>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="card" style="margin-bottom: 20px">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Gambar</div>
						</div>
					</div>

					<div class="card-body">
						<div class="form-group">
							<input type="file" name="gambar">
						</div>
					</div>
				</div>


				<div class="card">
					<div class="card-header">
						<div class="card-title">
							<div class="title">Data Orang Tua</div>
						</div>
					</div>
					<?php include "parent.php"; ?>
				</div>
			</div>
		</div>

		<div style="margin-top:20px"></div>
		<button class="btn btn-primary btn-block">Submit</button>
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