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
							<i class="fa fa-3x fa-building"></i> This events will be held on <?php echo $row->lokasi; ?>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="place">							
							<i class="fa fa-3x fa-calendar"></i> This events will start at <?php echo $this->barnlibs->dateForHumanClean($row->tanggal); ?>
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
					<div class="row">
						<div class="col-sm-4">
							<img src="<?php echo base_url() ?><?php echo $row->path_foto; ?>" alt="" class="img-responsive">
						</div>

						<div class="col-sm-8">
							<?php echo $row->konten; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>