<div class="container-fluid">
	<div class="side-body">

<!-- Alert Add Data -->
	<?php if($this->session->flashdata('success') == true) { ?>
	<div class="alert alert-success" role="alert">
	    <strong>Whooops!</strong> Berhasil Menambahkan Data.
	</div>
	<?php } ?>

<!-- Alert Update Data -->
    <?php if($this->session->flashdata('success-edit') == true) { ?>
    <div class="alert alert-success" role="alert">
        <strong>Whooops!</strong> Berhasil Mengubah Data.
    </div>
    <?php } ?>

	<div class="row">
		<div class="col-sm-12">
			<a href="<?php echo base_url() ?>admin/event/add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
		</div>
	</div>

	<div class="card">
	    <div class="card-body">
	        <table class="datatable table table-striped" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Event</th>
                        <th>Lokasi</th>
                        <th>Tanggal</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                	<?php $nomor=1; foreach($getAll as $item) { ?>
                	<tr>
                		<td><?php echo $nomor; ?></td>
                        <td><?php echo $item->judul; ?></td>
                        <td><?php echo $item->lokasi; ?></td>
                        <td><?php echo $item->tanggal; ?></td>
                        <td><?php echo $item->created_at; ?></td>
                        <td><?php echo $item->updated_at; ?></td>
                		<td>
                            <a href="<?php echo base_url() ?>admin/event/edit/<?php echo $item->parameter_code; ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>     
                        </td>
                	</tr>
                	<?php $nomor++; } ?>
                </tbody>
            </table>
	    </div>
	</div>

	</div>
</div>


<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/dataTables.bootstrap.css">
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/dataTables.bootstrap.min.js"></script>
<script>
$(".datatable").DataTable();
</script>