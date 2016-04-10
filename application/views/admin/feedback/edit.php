<div class="container-fluid">
	<div class="side-body">

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


        <?php foreach($getThis as $row) { ?>
        <form method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <div class="title">Gambar</div>
                            </div>
                        </div>

                        <div class="card-body">
                            <?php if($row->path_foto) { ?>
                            <img class="img-responsive" src="<?php echo base_url() ?><?php echo $row->path_foto; ?>" alt="">
                            <?php } ?>

                            <input type="file" name="gambar">
                        </div>
                    </div>
                </div>

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
                                <input class="form-control" type="text" name="nama" value="<?php echo $row->nama; ?>"></input>
                            </div>

                            <div class="form-group">
                                <label>Roles</label>
                                <input class="form-control" type="text" name="role" value="<?php echo $row->role; ?>"></input>
                            </div>

                            <div class="form-group">
                                <label>Detail To</label>
                                <select class="form-control" name="id_detail">
                                    <option value="">-- Pilih --</option>
                                    <?php foreach($getCategory as $item) { ?>
                                    <option <?php if($item->id == $row->id_detail) { echo "selected"; } ?> value="<?php echo $item->id; ?>"><?php echo $item->judul; ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Quotes</label>
                                <textarea class="form-control" name="quote"><?php echo $row->quote; ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn btn-primary btn-block" type="submit">Submit</button>
        </form>
        <?php } ?>
	</div>
</div>

<style type="text/css">
    .card { margin-bottom: 20px }
    .row .col-sm-8,
    .row .col-sm-4 {
        margin-bottom: 0px;
    }
</style>