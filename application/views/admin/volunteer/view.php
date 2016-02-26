<div class="container-fluid">
	<div class="side-body">

        <?php foreach($getThis as $row) { ?>
        <div class="row">
            <div class="col-sm-6">
<!-- Personal Information -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">Personal Information</div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td><?php echo $row->nama; ?></td>
                                </tr>

                                 <tr>
                                    <td>Tempat, Tanggal Lahir</td>
                                    <td><?php echo $row->tempat_lahir; ?>, <?php echo $row->tanggal_lahir; ?></td>
                                </tr>

                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td><?php echo $row->jenis_kelamin; ?></td>
                                </tr>

                                <tr>
                                    <td>Alamat</td>
                                    <td><?php echo $row->alamat_pribadi; ?></td>
                                </tr>

                                <tr>
                                    <td>Agama</td>
                                    <td><?php echo $row->agama; ?></td>
                                </tr>

                                <tr>
                                    <td>Golongan Darah</td>
                                    <td><?php echo $row->golongan_darah; ?></td>
                                </tr>

                                <tr>
                                    <td>Nomor Telefon</td>
                                    <td><?php echo $row->nomor_pribadi; ?></td>
                                </tr>

                                <?php if($row->pekerjaan) { ?>
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td><?php echo $row->pekerjaan; ?></td>
                                </tr>
                                <?php } ?>

                                <?php if($row->asal) { ?>
                                <tr>
                                    <td>Asal Sekolah</td>
                                    <td><?php echo $row->asal; ?></td>
                                </tr>
                                <?php } ?>


                                <tr>
                                    <td>Alamat Orangtua</td>
                                    <td><?php echo $row->alamat_orangtua; ?></td>
                                </tr>

                                <tr>
                                    <td>Nomor Orangtua</td>
                                    <td><?php echo $row->nomor_orangtua; ?></td>
                                </tr>

                                <tr>
                                    <td>Media Sosial</td>
                                    <td>
                                        <?php if($row->facebook_link && $row->facebook_link !== "-") { ?>
                                        <a class="btn btn-default" href="<?php echo $row->facebook_link; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                                        <?php } ?>

                                        <?php if($row->twitter_link && $row->twitter_link !== "-") { ?>
                                        <a class="btn btn-default" href="<?php echo $row->twitter_link; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                                        <?php } ?>


                                        <?php if($row->instagram_link && $row->instagram_link !== "-") { ?>
                                        <a class="btn btn-default" href="<?php echo $row->instagram_link; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-sm-6">
<!-- General Information -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title">General Information</div>
                        </div>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td>Kode Relawan</td>
                                    <td><span class="text-primary"><?php echo $row->kode; ?></span></td>
                                </tr>

                                <tr>
                                    <td>Chapter</td>
                                    <td><?php echo $row->chapter; ?></td>
                                </tr>

                                <tr>
                                    <td>Bergabung</td>
                                    <td><?php echo $row->bulan_masuk; ?></td>
                                </tr>

                                <?php if($row->posisi) { ?>
                                <tr>
                                    <td>Posisi</td>
                                    <td><?php echo $row->posisi; ?></td>
                                </tr>
                                <?php } ?>

                                <?php if($row->departemen) { ?>
                                <tr>
                                    <td>Departemen</td>
                                    <td><?php echo $row->departemen; ?></td>
                                </tr>
                                <?php } ?>

                                 <tr>
                                    <td>Visi</td>
                                    <td><?php echo $row->visi; ?></td>
                                </tr>

                                 <tr>
                                    <td>Alasan Bergabung</td>
                                    <td><?php echo $row->alasan; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        <?php } ?>        
	</div>
</div>


<style type="text/css">
    table tr td {
        vertical-align: middle !important;
        text-transform: capitalize;
    }

    table tr td:first-child {
        font-weight: bold;
        width: 30%;
    }

    .card {
        margin-bottom: 20px;
    }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/dataTables.bootstrap.css">
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/dataTables.bootstrap.min.js"></script>
<script>
$(".datatable").DataTable({
    "pageLength": 250
});
</script>