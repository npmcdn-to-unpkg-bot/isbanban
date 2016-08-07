<?php if($this->session->flashdata('SIR')) { ?>
<div class="alert alert-success" role="alert">
  <strong><?php echo $this->session->flashdata('SIR'); ?></strong>
</div>
<?php } ?>

<?php $this->load->view('partials/admin/panel-primary', array('url' => 'volunteer/add')); ?>

<div class="panel">
    <div class="panel-heading">
        <div class="panel-title">
            Data Relawan
        </div>
    </div>

    <div class="panel-body">
        <table class="datatable table table-striped" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Departemen</th>
                    <th>Chapter</th>
                    <th>Kode</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
            	<?php foreach($getAll as $row) { ?>
            	<tr
                <?php if(!$row->path_foto) { ?>
                class="info"
                <?php } ?>
                >
            		<td><?php echo $row->nama; ?></td>
            		<td><?php echo $row->departemen; ?></td>
            		<td><?php echo $row->chapter; ?></td>
                    <td><?php echo $row->kode; ?></td>
                    <td><?php $this->barnlibs->dateForHuman($row->created_at) ?></td>
                    <td><?php $this->barnlibs->dateForHuman($row->updated_at) ?></td>
            		<td>
                        <a href="<?php echo base_url() ?>admin/volunteer/view/<?php echo $row->parameter_code; ?>" class="btn btn-info btn-xs"><i class="fa fa-info-circle"></i></a>
                        <a href="<?php echo base_url() ?>admin/volunteer/edit/<?php echo $row->parameter_code; ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                        <a onclick="deleteThis('<?php echo $row->parameter_code; ?>')" href="javascript:void(0);" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                    </td>
            	</tr>
            	<?php } ?>
            </tbody>
        </table>
    </div>
</div>


<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/vendor/pnotify/pnotify.custom.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/dataTables.bootstrap.css">
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/vendor/pnotify/pnotify.custom.min.js"></script>
<script>
$(".datatable").DataTable({
    "pageLength": 250
});

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
        window.location.href = '<?php echo base_url() ?>' + 'admin/volunteer/delete/' + parameter_code ;
    }).on('pnotify.cancel', function(){
        $(".ui-pnotify-modal-overlay").hide();
    });
}
</script>