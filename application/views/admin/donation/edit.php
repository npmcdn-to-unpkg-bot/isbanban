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

        <?php 
        if($this->input->post('test')) { 
            $orderdate = explode('.', $this->input->post('test'));
            $wew = count($orderdate);

            for($i=0; $i > $wew; $wew--) {
                echo $orderdate[i]; 
            }
        }
        ?>

        <?php foreach($getThis as $row) { ?>
        <form method="post">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <div class="title">Informasi</div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="<?php echo $row->donatur_nama; ?>">
                    </div>

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control moneyFormat" name="test">
                    </div>



                </div>
            </div>

            <button class="btn btn-primary btn-block" type="submit">Submit</button>
        </form>
        <?php } ?>
	</div>
</div>



<style type="text/css">
    .card { margin-bottom: 20px }
    .row .col-sm-8,
    .row .col-sm-4 {
        margin-bottom: 0px;
    }
</style>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/css/dataTables.bootstrap.css">
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>template/assets/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script>
$('.moneyFormat').mask('000.000.000.000.000,00');
$('.moneyFormat').cleanVal();
$(".datatable").DataTable();
</script>