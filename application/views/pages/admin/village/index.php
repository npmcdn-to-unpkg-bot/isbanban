
<?php if($this->session->flashdata('success') == true) { ?>
<div class="alert alert-success" role="alert">
    <strong>Whooops!</strong> Berhasil Menambahkan Data.
</div>
<?php } ?>

<?php $this->load->view('partials/admin/panel-primary', array('url' => 'village/add')); ?>

<div class="panel">
    <div class="panel-body">
        <table class="datatable table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Latitude &amp; Longitude</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
            	<?php $nomor=1; foreach($getAll as $item) { ?>
            	<tr>
            		<td><?php echo $nomor; ?></td>
                    <td><?php echo $item->nama; ?></td>
                    <td><?php echo $item->lokasi; ?></td>
                    <td><u><?php echo $item->latitude; ?></u> &amp; <u><?php echo $item->longitude; ?></u></td>
                    <td><?php $this->barnlibs->dateForHuman($item->created_at) ?></td>
                    <td></td>
            		<td>
                        <a href="<?php echo base_url() ?>admin/village/edit/<?php echo $item->parameter_code; ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>     
                        <a href="javascript:void(0);" onclick="deleteThis('<?php echo $item->parameter_code; ?>')" class="btn btn-danger btn-xs" data-toggle="dropdown"><i class="fa fa-trash-o"></i></a>     
                    </td>
            	</tr>
            	<?php $nomor++; } ?>
            </tbody>
        </table>
    </div>
</div>


<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/dataTables.bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/vendor/pnotify/pnotify.custom.min.css">
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/vendor/pnotify/pnotify.custom.min.js"></script>
<script>
var parameter_code;
$(".datatable").DataTable();

function deleteThis(parameter_code) {
    new PNotify({
        title: 'Konfirmasi Permintaan Anda',
        text: 'Anda Yakin Ingin Hapus Bagian ini?',
        icon: 'glyphicon glyphicon-question-sign',
        hide: false,
        confirm: {
            confirm: true
        },
        buttons: {
            closer: false,
            sticker: false
        },
        history: {
            history: false
        },
        addclass: 'stack-modal',
        stack: {'dir1': 'down', 'dir2': 'right', 'modal': true}
    }).get().on('pnotify.confirm', function(){
        window.location.href = '<?php echo base_url() ?>' + 'admin/village/delete/' + parameter_code ;
    }).on('pnotify.cancel', function(){
        $(".ui-pnotify-modal-overlay").hide();
    });
}
</script>