<!-- Modal -->
<div class="modal modal-isbanban fade" tabindex="-1" role="dialog" id="peopleModal">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>

			<?php foreach($getThis as $row) { ?>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-5">
						<?php if($row->path_foto) { ?>
							<img class="img-responsive" src="<?php echo base_url() ?><?php echo $row->path_foto; ?>" style="margin-bottom:10px">
						<?php } else { ?>
							<img class="img-responsive" src="<?php echo base_url() ?>template/assets/image/placeholder.png" style="margin-bottom:10px">
						<?php } ?>
					</div>

					<div class="col-sm-7">
						<p>
						<!-- Intro -->
						<?php echo $row->nama; ?> bergabung dengan ISBANBAN sejak bulan <?php echo $this->barnlibs->monthForHuman($row->bulan_masuk); ?> lalu.

						<!-- Pekerjaan -->
						<?php if($row->pekerjaan) { ?> Rutinitasnya sebagai <?php echo $row->pekerjaan; ?> tidak menghalanginya untuk terus aktif dan berkontribusi dengan ISBANBAN sampai saat ini. <?php } ?>
						
						<?php if($row->departemen_relawan) { echo $row->nama; ?>
						berperan sebagai <?php echo $row->posisi_relawan; ?> juga ikut bahu membahu bersama rekan-rekan di <?php echo $row->departemen_relawan; ?> dari chapter <?php echo $row->chapter_relawan."."; } ?> <br>

						<?php if($row->facebook_link || $row->twitter_link || $row->instagram_link) { ?>
								<?php echo $row->nama; ?> juga ada di media sosial loh! mari berteman di 
									<?php if($row->facebook_link) { ?>
										<a href="<?php echo $row->facebook_link; ?>" target="_blank">Facebook</a>

										 <?php if($row->instagram_link=="" && $row->instagram_link=="") { echo "."; } else { echo ","; } ?>

									<?php } ?>

									<?php if($row->twitter_link) { ?>
										<a href="<?php echo $row->twitter_link; ?>" target="_blank">Twitter</a>

										<?php if($row->instagram_link=="") { echo "."; } else { echo ","; } ?>
									<?php } ?>

									<?php if($row->instagram_link) { ?>
										<a href="<?php echo $row->instagram_link; ?>" target="_blank">Instagram</a>.
									<?php } ?>
							<?php } ?>
						</p>

						<p><b>Alasan bergabung dengan isbanban:</b><br>
						<?php echo $row->alasan; ?>
						</p>

						<p><b>Visi:</b><br>
						<?php echo $row->visi; ?>
						</p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>