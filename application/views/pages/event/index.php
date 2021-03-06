<div class="jumbotron small">
	<div class="container">
		<div class="bottom-content">
			<h1>Events</h1>
			<p class="lead">Reach our events in various activities at Istana Belajar Anak Banten</p>
		</div>
	</div>
</div>

<div class="post">
	<div class="container">
		<div class="event infinite-container">
			<?php 
			$i=0;
			foreach($getAll as $row) {
		 	?>
			<div class="timeline-item">
				<div class="timeline-icon">
					<span>
						<?php echo $this->barnlibs->getMonth($row->tanggal); ?>
					</span>
					<span>
						<?php echo $this->barnlibs->getDate($row->tanggal); ?>
					</span>
				</div>

				<div class="timeline-content <?php if($i%2 ==0) { ?> right <?php } ?>">
					<h4><?php echo $row->judul; ?></h4>

					<div class="timeline-text">
						<p>
							Dont miss it and we waiting you at <?php echo $row->judul; ?>
						</p>

						<ul class="fa-ul">
							<li><i class="fa fa-li fa-map-marker"></i> <?php echo $row->lokasi; ?></li>
						</ul>

						<div class="text-left">
							<a href="<?php echo base_url() ?>event/detail/<?php echo $row->slug; ?>" class="btn btn-primary btn-raised">View Detail</a>
						</div>
					</div>
				</div>
			</div>
			<?php $i++; } ?>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<?php echo $this->pagination->create_links(); ?>
			</div>
		</div>
	</div>
</div>

<script src="<?php echo base_url() ?>template/assets/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/waypoints/lib/shortcuts/infinite.min.js"></script>
<script>
var infinite = new Waypoint.Infinite({
    element: $('.infinite-container')[0],
    items: '.timeline-item',
    more: '.sparator a',
});
</script>