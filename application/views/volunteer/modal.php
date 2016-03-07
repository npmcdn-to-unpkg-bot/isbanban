<!-- Modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="peopleModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<?php foreach($getThis as $row) { ?>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-6">
						<img class="img-responsive img-full" src="http://placemi.com/400x250"></img>
						<div class="name"><?php echo $row->nama; ?></div>
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
			<?php } ?>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div>