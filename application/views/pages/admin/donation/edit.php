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

    
        <?php foreach($getThis as $row) { ?>
        <div class="row">
            <form method="post">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Tanggal Donasi</label>
                    <input type="text" class="form-control" value="<?php echo $this->barnlibs->dateForHuman($row->donatur_created_at); ?>" readonly>
                    <script>
                        var dateDonation = '<?php echo $row->donatur_created_at; ?>';
                    </script>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Kode Konfirmasi</label>
                    <input type="text" class="form-control" value="<?php echo $row->confirm_code; ?>" readonly>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <?php if($row->status ==0) { ?>
                    <label>Status</label>
                    <select name="status_donasi" class="form-control">
                        <option <?php if($row->status == 1) { echo "selected"; } ?> value="1">Confirmed</option>
                    </select>
                    <?php } else { ?>
                    <input type="hidden" value="<?php echo $row->status; ?>" name="status_donasi">
                    <?php } ?>
                </div>
            </div>



<!-- Personal Information -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">Personal Information</div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" value="<?php echo $row->donatur_nama; ?>" name="donatur_nama">
                        </div>

                        <div class="form-group">
                            <label>Nomor Telefon</label>
                            <div class="input-group">
                                <div class="input-group-addon">+62</div>
                                <input type="text" class="form-control" value="<?php echo $row->telefon; ?>" name="donatur_telefon">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" value="<?php echo $row->email; ?>" name="donatur_email">
                        </div>

                        <div class="form-group">
                            <label>Additional Message</label>
                            <textarea name="donatur_pesan" rows="5" class="form-control"><?php echo $row->pesan; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>


<!-- General Information -->
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">General Information</div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Tanggal Konfirmasi</label>
                            <input type="text" class="form-control dateConfirmed"
                            <?php if($row->donatur_confirmed_at == "0000-00-00") { ?>
                            value = "<?php echo $row->donatur_created_at; ?>"
                            <?php } ?>
                            name="tanggal_konfirmasi" style="background: transparent">
                        </div>

                        <div class="form-group">
                            <label>Jenis Donasi</label>
                            <input type="text" class="form-control" value="<?php echo $row->donatur_jenis; ?>" readonly>
                            <input type="hidden" name="jenis_donasi" value="<?php echo $row->id_jenis; ?>">
                        </div>

                        <hr>

                        <?php if($row->id_jenis == 1) { ?>                           
                        <div class="form-group">
                            <label>Banyak Buku</label>
                            <input type="text" class="form-control" value="<?php echo $row->donasi_banyak; ?>" name="donasi_banyak_buku">
                        </div>
                        <?php } ?>

                        <?php if($row->id_jenis == 3) { ?>
                        <div class="form-group">
                            <label>Jumlah Uang</label>
                            <div class="input-group">
                                <div class="input-group-addon">Rp</div>
                                <input type="text" id="default" class="form-control moneyFormat" value="<?php echo $row->donasi_banyak; ?>">
                                <input type="hidden" class="realFormat" name="donasi_banyak_uang" value="<?php echo $row->donasi_banyak; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Donation Dari</label>
                            <div class="row">
                                <div class="col-sm-6" style="margin-bottom: 0px">
                                    <input type="text" class="form-control" value="<?php echo $row->donasi_nomor_rekening; ?>" placeholder="Nomor Rekening" name="donatur_rekening">
                                </div>

                                <div class="col-sm-6" style="margin-bottom: 0px">
                                    <input type="text" class="form-control" value="<?php echo $row->donasi_nama_rekening; ?>" placeholder="Pemilik Rekening" name="donatur_pemilik">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Donasi Ke</label>
                            <select name="donasi_ke" class="form-control">
                                <option value="">-- Pilih Rekening --</option>
                                <?php foreach($getBank as $item) { ?>
                                <option <?php if($row->donasi_transfer == $item->id) { echo "Selected"; } ?> value="<?php echo $item->id; ?>">
                                    <?php echo $item->nama; ?> &mdash;
                                    <?php echo $item->nomor_rekening; ?>
                                </option>
                                <?php } ?>
                            </select>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <button class="btn btn-primary btn-block" type="submit">Submit</button>
            </div>
            </form>
        </div>
        <?php } ?>
	</div>
</div>



<style type="text/css">
    .select {
        border-radius: none;
    }
    .card { margin-bottom: 20px }
    .row .col-sm-8,
    .row .col-sm-4 {
        margin-bottom: 0px;
    }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/dataTables.bootstrap.css">
<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/vendor/pickadate/lib/themes/default.css">
<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/vendor/pickadate/lib/themes/default.date.css">
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/autoNumeric/autoNumeric.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/pickadate/lib/picker.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/pickadate/lib/picker.date.js"></script>
<script>
$(".moneyFormat").autoNumeric('init',{
    aSep: '.',
    dGroup: '3',
    aDec: " ",
    aPad: false
});

$("#default").bind('blur focusout keypress keyup', function() {
    var realValue = $("#default").autoNumeric('get');

    $(".realFormat").val(realValue);
});

$(".datatable").DataTable();
$(".dateConfirmed").pickadate({
    today: '',
    clear: '',
    close: 'Close',
    format: 'yyyy-mm-dd',
    selectYears: true,
    selectMonths: true,
    min : dateDonation
});
</script>