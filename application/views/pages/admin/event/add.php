<?php if(validation_errors() || $this->upload->display_errors()) { ?>
<div class="row">
    <div class="col-sm-8 col-sm-offset-2">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <div class="panel-title">
                    Terjadi Kesalahan
                </div>
            </div>

            <div class="panel-body">
                <?php echo validation_errors(); ?>
                <?php echo $this->upload->display_errors(); ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>        

<form method="post" enctype="multipart/form-data">
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                <div class="title">Gambar</div>
            </div>
        </div>

        <div class="panel-body">
            <input type="file" name="gambar">
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                <div class="title">Informasi</div>
            </div>
        </div>

        <div class="panel-body">
            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" type="text" name="judul"></input>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Lokasi</label>
                        <input class="form-control" type="text" name="lokasi"></input>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input class="form-control pickdate" type="text" name="tanggal"></input>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Latitude</label>
                        <input class="form-control" type="text" name="latitude"></input>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Longitude</label>
                        <input class="form-control" type="text" name="longitude"></input>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Konten</label>
                <textarea id="editor1" class="form-control" name="konten"></textarea>
            </div>
        </div>
    </div>

    <button class="btn btn-primary btn-block" type="submit">Submit</button>
</form>



<style type="text/css">
    .pickdate {
        background: transparent !important
    }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/vendor/pickadate/lib/themes/default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/vendor/pickadate/lib/themes/default.date.css">
<script src="<?php echo base_url() ?>template/assets/vendor/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/ckeditor/config.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/ckeditor/styles.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/pickadate/lib/picker.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/pickadate/lib/picker.date.js"></script>
<script>
CKEDITOR.replace( 'editor1', {
  extraPlugins: 'imageuploader'
});
$('.pickdate').pickadate({
    today: '',
    clear: '',
    close: '',
    format: 'yyyy-mm-dd',
    selectYears: true,
    selectMonths: true
})
</script>