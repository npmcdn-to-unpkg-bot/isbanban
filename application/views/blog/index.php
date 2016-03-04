<div class="jumbotron bigger" style="background: url(<?php echo base_url() ?>template/assets/image/bg-blog.jpg) no-repeat top center;">
	<div class="container">
		<h1>Blogs</h1>
		<p>Leading text about blog here</p>
		<hr>
	</div>
</div>


<div class="post">
	<div class="container">
		<div class="row">
			<?php for($i=0; $i<12; $i++) { ?>
			<div class="col-sm-6 col-md-4">
				<div class="begin-post blog" style="background:url(http://placemi.com/1280x500) no-repeat top center">
					<a href="<?php echo base_url() ?>blog/detail/default">
					<div class="shade"></div>
					<div class="title">Jumping fox
					</div>
					</a>
				</div>
			</div>
			<?php } ?>

			<div class="col-sm-12">
				<div class="sparator">
					<a href="#"><i class="fa fa-circle-o-notch fa-spin fa-4x"></i></a>
				</div>
			</div>
		</div>	
	</div>
</div>