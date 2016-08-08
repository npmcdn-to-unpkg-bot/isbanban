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
                Gambar
            </div>
        </div>

        <div class="panel-body">
            <div class="alert alert-info">
                    <b>Psss..</b> for a better result please make sure the image dimension is 150x150
            </div>

            <?php if($row->thumbnail) { ?>
            <div class="form-group">
                <img src="<?php echo base_url() ?><?php echo $row->thumbnail; ?>" alt="" class="img-responsive" style="margin: 10px auto">
            </div>
            <?php } ?>

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
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" type="text" name="partner_name" value="<?php echo $row->name; ?>" required>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="partner_category" required>
                            <option value="">-- Pilih Kategori --</option>
                            <?php foreach($getCategory as $item) { ?>
                            <option <?php if($row->category_id == $item->id) { echo "selected"; } ?> value="<?php echo $item->id; ?>"><?php echo $item->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Link Url(s)</label>
                        <input type="text" class="form-control" name="partner_url" value="<?php echo $row->link; ?>" placeholder="http://" required>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-primary btn-block" type="submit">Submit</button>
    </div>
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