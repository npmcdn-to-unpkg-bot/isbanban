<div class="container-fluid">
	<div class="side-body">
		
		<div class="card">
		    <div class="card-header">
		        <div class="card-title">
		            <div class="title">Data Relawan</div>
		        </div>
		    </div>

		    <div class="card-body">
		        <table class="datatable table table-striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Chapter</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>Nomor</th>
                            <th></th>
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
</div>


<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/dataTables.bootstrap.css">
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/dataTables.bootstrap.min.js"></script>
<script>
$(".datatable").DataTable();
</script>