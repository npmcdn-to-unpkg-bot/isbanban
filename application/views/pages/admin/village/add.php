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

        <form method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">Informasi</div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="nama"></input>
                        </div>

                        <div class="form-group">
                            <label>Lokasi</label>
                            <select class="form-control" name="lokasi">
                                <option value="">-- Pilih Lokasi --</option>
                                <?php foreach($getChapter as $row) { ?>
                                <option value="<?php echo $row->nama; ?>"><?php echo $row->nama; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-sm-6" style="margin-bottom:0px">
                                <div class="form-group">
                                    <label>Latitude</label>
                                    <input type="text" class="form-control" name="latitude"></input>
                                </div> 
                            </div>

                            <div class="col-sm-6" style="margin-bottom:0px">
                                <div class="form-group">
                                    <label>Longitude</label>
                                    <input type="text" class="form-control" name="longitude"></input>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
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
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Detail</label>
                            <textarea id="editor1" class="form-control" name="detail"></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <button class="btn btn-primary btn-block" type="submit">Submit</button>
            </div>
        </div>
        </form>
	</div>
</div>


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