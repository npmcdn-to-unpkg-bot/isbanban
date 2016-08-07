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

<?php foreach($getThis as $item) { ?>
<form method="post" enctype="multipart/form-data">
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                Gambar
            </div>
        </div>

        <?php if($item->path_foto) { ?>
        <img src="<?php echo base_url() ?><?php echo $item->path_foto; ?>" alt="" class="img-responsive img-center" style="height:400px; margin: 10px auto">
        <?php } ?>

        <div class="panel-body">
            <input type="file" name="gambar">
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                Informasi
            </div>
        </div>

        <div class="panel-body">
            <div class="form-group">
                <label>Judul</label>
                <input class="form-control" type="text" name="judul" value="<?php echo $item->judul; ?>"></input>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Lokasi</label>
                        <input class="form-control" type="text" name="lokasi" value="<?php echo $item->lokasi; ?>"></input>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tanggal</label>
                        <input class="form-control pickdate" type="text" name="tanggal" value="<?php echo $item->tanggal; ?>"></input>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Latitude</label>
                        <input class="form-control" type="text" name="latitude" value="<?php echo $item->latitude; ?>"></input>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Longitude</label>
                        <input class="form-control" type="text" name="longitude" value="<?php echo $item->longitude; ?>"></input>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Konten</label>
                <textarea id="editor1" class="form-control" name="konten"><?php echo $item->konten; ?></textarea>
            </div>
        </div>
    </div>

    <button class="btn btn-primary btn-block" type="submit">Submit</button>
</form>
<?php } ?>



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