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
					<?php $this->load->view('pages/blog/posts', array('item' => $item)); ?>
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