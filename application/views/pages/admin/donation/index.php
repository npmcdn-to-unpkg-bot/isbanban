<!-- Alert Add Data -->
<?php if($this->session->flashdata('success')) { ?>
<div class="alert alert-success" role="alert">
    <strong>Whooops!</strong> Berhasil Menambahkan Data.
</div>
<?php } ?>

<!-- Alert Update Data -->
<?php if($this->session->flashdata('success-edit')) { ?>
<div class="alert alert-success" role="alert">
    <strong>Whooops!</strong> Berhasil Mengubah Data.
</div>
<?php } ?>

<?php $this->load->view('partials/admin/panel-primary', array('url' => 'donation/add')); ?>

<div class="panel">
    <div class="panel-body">
        <table class="datatable table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Donasi</th>
                    <th>Status</th>
                    <th>Confirm Code</th>
                    <th>Created</th>
                    <th>Confirmed</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
            	<?php $nomor=1; foreach($getAll as $item) { ?>
            	<tr
                <?php if($item->status == 0) { ?>
                class="warning"
                <?php } ?>
                >
            		<td><?php echo $nomor; ?></td>
                    <td><?php echo $item->nama; ?></td>
                    <td><?php echo $item->donasi_jenis; ?></td>
                    <td>
                        <?php 
                        if($item->status==0) { echo "Unconfirmed"; } else { echo "Confirmed"; }
                        ?>
                    </td>
                    <td><?php echo $item->confirm_code; ?></td>
                    <td><?php $this->barnlibs->dateForHuman($item->donasi_created_at) ?></td>
                    <td><?php $this->barnlibs->dateForHuman($item->confirmed_at) ?></td>
            		<td>
                        <a href="<?php echo base_url() ?>admin/donation/view/<?php echo $item->parameter_code; ?>" class="btn btn-info btn-xs"><i class="fa fa-info-circle"></i></a>

                        <a href="<?php echo base_url() ?>admin/donation/edit/<?php echo $item->parameter_code; ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>

                        <!-- <a onclick="deleteThis('<?php echo $item->parameter_code; ?>')" href="javascript:void(0);" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a> -->
                    </td>
            	</tr>
            	<?php $nomor++; } ?>
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
        window.location.href = '<?php echo base_url() ?>' + 'admin/donation/delete/' + parameter_code ;
    }).on('pnotify.cancel', function(){
        $(".ui-pnotify-modal-overlay").hide();
    });
}
</script>