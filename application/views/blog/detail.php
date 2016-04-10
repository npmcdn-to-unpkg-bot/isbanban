<?php foreach($getThis as $row) { ?>

<?php if($row->path_foto) { ?>
<div class="jumbotron blogpost" style="background:url(<?php echo base_url() ?><?php echo $row->path_foto; ?>) no-repeat center center;">
<?php } else { ?>
<div class="jumbotron blogpost" style="background:url(http://unsplash.it/1280x500) no-repeat center center;">
<?php } ?>

	<div class="shade white"></div>
</div>

<div class="single-post blog">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="meta">					
					<h1 class="title"><?php echo $row->judul; ?></h1>

					<div class="postdate">
						Posted: <?php echo $this->barnlibs->dateForHumanClean($row->created_at); ?>
					</div>
				</div>
			</div>

			<div class="col-sm-10 col-sm-offset-1">
				<div class="post">
					<?php echo $row->konten; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>


<div class="another-post blog">
	<div class="container">
		<h3>Another Post</h3>

		<div class="post">
			<div class="row">
				<?php foreach($getRandom as $item) { ?>
				<div class="col-sm-6 col-md-4">
					<div class="begin-post blog" style="background:url(<?php echo base_url() ?><?php echo $item->path_foto; ?>) no-repeat top center">
						<a href="<?php echo base_url() ?>blog/detail/<?php echo $item->slug; ?>">
						<div class="shade"></div>
						<div class="title"><?php echo $item->judul; ?>
						</div>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>