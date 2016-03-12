<div class="jumbotron bigger" style="background: url(<?php echo base_url() ?>template/assets/image/bg-event.png) no-repeat top center;">
	<div class="container">
		<h1>Events</h1>
		<p>Leading text event blog here</p>
		<hr>
	</div>
</div>


<div class="precontent">
	<div class="container">
		<h1>Mark your calendar</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam libero, quis nisi expedita perferendis voluptatem doloremque labore officiis aspernatur optio debitis placeat, atque, perspiciatis voluptas tempore. Cum repellendus, quas dolor.</p>
	</div>
</div>

<div class="post">
	<div class="container">
		<div class="event">
			<?php for($i=1; $i<5; $i++) { ?>
			<div class="timeline-item">
				<div class="timeline-icon">
					<i class="fa fa-star fa-2x"></i>
				</div>
				<div class="timeline-content <?php if($i%2 ==0) { ?> right <?php } ?>">
					<h3>LOREM IPSUM DOLOR</h3>

					<div class="timeline-text">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ratione, sapiente odit nostrum asperiores quasi iste. Odit non accusamus, magnam voluptates accusantium sit harum eum ipsam vel quisquam illum repellat.</p>

						<ul class="fa-ul">
							<li><i class="fa fa-li fa-calendar"></i> wew</li>
							<li><i class="fa fa-li fa-map-marker"></i> wew</li>
						</ul>

						<div class="text-center">
							<a href="" class="btn btn-primary btn-raised">View Detail</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>