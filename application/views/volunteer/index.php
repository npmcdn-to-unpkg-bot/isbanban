<div class="jumbotron bigger" style="background: url(<?php echo base_url() ?>template/assets/image/bg-people.jpg) no-repeat center center;">
	<div class="container">
		<h1>People</h1>
		<p>Leading text about people here</p>
		<hr>
	</div>
</div>


<div class="post">
	<div class="container">
		<div class="row">
			<?php
			foreach($getAll as $row) { ?>
			<a href="javascript:void(0);" onclick="throwModal('<?php echo $row->slug; ?>');">
			<div class="col-sm-3">
				<div class="people">
					<img class="img-responsive" src="http://placemi.com/600x600">
					<div class="caption">
						<h4 class="name"><?php echo $row->nama; ?></h4>
					</div>
				</div>
			</div>
			</a>
			<?php } ?>


			<div class="col-sm-12">
				<div class="sparator">
					<a href=""><i class="fa fa-circle-o-notch fa-spin fa-4x"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="modal_target"></div>



<script>
function throwModal(slug) {
    $.ajax({
        type    : 'POST', 
        url     : '<?php echo base_url(); ?>people/detail/'+slug,
        success : function(data){ 
           if(data) {
                $('#modal_target').html(data);
                $("#peopleModal").modal();
           }
        },
        error: function(r) {
        	console.log(r);
        }
    });
}
</script>