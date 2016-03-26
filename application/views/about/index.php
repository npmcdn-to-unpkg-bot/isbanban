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
		<div class="row">
			<div class="col-md-3" id="sectionNav">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="#secProfile">Profile</a></li>
					<li><a href="#secVision">Vision</a></li>
				</ul>
			</div>

			<div class="col-md-9">
				<section id="secProfile">
					<h1>Profile</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam nihil ipsam adipisci repellat. Itaque ipsa temporibus ipsum quos officiis, sint asperiores dolores dolor inventore. Praesentium dolores quidem quisquam corporis. Recusandae.</p>					
				</section>

				<section id="secVision">
					<h1>Vision</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam nihil ipsam adipisci repellat. Itaque ipsa temporibus ipsum quos officiis, sint asperiores dolores dolor inventore. Praesentium dolores quidem quisquam corporis. Recusandae.</p>					
				</section>
			</div>
		</div>
	</div>
</section>




<style>
section#secProfile,
section#secVision {
	height: 1000px;
}

#sectionNav.affix {
	position: fixed;
	top:70px;
}
</style>


<script>
var $body   = $(document.body);

$body.scrollspy({
	target: '#sectionNav',
});

$('#sectionNav').affix({
  offset: {
    top: 235
  }
});
</script>