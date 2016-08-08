<?php foreach($getThis as $row) { ?>

    <?php if($row->status == 0) { ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <div class="panel-title">
                        Peringatan
                    </div>
                </div>

                <div class="panel-body">
                    <p>
                        Status donasi masih dinyatakan <em>Pending</em>. Silahkan menghubungi donatur yang terhormat <strong><?php echo $row->donatur_nama; ?></strong> melalui nomor <strong><?php echo $row->telefon; ?></strong> atau alamat email <strong><?php echo $row->email; ?></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php } else { ?>

    <div class="panel">
        <div class="panel-body">
            <div class="pull-left">
                <a href="#" class="btn btn-black">
                    <i class="fa fa-file-pdf-o fa-fw"></i>
                    Generate PDF
                </a>

                <a href="#" class="btn btn-primary-alt">
                    <i class="fa fa-envelope-o fa-fw"></i> 
                    Deliver PDF
                </a>
            </div>

            <div class="pull-right">
                <a href="<?php echo base_url() ?>uploads/pdf/donation-request-<?php echo $row->confirm_code; ?>.pdf" target="_blank" class="btn btn-primary-alt">
                    <i class="fa fa-download"></i> Download PDF</a>
            </div>
        </div>
    </div>

    <?php } ?>

    <div class="row">
        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading no-border">                    
                    <div class="panel-title">
                        Personal Information
                    </div>
                </div>

                <div class="panel-body pd-0">
                    <table class="table table-stripped">
                        <tr>
                            <td>Nama</td>
                            <td><?php echo $row->donatur_nama; ?></td>
                        </tr>

                        <tr>
                            <td>Nomor Pribadi</td>
                            <td><?php echo $row->telefon; ?></td>
                        </tr>

                        <tr>
                            <td>Email</td>
                            <td><?php echo $row->email; ?></td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <p>Additional Message</p>

                                <p style="font-weight: normal">
                                    <?php echo $row->pesan; ?>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="panel">
                <div class="panel-heading no-border">                    
                    <div class="panel-title">
                        General Information
                    </div>
                </div>

                <div class="panel-body pd-0">
                    <table class="table table-stripped">
                        <tr>
                            <td>Confirm Code</td>
                            <td><strong><?php echo $row->confirm_code; ?></strong></td>
                        </tr>

                        <tr>
                            <td>Tanggal Donasi</td>
                            <td><?php echo $this->barnlibs->dateForHuman($row->donatur_created_at); ?></td>
                        </tr>

                        <tr>
                            <td>Tanggal Konfirmasi</td>
                            <td><?php echo $this->barnlibs->dateForHuman($row->donatur_confirmed_at); ?></td>
                        </tr>


                        <tr>
                            <td>Jenis Donasi</td>
                            <td><?php echo $row->donatur_jenis; ?></td>
                        </tr>

                        <tr>
                            <td>Jumlah</td>
                            <td>
                                <?php if($row->id_jenis == 3) { ?>
                                Rp. <?php echo number_format($row->donasi_banyak); ?>
                                <?php } else { ?>
                                <?php echo $row->donasi_banyak; ?>
                                <?php } ?>
                            </td>
                        </tr>


                        <?php if($row->id_jenis == 3) { ?>
                        <tr>
                            <td>Nama Rekening</td>
                            <td><?php echo $row->donasi_nama_rekening; ?></td>
                        </tr>

                        <tr>
                            <td>Nomor Rekening</td>
                            <td><?php echo $row->donasi_nomor_rekening; ?></td>
                        </tr>

                        <tr class="text-center">
                            <td colspan="2"  style="font-weight: normal">
                                <div class="panel" style="margin-bottom: -20px">
                                    <div class="panel-body pd-0">
                                        <?php echo $row->nama_bank; ?> <br>
                                        <?php echo $row->nama_rekening; ?> <br>
                                        <?php echo $row->nomor_rekening; ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<style>
table tr td:first-child {
    width: 30%;
}
</style>