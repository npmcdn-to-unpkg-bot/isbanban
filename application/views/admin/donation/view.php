<div class="container-fluid">
	<div class="side-body">

    <?php foreach($getThis as $row) { ?>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    Information
                </div>

                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur consequatur at iusto itaque laborum, et ipsam, soluta explicabo doloremque, modi reiciendis totam consectetur. Iusto ullam velit necessitatibus, sed quos obcaecati.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
<!-- Personal Information -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header no-border">                    
                    <div class="card-title">
                        <div class="title">Personal Information</div>
                    </div>
                </div>

                <div class="card-body">
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
                            <td>Tanggal Donasi</td>
                            <td><?php echo $this->barnlibs->dateForHuman($row->donatur_created_at); ?></td>
                        </tr>

                        <tr>
                            <td>Tanggal Konfirmasi</td>
                            <td><?php echo $this->barnlibs->dateForHuman($row->donatur_confirmed_at); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>


<!-- General Information -->
        <div class="col-sm-6">
            <div class="card">
                <div class="card-header no-border">                    
                    <div class="card-title">
                        <div class="title">General Information</div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-stripped">
                        <tr>
                            <td>Nama Rekening</td>
                            <td><?php echo $row->donasi_nama_rekening; ?></td>
                        </tr>

                        <tr>
                            <td>Nomor Rekening</td>
                            <td><?php echo $row->donasi_nomor_rekening; ?></td>
                        </tr>

                        <tr>
                            <td>Jenis Donasi</td>
                            <td><?php echo $row->donatur_jenis; ?></td>
                        </tr>

<!-- If Books -->
                        <tr>
                            <td>Banyak</td>
                            <td><?php echo $row->telefon; ?></td>
                        </tr>

<!-- If Money -->
                        <tr>
                            <td>Banyak</td>
                            <td><?php echo $row->email; ?></td>
                        </tr>

                        <tr class="text-center">
                            <td colspan="2"  style="font-weight: normal">
                                <div class="panel" style="margin-bottom: -20px">
                                    <div class="panel-body">
                                        <?php echo $row->nama_bank; ?> <br>
                                        <?php echo $row->nama_rekening; ?> <br>
                                        <?php echo $row->nomor_rekening; ?>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
	
    <?php } ?>

	</div>
</div>

<style>
.table tr td:first-child {
    font-weight: bold;
    width: 40%;
}
</style>