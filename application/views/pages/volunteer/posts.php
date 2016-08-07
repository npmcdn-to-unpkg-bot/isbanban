<a class="infinite-item" href="javascript:void(0);" onclick="throwModal('<?php echo $row->slug; ?>');">
<div class="col-sm-3">
	<div class="people">
		<?php if($row->path_foto) { ?>
			<img class="img-responsive" src="<?php echo base_url() ?><?php echo $row->path_foto; ?>">
		<?php } else { ?>
			<img class="img-responsive" src="<?php echo base_url() ?>/template/assets/image/placeholder.png">
		<?php } ?>

		<div class="caption">
			<h4 class="name"><?php echo $row->nama; ?></h4>
		</div>
	</div>
</div>
</a>