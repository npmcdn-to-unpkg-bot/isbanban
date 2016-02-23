<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Open Recruitment &mdash; Istana Belajar Anak Banten</title>

	<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
	<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/manifest.json">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#21e2fc">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#21e2fc">


	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/site/theme.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,300italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php echo base_url() ?>template/assets/vendor/font-awesome/css/font-awesome.min.css">

	<script src="<?php echo base_url() ?>template/assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
</head>
<body>

<!-- <header class="navbar-inverse">
	<div class="navbar-before">
		<div class="container">
				<img src="http://isbanban.org/wp-content/uploads/2015/07/isbanban1-e1437047014513.png" alt="" class="img-responsive">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

		<ul class="nav navbar-nav">
			<li class="active"><a href="">home</a></li>
			<li><a href="">about us</a></li>
			<li><a href="">people</a></li>
			<li><a href="">village</a></li>
			<li><a href="">blog</a></li>
			<li><a href="">events</a></li>
			<li><a href="">donate</a></li>
		</ul>
	</div>
</header>

<div class="jumbotron bigger" style="background: url(<?php echo base_url() ?>template/assets/image/bg-hero.jpg) no-repeat top center;">
	<div class="container">
		<h1>istana belajar anak banten</h1>
		<p>Share you best smiley today!</p>
		<hr>
	</div>
</div>

<div class="donate-list">
	<div class="container">
		<div class="row start">
			<div class="col-sm-4">
				<div class="donate-post">
					<i class="fa fa-archive fa-3x"></i>
					<h4>Tools</h4>
					<p>We need more tools for support their unstoppable creativity</p>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="donate-post">
					<i class="fa fa-book fa-3x"></i>
					<h4>Books</h4>
					<p>Share your best smile today with giving your usefull book</p>
				</div>
			</div>

			<div class="col-sm-4">
				<div class="donate-post">
					<i class="fa fa-briefcase fa-3x"></i>
					<h4>Briefcase</h4>
					<p>Curious with <b>ISBANBAN?</b> Why not coming and get your free coffee</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="event-reminder">
	<div class="container">
		<a href="">
			<div class="start">
				<i class="fa fa-calendar fa-2x"></i> <span>Peringatan maulid nabi muhamad</span>

				<div class="pull-right">
					<a href=""> view more</a>
				</div>
			</div>
		</a>
	</div>
</div> -->

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

	<script type="text/javascript" src="<?php echo base_url() ?>template/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		$(".picker").datepicker({
			format: "yyyy-mm-dd"
		});
	});	
	</script>

	<script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='45c2c0913d1dafb0d0ac48aa531690cb' data-cfasync='false' async='async'></script>

	
	<div class="recruitment">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

<!-- Success Alert -->
					<?php if($this->session->flashdata('success') == true) { ?>
					<div class="panel panel-success">
						<div class="panel-heading">
							Terimakasih sudah mendaftar!
							Kami akan segera menghubungi anda untuk kelanjutannya! 
						</div>
					</div>

<!-- Information Center -->
					<div class="panel panel-primary text-left">
						<div class="panel-heading">
							Informasi
						</div>

						<div class="panel-body">
							Apabila anda mengalami kesulitan ketika melengkapi formulir pendaftaran dibawah ini ataupun punya pertanyaa seputar <b>Istana Belajar Anak Banten</b>,
							Silahkan hubungi <b>Isbanban Information Center: <a href="tel:089665656796">+6289665656796</a></b>.
							<br>
							<b>Jam Kerja</b>: Senin - Sabtu | 08:00 - 19:00
						</div>
					</div>
					<?php } ?>

<!-- Error Alert -->
					<?php if(validation_errors()) { ?>
					<div class="panel panel-danger">
						<div class="panel-heading">
							Terjadi Kesalahan
						</div>

						<div class="panel-body">
							<p><?php echo validation_errors(); ?></p>
						</div>
					</div>
					<?php } ?>

