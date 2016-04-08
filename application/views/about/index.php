<!-- <div class="jumbotron bigger" style="background: url(<?php echo base_url() ?>template/assets/image/bg-blog.jpg) no-repeat top center;"> -->
<div class="jumbotron bigger" style="background: url(http://unsplash.it/1280/800?random&blur) no-repeat center center;">
	<div class="container">
		<h1>About</h1>
		<p class="lead">Leading text about blog here</p>
		<hr>
	</div>
</div>

<section>
	<div class="container">
		<div class="row parent_sticky">
			<div class="col-md-3 stick_helper" id="sectionNav">
				<ul class="nav nav-pills nav-stacked">
					<li><a href="#secProfile">Profile</a></li>
					<li><a href="#secVision">Vision</a></li>
					<li><a href="#secOurProgram">Program</a></li>
					<li><a href="#secOurImpact">Impact</a></li>
				</ul>
			</div>

			<div class="col-md-9 col-md-offset-3">
				<section id="secProfile">
					<div class="page-header">
						<h1>Profile</h1>      
					</div>

					<h4>Bagaimana Kondisi Pendidikan di banten</h4>
					<p>
						Banten dalam segi pendidikan masih dinobatkan sebagai salah satu provinsi yang memiliki

kualitas pendidikan yang rendah di Indonesia. Badan Pusat Statistik Banten tahun 2013

menyebutkan sebanyak 312.409 anak tidak bersekolah dari 604.812 total anak di Banten.

Artinya 51,6 % anak tidak menikmati akses pendidikan. Angka penyumbang terbesar berasal

dari pelosok desa di Banten.

Rendahnya tingkat pendidikan di Banten juga menyebabkan sebanyak 337 ribu orang

mengalami buta huruf. Tidak hanya itu, rendahnya kualitas pendidikan ini menyebabkan

25.860 orang berada dibawah garis kemiskinan pada tahun 2015. Kemiskinan pada tahun

2015 meningkat 7,89 % dari tahun yang 2014 disebabkan oleh salah satunya karena faktor

rendahnya kualitas pendidikan di Banten khususnya di pelosok desa.

Rendahnya kualitas dan akses pendidikan di Banten memberikan dampak atas lemahnya

Indeks Pertumbuhan Manusia (IPM) di Banten yang hanya mencapai angka 69.89.

Penyumbang terbesar masih berasal dari pelosok desa yang minim akan akses pendidikan.

Penyebab terjadinya hal tersebut adalah karena adanya ketidakseimbangan kualitas pendidikan di kota dan desa yang membuat adanya pandangan “ketidakadilan pendidikan” antara kota dan desa.
					</p>

					<h4>Bagaimana Cara menjadi <em>A PART OF CHANGE</em></h4>
					<p>
						Berbagai pandangan atas adanya “ketidakadilan akses dan kualitas pendidikan antara kota

dan pelosok desa di Banten” membuat Istana Belajar Anak Banten (Isbanban) tergerak

untuk menjadi “A Part of Change” melalui potensi anak mudanya dalam menciptakan

akses dan kualitas pendidikan berkeadilan di pelosok desa Banten.

Data tahun 2013 menyebutkan bahwa Banten memiliki 212 ribu anak muda yang tersebar di

seluruh kabupaten/Kota. Hal tersebut membuat organisasi ini dipimpin dan digerakkan

langsung oleh anak muda atau disebut youth-led organization dengan basis kerelawanan

yang menerapkan social value “Care &amp; Share”. Kami selalu percaya bahwa anak muda

memiliki peranan penting untuk mengubah suatu hal menjadi lebih baik. Dalam hal ini kami

berani untuk menjadi ‘A Part of Change’ dengan mewadahi seluruh niat baik menjadi aksi

baik demi pendidikan yang lebih baik di pelosok desa Banten.
					</p>
				</section>

				<section id="secVision">
					<div class="page-header">
						<h1>Vision</h1>      
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam nihil ipsam adipisci repellat. Itaque ipsa temporibus ipsum quos officiis, sint asperiores dolores dolor inventore. Praesentium dolores quidem quisquam corporis. Recusandae.</p>					
				</section>

				<section id="secOurProgram">
					<div class="page-header">
						<h1>Our Program</h1>
					</div>

					<div class="row">
						<div class="col-sm-4">
							<p class="lead">ACCESS <br>
								"TAMAN BELAJAR"
							</p>
						</div>

						<div class="col-sm-4">
							<p class="lead">LITERACY <br>
								"MINGGU BELAJAR"
							</p>
						</div>

						<div class="col-sm-4">
							<p class="lead">QUALITY <br>
								"BEASISWA BELAJAR"
							</p>
						</div>
					</div>
				</section>


				<section id="secOurImpact">
					<div class="page-header">
						<h1>Our Impact</h1>
					</div>

					<p>
						Dampak adalah ukuran seberapa berhasil kami menciptakan sebuah gerakan. Ketiga

program yang kami rancang ditujukan untuk mencapai visi besar organisasi yaitu

“Menciptakan Akses &amp; Kualitas Pendidikan yang berkeadilan di Pelosok desa Banten”.

Program Beasiswa Belajar Isbanban memberikan long term impact pada 3 (tiga) aspek

diantaranya aspek “Pendidikan, Ekonomi dan Sosial”.
					</p>
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
	offset_top: 100
});

</script>