<!-- <div class="jumbotron bigger" style="background: url(<?php echo base_url() ?>template/assets/image/bg-donation.jpg) no-repeat center center;"> -->
<div class="jumbotron bigger" style="background: url(http://unsplash.it/1280/800?random&blur) no-repeat center center;">
	<div class="container">
		<h1>Donation</h1>
		<p class="lead">Your donation help us to make access of education through builiding a learning center and teaching for 455 children in 8 rural areas of Banten</p>
		<hr>
	</div>
</div>

<div class="precontent donation donation-info">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Counting From Our Bank</h1>
			</div>
			<div class="col-sm-6 poin">
				<h2 class="bigger">
				Rp. <span class="money moneyFormat"><?php foreach($totalMoney as $item) {
						echo $item->total_donasi_uang;
					} ?></span>
				</h2>
				<p>Cash</p>
			</div>

			<div class="col-sm-6 poin">
				<h2 class="bigger book">
					<?php foreach($totalBook as $item) {
						echo $item->total_donasi_uang;
					} ?>
				</h2>
				<p>Books</p>
			</div>
		</div>
	</div>
</div>

<section>
	<div class="container">
		<div class="row parent_sticky">
			<div class="col-md-7 col-sm-6">
				<div class="post-text-content">
					<p>
						Melihat anak-anak di pelosok desa Banten dapat menikmati suasana belajar yang nyaman,
						kaya akan wawasan pengetahuan dan memiliki kesempatan untuk melanjutkan belajar
						adalah mimpi yang kita sedang bangun melalui Istana Belajar Anak Banten agar menjadi
						Istana bagi anak untuk mendapatkan akses dan kesempatan belajar di pelosok desa.
						Ini kesempatanmu! Mari wujudkan Istana Belajar bagi anak di pelosok desa Banten
						dengan <b>ubah niat baikmu menjadi aksi baik melalui berdonasi</b>. Dana yang masuk akan
						kami alokasikan untuk pelaksanaan 3 (tiga) program Isbanban yang termasuk pada aspek
						<b>Access</b>, <b>Literacy</b> &amp; <b>Quality</b>, diantaranya adalah :
					</p>
				</div>

<!-- Program 1 -->
				<hr>
				<div class="post-text-content">
					<h3>Building Access melalui program Taman Belajar</h3>
					<p>
						Kami telah mendirikan 8 Taman Belajar di 8 desa binaan. Berikut alamat Taman Baca
						isbanban yang tersebar di 7 kabupaten/kota :
					</p>

					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Alamat Lokasi</th>
								<th>Domisili</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>Kp. Cempaka Salam, Desa Saninten</td>
								<td>Kabupaten Pandeglang</td>
							</tr>

							<tr>
								<td>Kp.Sanding, Desa Sindangsari, Kecamatan Sajira</td>
								<td>Kabupaten Lebak</td>
							</tr>

							<tr>
								<td>Kp.Salinggara, Desa Sayar, Kecamatan Tak–takan,</td>
								<td>Kota Serang</td>
							</tr>

							<tr>
								<td>Kp.Tigamaya, Desa Telagaluhur, Kecamatan Waringinkurung</td>
								<td>Kabupaten Serang</td>
							</tr>

							<tr>
								<td>Kp,Sukamaju, Desa Citasuk, Kecamatan Padarincang</td>
								<td>Kabupaten Serang</td>
							</tr>

							<tr>
								<td>Kp. Cipala, Desa Lebak Gede, Kecamatan Pulo Merak</td>
								<td>Kota Cilegon</td>
							</tr>

							<tr>
								<td>Kp.Marga Sari RT.04/08 Kelurahan Curug Kulon, Kecamatan Curug</td>
								<td>Kabupaten Tangerang</td>
							</tr>

							<tr>
								<td>Jalan Aria Putra Gg. Swadaya 5, No. 45 Kedaung, Pamulang</td>
								<td>Tangerang Selatan</td>
							</tr>
						</tbody>
					</table>

					<p>
						Untuk menjamin keberlanjutan program tersebut, Donasi yang masuk akan kami alokasikan
						untuk :
					</p>

					<ul>
						<li>Perawatan Taman Belajar</li>
						<li>Dekorasi Taman Belajar</li>
						<li>Pembaharuan buku bacaan anak</li>
					</ul>
				</div>

