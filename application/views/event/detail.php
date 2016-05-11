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
	<!-- <div class="meta">
		<div class="container">			
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">					
					<div class="col-sm-6">
						<div class="place">							
							<i class="fa fa-3x fa-building"></i> Location: <?php echo $row->lokasi; ?>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="place">							
							<i class="fa fa-3x fa-calendar"></i> Start: <?php echo $this->barnlibs->dateForHumanClean($row->tanggal); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	
	<div class="container">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="post">
					<div class="row">
						<div class="col-sm-4">
							<img src="<?php echo base_url() ?><?php echo $row->path_foto; ?>" alt="" class="img-responsive" style="margin-bottom:20px">
						</div>

						<div class="col-sm-8">
							<table class="table table-striped">
								<tbody>
									<tr>
										<td>Start</td>
										<td><?php echo $this->barnlibs->dateForHumanClean($row->tanggal); ?></td>
									</tr>
									<tr>
										<td>Location:</td>
										<td><?php echo $row->lokasi; ?></td>
									</tr>
								</tbody>
							</table>

							<?php echo $row->konten; ?>
						</div>
					</div>
				</div>

<!-- Shareholic -->
				<div class='shareaholic-canvas' data-app='share_buttons' data-app-id='24303855' expr:data-title='data:post.title' expr:data-link='data:post.url'></div>

<!-- Disquss Comment -->
				<hr>
				<div id="disqus_thread"></div>
				<script>
				var disqus_config = function () {
				this.page.url = 'http://isbanban.org';
				//this.page.identifier = PAGE_IDENTIFIER;
				};
				
				(function() { 
				var d = document, s = d.createElement('script');

				s.src = '//isbanban.disqus.com/embed.js';

				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
				})();
				</script>
				<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
			</div>
		</div>
	</div>
</div>
<?php } ?>