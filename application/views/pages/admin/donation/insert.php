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
            <strong>Whooops!</strong> Berhasil Menambahkan Data.
        </div>
        <?php } ?>

        <div class="row">
            <form method="post">
            <div class="col-sm-4">
                <div class="form-group">
                    <label>Tanggal Donasi</label>
                    <input type="text" class="form-control dateDonation" name="tanggal_donasi" style="background: white">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group is_confirmed" style="display: none;">
                    <label>Tanggal Konfirmasi</label>
                    <input type="text" class="form-control dateConfirmed" name="tanggal_konfirmasi" style="background: white">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                    <label>Status</label>
                    <select name="status_donasi" class="form-control read_status">
                        <option value="">-- Pilih Status --</option>
                        <option value="0">Unconfirmed</option>
                        <option value="1">Confirmed</option>
                    </select>
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
                            <input type="text" class="form-control" name="donatur_nama">
                        </div>

                        <div class="form-group">
                            <label>Nomor Telefon</label>
                            <div class="input-group">
                                <div class="input-group-addon">+62</div>
                                <input type="text" class="form-control" name="donatur_telefon">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="donatur_email">
                        </div>

                        <div class="form-group">
                            <label>Additional Message</label>
                            <textarea rows="5" class="form-control" name="donatur_pesan"></textarea>
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
                            <label>Jenis Donasi</label>
                            <select name="donasi_jenis" class="form-control kindDonation">
                                <option value="">-- Pilih --</option>
                                <?php foreach($getCategory as $item) { ?>
                                <option value="<?php echo $item->id; ?>"><?php echo $item->jenis; ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <script>
                            $(".kindDonation").change(function(){
                                var type = $(this).val();

                                if(type == 1) {
                                    $(".form-if-money").fadeOut(function(){
                                        $(".form-if-buku").fadeIn();
                                    });
                                } else if(type ==3){
                                    $(".form-if-buku").fadeOut(function(){
                                        $(".form-if-money").fadeIn();
                                    });
                                } else {
                                    $(".form-if-buku").fadeOut();
                                    $(".form-if-money").fadeOut();
                                }
                            });

                            $(".read_status").change(function(){
                                var type = $(this).val();

                                if(type == 0) {
                                    $(".is_confirmed").fadeOut();
                                } else {
                                    $(".is_confirmed").fadeIn();
                                }
                            });
                        </script>

                        <hr>


                        <div class="form-if-buku" style="display: none">
                            <div class="form-group">
                                <label>Banyak Buku</label>
                                <input type="text" class="form-control" name="donasi_banyak_buku">
                            </div>
                        </div>

                        <div class="form-if-money" style="display: none">
                            <div class="form-group">
                                <label>Jumlah Uang</label>
                                <div class="input-group">
                                    <div class="input-group-addon">Rp</div>
                                    <input type="text" class="form-control moneyFormat" id="default">
                                    <input type="hidden" class="realFormat" name="donasi_banyak_uang">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Donation Dari</label>
                                <div class="row">
                                    <div class="col-sm-6" style="margin-bottom: 0px">
                                        <input type="text" class="form-control" placeholder="Nomor Rekening" name="donatur_rekening">
                                    </div>

                                    <div class="col-sm-6" style="margin-bottom: 0px">
                                        <input type="text" class="form-control" placeholder="Nama Pemilik" name="donatur_pemilik">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Donasi Ke</label>
                                <select name="donasi_ke" class="form-control">
                                    <option value="">-- Pilih Rekening --</option>
                                    <?php foreach($getBank as $item) { ?>
                                    <option value="<?php echo $item->id; ?>">
                                        <?php echo $item->nama; ?> &mdash;
                                        <?php echo $item->nomor_rekening; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <button class="btn btn-primary btn-block" type="submit">Submit</button>
            </div>
            </form>
        </div>
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
var dateDonation;

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




// pick a date JS
var $input = $(".dateDonation").pickadate({
    today: '',
    clear: '',
    close: 'Close',
    format: 'yyyy-mm-dd',
    selectYears: true,
    selectMonths: true,
});

var $input1 = $(".dateConfirmed").pickadate({
    today: '',
    clear: '',
    close: 'Close',
    format: 'yyyy-mm-dd',
    selectYears: true,
    selectMonths: true,
});


var pickerDonation = $input.pickadate('picker');
var pickerConfirmed = $input1.pickadate('picker');


function checkDate() {
    if(!$(".dateDonation").val()=="") {
        pickerConfirmed.clear()
    }
}

$(".dateDonation").change(function(){
    dateDonation = pickerDonation.get('value');

    pickerConfirmed.set('min', dateDonation);
    checkDate();
});





</script>