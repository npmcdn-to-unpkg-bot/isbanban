<?php foreach($getThis as $row) { ?>
<div class="jumbotron solid">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h1><?php echo $row->judul; ?></h1>
				<div class="postdate">
					Posted: <?php echo $this->barnlibs->dateForHumanClean($row->created_at); ?>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="single-post event">
	<div class="meta">
		<div class="container">			
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">					
					<div class="col-sm-6">
						<div class="place">							
							<i class="fa fa-4x fa-building"></i> This events will be held on <?php echo $row->lokasi; ?>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="place">							
							<i class="fa fa-4x fa-calendar"></i> This events will start at <?php echo $row->tanggal; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="post">
					<?php echo $row->konten; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>