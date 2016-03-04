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
			<a href="javascript:void(0);" class="openModal" id="<?php echo $row->slug; ?>">
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


<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="peopleModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6">
						<img class="img-responsive img-full" src="http://placemi.com/400x250"></img>
						<div class="name">John Doe</div>
					</div>

					<div class="col-sm-6">
						<div class="table-responsive">
							<table class="table table-stripped">
								<tbody>
									<tr>
										<td><b>Jabatan</b></td>
										<td>Kota Tanggerang</td>
									</tr>

									<tr>
										<td><b>Departemen</b></td>
										<td>Dangdut</td>
									</tr>

									<tr>
										<td><b>Chapter</b></td>
										<td>Kota Tanggerang</td>
									</tr>
								</tbody>
							</table>

							<div class="post">
								<div class="title">Visi</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi</p>
							</div>

							<div class="post">
								<div class="title">Visi</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>


<script>
$(".openModal").click(function(){

	var essay_id = $(this).attr('id');
	console.log(essay_id);

	$.ajax({
          type : 'POST',
           url : '/people/detail/', // in here you should put your query 
          data : essay_id, // here you pass your id via ajax .
                     // in php you should use $_POST['post_id'] to get this value 
       success : function(r)
       {
              $('#peopleModal').show();  // put your modal id 
       },
       error: function(r)
       {
       		console.log(r);
       }
    });

})
</script>