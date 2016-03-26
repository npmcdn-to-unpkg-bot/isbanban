<!-- <div class="jumbotron bigger" style="background: url(<?php echo base_url() ?>template/assets/image/bg-blog.jpg) no-repeat top center;"> -->
<div class="jumbotron bigger" style="background: url(http://unsplash.it/1280/800?random&blur) no-repeat center center;">
	<div class="container">
		<h1>About</h1>
		<p>Leading text about blog here</p>
		<hr>
	</div>
</div>


<section>
	<div class="container">
		<div class="row parent_sticky">
			<div class="col-md-3" id="sectionNav">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="#secProfile">Profile</a></li>
					<li><a href="#secVision">Vision</a></li>
				</ul>
			</div>

			<div class="col-md-9 col-md-offset-3">
				<section id="secProfile">
					<div class="page-header">
						<h1>Profile</h1>      
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam nihil ipsam adipisci repellat. Itaque ipsa temporibus ipsum quos officiis, sint asperiores dolores dolor inventore. Praesentium dolores quidem quisquam corporis. Recusandae.</p>					
				</section>

				<section id="secVision">
					<div class="page-header">
						<h1>Vision</h1>      
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam nihil ipsam adipisci repellat. Itaque ipsa temporibus ipsum quos officiis, sint asperiores dolores dolor inventore. Praesentium dolores quidem quisquam corporis. Recusandae.</p>					
				</section>
			</div>
		</div>
	</div>
</section>






<script src="<?php echo base_url() ?>template/assets/vendor/sticky-kit/jquery.sticky-kit.min.js"></script>
<script>
var $body   = $(document.body);
$body.scrollspy({
	target: '#sectionNav',
});

$("#sectionNav").stick_in_parent({
	parent: '.parent_sticky',
	offset_top: 20
});

</script>