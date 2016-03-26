<div class="container-fluid">
	<div class="side-body">

        <?php if(validation_errors()) { ?>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        Terjadi Kesalahan
                    </div>

                    <div class="panel-body">
                        <?php echo validation_errors(); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?> 

<!-- Alert Add Data -->
        <?php if($this->session->flashdata('success') == true) { ?>
        <div class="alert alert-success" role="alert">
            <strong>Whooops!</strong> Berhasil Mengirim Email!.
        </div>
        <?php } ?>       

        <form method="post">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>Subject</label>
                        <input class="form-control" type="text" name="subject"></input>
                    </div>

                    <div class="form-group">
                        <label>Konten</label>
                        <textarea id="editor1" class="form-control" name="konten"></textarea>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary btn-block" type="submit">Submit</button>
        </form>
	</div>
</div>



<style type="text/css">
    .card { margin-bottom: 20px }
    .row .col-sm-8,
    .row .col-sm-4 {
        margin-bottom: 0px;
    }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/dataTables.bootstrap.css">
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/ckeditor/config.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/ckeditor/styles.js"></script>
<script>
CKEDITOR.replace( 'editor1', {
  extraPlugins: 'imageuploader'
});
</script>