<!-- Start Form -->
					<form method="POST">
					<div class="start">
						<div class="pre-title">
							<a href="<?php echo base_url() ?>recruitment"><img class="img-responsive" src="<?php echo base_url() ?>template/assets/image/typetext-black.png"></img></a>
							<h3>Formulir Penerimaan Relawan Baru</h3>
							<p>Mohon untuk melengkapi data diri anda selengkap dan seinformatif mungkin</p>
							<hr>
						</div>

						<div class="form-start">
							<div class="form-group">
								<label>Nama</label>
								<input class="form-control" placeholder="Nama Saya adalah..." name="nama"></input>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Tempat Lahir</label>
										<input class="form-control" placeholder="Lahir di kota..." name="tempat_lahir"></input>
									</div>
								</div>

								<div class="col-sm-6">
									<div class="form-group">
										<label>Tanggal Lahir</label>
										<input class="form-control picker" placeholder="Lahir pada..." name="tanggal_lahir"></input>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>Agama</label>
								<select class="form-control" name="agama">
									<option value="">-- Pilih Agama --</option>
									<option value="Islam">Islam</option>
									<option value="Katolik">Katolik</option>
									<option value="Protestan">Protestan</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
								</select>
							</div>

							<div class="form-group">
								<label>Jenis Kelamin</label>
								<div class="row">
									<div class="col-xs-6">
										<label class="radio-inline">
									      <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki
									    </label>
									</div>

									<div class="col-xs-6">
										<label class="radio-inline">
									      <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
									    </label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label>Golongan Darah</label>
								<select class="form-control" name="golongan_darah">
									<option value="">-- Pilih Golongan Darah --</option>
									<option value="a">a</option>
									<option value="b">b</option>
									<option value="ab">ab</option>
									<option value="o">o</option>
								</select>
							</div>

							<div class="form-group">
								<label>Alamat</label>
								<textarea class="form-control" placeholder="Saya tinggal di..." name="alamat_pribadi"></textarea>
							</div>

							<div class="form-group">
								<label>Email</label>
								<input class="form-control" placeholder="Email saya adalah..." name="email"></input>
							</div>

							<div class="form-group">
								<label>Nomor Telefon</label>
								<div class="input-group">
						        	<div class="input-group-addon">+62</div>
						        	<input type="text" class="form-control" placeholder="8788122919" name="nomor_pribadi">
						        </div>
							</div>

							<div class="form-group">
								<label>Asal Pendidikan</label>
								<input class="form-control" placeholder="Saya sedang menjalani studi di..." name="asal_sekolah"></input>
							</div>

							<div class="form-group">
								<label>Pekerjaan</label>
								<input class="form-control" placeholder="Saya seorang..." name="pekerjaan"></input>
							</div>

							<div class="form-group">
								<label>Domisili Pilihan</label>
								<select class="form-control" name="chapter">
									<option value="">-- Pilih Domisili --</option>
									<?php foreach($getChapter as $row) { ?>
									<option value="<?php echo $row->kode; ?>"><?php echo $row->nama; ?></option>
									<?php } ?>
								</select>
							</div>

							<div class="form-group">
								<label>Alasan Bergabung Dengan Isbanban</label>
								<textarea class="form-control" placeholder="Saya bergabung karena..." name="alasan"></textarea>
							</div>

							<div class="form-group">
								<label>Darimana Kamu Tahu Isbanban?</label>
								<div class="radio">
								  <label><input type="radio" name="referensi" value="media sosial">Media Sosial</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="referensi" value="teman">Teman</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="referensi" value="koran">Koran</label>
								</div>
								<div class="radio">
								  <label><input type="radio" name="referensi" value="televisi">Televisi</label>
								</div>
								<input class="form-control" name="referensi" placeholder="Lainnya..."></input>
							</div>

							<button class="btn btn-primary btn-block" type="submit">Submit</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>