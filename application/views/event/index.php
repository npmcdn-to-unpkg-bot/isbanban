<div class="jumbotron bigger" style="background: url(<?php echo base_url() ?>template/assets/image/bg-event.png) no-repeat top center;">
	<div class="container">
		<h1>Events</h1>
		<p>Leading text event blog here</p>
		<hr>
	</div>
</div>


<div class="precontent event">
	<div class="container">
		<h1>Mark your calendar</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit repellat voluptatibus reprehenderit et ratione.</p>
	</div>
</div>

<div class="post">
	<div class="container">
		<div class="event">
			<?php 
			$i=0;
			foreach($getAll as $row) {
		 	?>
			<div class="timeline-item">
				<div class="timeline-icon">
					<span>
						<?php echo $this->barlibs->getMonth($row->tanggal); ?>
					</span>
					<span>
						<?php echo $this->barlibs->getDate($row->tanggal); ?>
					</span>
				</div>
				<div class="timeline-content <?php if($i%2 ==0) { ?> right <?php } ?>">
					<h4><?php echo $row->title; ?></h4>

					<div class="timeline-text">
						<?php echo $row->konten; ?>

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
	</div>
</div>