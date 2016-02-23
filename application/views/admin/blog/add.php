<div class="container-fluid">
	<div class="side-body">

<!-- Page  Title -->
        <div class="page-title">
            <span class="title">Blog</span>
            <div class="description">Tulis, Lihat dan edit blog</div>
        </div>

        <?php if(validation_errors() || $this->upload->display_errors()) { ?>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        Terjadi Kesalahan
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
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title">Gambar</div>
                    </div>
                </div>

                <div class="card-body">
                    <input type="file" name="gambar">
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title">Informasi</div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label>Judul</label>
                                <input class="form-control" type="text" name="judul"></input>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="form-control" name="kategori">
                                    <option value="">-- Pilih Kategori --</option>
                                    <?php foreach($getCategory as $row) { ?>
                                    <option value="<?php echo $row->id; ?>"><?php echo $row->nama; ?></option>
                                    <?php } ?>
                                </select>
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
$(".datatable").DataTable();
</script>