<!-- Program 2 -->
				<hr>
				<div class="post-text-content">
					<h3>Encourage Literacy melalui program Minggu Belajar</h3>
					<p>
						Donasi selanjutnya akan kami alokasikan untuk program pengajaran yang dilakukan oleh
						lebh dari 300 relawan Kakak Pengajar yang setiap hari minggu memberikan waktu dan
						semangatnya untuk mengajarkan pendidikan literasi bagi 455 anak di 8 desa binaan
						Isbanban.
					</p>

					<p>
						Donasi yang masuk akan dialokasikan untuk :
						<ul>
							<li>Pembelian Media Belajar Mengajar</li>
							<li>Subsidi Transportasi Relawan di 7 kabupaten/kota setiap minggu</li>
							<li>Kebutuhan Konsumsi Ringan Relawan dan Adik Binaan.</li>
						</ul>
					</p>

					<p>
						Kamu bisa berkenalan dengan 300 lebih relawan Isbanban di 7 chapter <a href="<?php echo base_url() ?>people">disini</a>
					</p>
				</div>

<!-- Program 3 -->
				<hr>
				<div class="post-text-content">
					<h3>QUALITY – BEASISWA BELAJAR</h3>
					<p>
						Donasimu juga akan kami alokasikan untuk program Beasiswa Belajar bagi adik binaan
						Isbanban yang memiliki potensi untuk mengembangkan minat dan bakatnya.
						Beasiswa ini bernama “Passionate Scholarship”. Sebuah beasiswa pelatihan dan
						pengembangan minat dan bakat anak berdasarkan 9 Multiple Intelligences, yaitu : Linguistik,
						Logis Matematis, Spasial, Kinestetis, Musik, Interpersonal, Intrapersonal, Naturalis, dan
						Eksistensialis.
					</p>

					<p>
						Kami memberikan Beasiswa Belajar kepada calon penerima beasiswa berdasarkan indikator
						dibawah ini :

						<ol>
							<li>Memiliki minat &amp; bakat yang tinggi.</li>
							<li>Kemampuan ekonomi keluarga lemah.</li>
							<li>Tingginya motivasi calon penerima beasiswa.</li>
						</ol>
					</p>

					<p>
						Kami akan menggunakan dana donasi untuk keperluan <b>Biaya sekolah/anak untuk
						melanjutkan pendidikan ke jenjang perkuliahan yang sesuai dengan minat dan bakatnya,
						atau biaya private school berbentuk pelatihan skill</b>
					</p>

					<p>
						Beasiswa ini di desain khusus untuk menjamin sustainability impact terhadap proses
						peningkatan kualitas pendidikan di pelosok desa Banten. Output dari beasiswa ini adalah
						mendorong anak pelosok desa berpotensi mendapatkan kesempatan melanjutkan
						pendidikan. Sehingga, outcome dapat terlihat ketika penerima beasiswa memperoleh
						wawasan dan keterampilan dari pendidikan lanjutan di perkuliahan atau pelatihan life skill
						yang berdampak pada peningkatan kesejahteraan ekonomi keluarga dan pembangunan
						kapasitas sumber daya manusia di pelosok desa Banten.
					</p>

					<p>
						Beasiswa ini akan memberikan pengaruh pada 3 (tiga) aspek diantaranya adalah dampak
						pendidikan yang mendorong anak desa memiliki kesempatan melanjutkan ke jenjang
						pendidikan yang lebih tinggi. Kemudian dampak sosial yang menjadikan adik penerima
						beasiswa memiliki tanggung jawab sosial untuk membangun desanya melalui ilmu yang
						diperoleh saat menerima beasiswa pendidikan. Dampak terakhir adalah mempengauhi
						ekonomi pada keluarga penerima beasiswa.
					</p>

					<p>
						<blockquote>							
							Lihat, seberapa besar dampak yang telah dihasilkan untuk mendorong anak desa
							mendapatkan kesempatan belajar dan akses pendidikan yang lebih baik. itu semua
							karena aksi baikmu untuk Berdonasi
						</blockquote>
					</p>
				</div>
			</div>

			<div class="col-md-5 col-sm-6 stick_donation">
				<div class="panel panel-default donation">
					<div class="panel-heading">
						<b>Donation Form</b>
					</div>

					<div class="panel-body">
						<?php if(validation_errors()) { ?>
<!-- If Errors -->
						<div class="panel panel-danger">
							<div class="panel-heading">
								Terjadi Kesalahan
							</div>

							<div class="panel-body">
								<?php echo validation_errors() ;?>
							</div>
						</div>
						<?php } ?>

						<form method="post">
							<div class="form-group label-floating">
								<label for="#uname" class="control-label">Full Name</label>
								<input id="uname" type="text" class="form-control" name="donatur_name" required>
							</div>

							<div class="form-group label-floating">
								<label for="#uname" class="control-label">Phone Number</label>
								<input type="text" id="uname" class="form-control" name="donatur_number" required>
							</div>

							<div class="form-group label-floating">
								<label for="#uname" class="control-label">Email</label>
								<input id="uname" type="email" class="form-control" name="donatur_email" required>
							</div>

							<div class="form-group label-floating">
								<label for="#uname" class="control-label">Additional Message</label>
								<textarea id="uname" class="form-control" name="donatur_message"></textarea>
							</div>

							<div class="form-group label-floating">
								<label for="#default" class="control-label">Donation (Rp)</label>
								<input id="default" type="text" class="form-control moneyFormat" required>
								<input class="realFormat" type="hidden" name="donation_cash">
							</div>

							<div class="form-group label-floating">
								<label for="#uname">Transfer Method</label>
								<select name="donation_method" id="uname" class="form-control" required>
									<option value="">-- Choose Option --</option>
									<?php foreach($getBankAccount as $item) { ?>
									<option value="<?php echo $item->id; ?>">
									<?php echo $item->nama; ?> &mdash; <?php echo $item->nomor_rekening; ?>
									</option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<button class="btn btn-primary btn-raised btn-block" type="submit">confirm</button>		
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="precontent donation">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 poin">
					<i class="fa fa-archive fa-3x"></i>
					<h4>Tools</h4>
					<p>We need more tools for support their unstoppable creativity</p>
				</div>

				<div class="col-sm-4 poin">
					<i class="fa fa-book fa-3x"></i>
					<h4>Books</h4>
					<p>Share your best smile today with giving your usefull book</p>
				</div>

				<div class="col-sm-4 poin">
					<i class="fa fa-briefcase fa-3x"></i>
					<h4>Briefcase</h4>
					<p>Curious with <b>ISBANBAN?</b> Why not coming and get your free coffee</p>
				</div>
			</div>
		</div>
	</div>
</section>

<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/vendor/sweetalert/dist/sweetalert.css">
<script src="<?php echo base_url() ?>template/assets/vendor/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/autoNumeric/autoNumeric.js"></script>
<script src="<?php echo base_url() ?>template/assets/vendor/sticky-kit/jquery.sticky-kit.min.js"></script>
<script>

if ($(window).width() > 768) {
	doStick();
}

function doStick() {
	$(".stick_donation").stick_in_parent({
		parent: '.parent_sticky',
		offset_top: 100,
	});
}

$(".moneyFormat").autoNumeric('init',{
    aSep: '.',
    dGroup: '3',
    aDec: " ",
    aPad: false
});

$("#default").bind('blur focusout keypress keyup', function() {
    var realValue = $("#default").autoNumeric('get');
    $(".realFormat").val(realValue);
});

<?php if($this->session->flashdata('success', true)) { ?>
swal({
  title: "You did it!",
  text: "Terimakasih anda sudah ikut berpartisipasi untuk kemajuan pendidikan di plosok Banten, Kami mengirimkan rincian langkah selanjutnya ke email anda, Pastikan email yang anda gunakan adalah email aktif.",
  type: "success",
  confirmButtonText: "Close",
  allowEscapeKey: false,
  allowOutsideClick: false
},
function(){ 
	window.location.href = "<?php echo base_url() ?>donate";
});

<?php $this->session->unset_userdata('success'); ?>
<?php } ?>
</script>