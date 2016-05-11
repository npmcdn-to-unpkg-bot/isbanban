<div class="jumbotron small">
	<div class="container">
		<div class="bottom-content">
			<h1>Blogs</h1>
			<!-- <p class="lead">Leading text about blog here</p> -->
		</div>
	</div>
</div>


<div class="post">
	<div class="container">
		<div class="row">
			<div class="infinite-container">				
				<?php foreach($getAll as $item) { ?>
				<div class="col-sm-6 col-md-6 infinite-item">
					<?php if($item->path_foto) { ?>
					<div class="begin-post blog" style="background:url(<?php echo base_url() ?><?php echo $item->path_foto; ?>) no-repeat center center">
					<?php } else { ?>
					<div class="begin-post blog" style="background:url(http://unsplash.it/1280x500) no-repeat top center">
					<?php } ?>
						<a href="<?php echo base_url() ?>blog/detail/<?php echo $item->slug; ?>">
						<div class="shade"></div>
						<div class="title"><?php echo $item->judul; ?>
						</div>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>

			<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>
</div>

<script src="<?php echo base_url() ?>template/assets/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/waypoints/lib/shortcuts/infinite.min.js"></script>
<script>
var infinite = new Waypoint.Infinite({
    element: $('.infinite-container')[0],
    items: '.infinite-item',
    more: '.sparator a',
});
</script>