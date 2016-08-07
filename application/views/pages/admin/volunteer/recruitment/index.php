<div class="panel">
    <div class="panel-heading">
        <div class="panel-title">
            Volunteer List
        </div>
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Chapter</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Nomor</th>
                    </tr>
                </thead>

                <tbody>
                	<?php $nomor=1; foreach($getAll as $row) { ?>
                	<tr>
                        <td><?php echo $nomor; ?></td>
                		<td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->chapter; ?></td>
                        <td><?php echo $row->alamat_pribadi; ?></td>
                        <td><?php echo $row->email; ?></td>
                		<td><?php echo $row->nomor_pribadi; ?></td>
                		<!-- <td>
                            <a href="<?php echo base_url() ?>admin/volunteer/edit/<?php echo $row->parameter_code; ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>            
                        </td> -->
                	</tr>
                	<?php $nomor++; } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/dataTables.bootstrap.css">
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/dataTables.bootstrap.min.js"></script>
<script>
// $("#data").DataTable();
</script>