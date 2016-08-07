<header class="navbar-fixed-top navbar-<?php if($role=='normal') { echo "default"; } else { echo "inverse"; } ?>">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url() ?>">
				<img class="img-responsive" src="<?php echo base_url() ?>template/assets/image/typetext-black.png"></img>
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li <?php if($current =='home') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>">home</a></li>
				<li <?php if($current =='about') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>about">about</a></li>
				<li <?php if($current =='people') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>people">people</a></li>
				<li <?php if($current =='village') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>village">village</a></li>
				<li <?php if($current =='blog') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>blog">blog</a></li>
				<li <?php if($current =='event') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>event">event</a></li>
				<li <?php if($current =='donate') { ?> class="active" <?php } ?>><a href="<?php echo base_url() ?>donate">donate</a></li>
			</ul>
		</div>
	</div>


<!-- Pull Right Navigation -->
	<div class="navmenu navmenu-default navmenu-fixed-right offcanvas">
		<ul class="nav navmenu-nav">
			<li><a href="<?php echo base_url() ?>">home <i class="fa fa-fw fa-home pull-right"></i></a></li>
			<li><a href="<?php echo base_url() ?>about">about <i class="fa fa-fw fa-info-circle pull-right"></i></a></li>
			<li><a href="<?php echo base_url() ?>people">people <i class="fa fa-fw fa-group pull-right"></i></a></li>
			<li><a href="<?php echo base_url() ?>village">village <i class="fa fa-fw fa-building pull-right"></i></a></li>
			<li><a href="<?php echo base_url() ?>blog">blog <i class="fa fa-fw fa-pencil pull-right"></i></a></li>
			<li><a href="<?php echo base_url() ?>event">event <i class="fa fa-fw fa-calendar pull-right"></i></a></li>
			<li><a href="<?php echo base_url() ?>donate">donate <i class="fa fa-fw fa-bank pull-right"></i></a></li>
		</ul>
	</div>
</header>