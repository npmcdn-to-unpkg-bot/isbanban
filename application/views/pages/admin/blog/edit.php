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


<?php foreach($getThis as $row) { ?>
<form method="post" enctype="multipart/form-data">
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">
                <div class="title">Gambar</div>
            </div>
        </div>

<!-- if have image -->
        <?php if($row->path_foto) { ?>
        <img style="height: 400px; margin:0px auto" class="img-responsive" src="<?php echo base_url() ?><?php echo $row->path_foto; ?>"></img>
        <?php } ?>


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
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label>Judul</label>
                        <input class="form-control" type="text" name="judul" value="<?php echo $row->judul; ?>"></input>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                            <option value="">-- Pilih Kategori --</option>
                            <?php foreach($getCategory as $item) { ?>
                            <option <?php if($row->kategori == $item->id) { echo "Selected"; } ?> value="<?php echo $item->id; ?>"><?php echo $item->nama; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Konten</label>
                <textarea id="editor1" class="form-control" name="konten"><?php echo $row->konten; ?></textarea>
            </div>
        </div>
    </div>

    <button class="btn btn-primary btn-block" type="submit">Submit</button>
</form>
<?php } ?>


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
$(".datatable").DataTable();
</script>