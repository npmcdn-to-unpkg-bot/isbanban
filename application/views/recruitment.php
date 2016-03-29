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

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>template/assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">



	<script src="<?php echo base_url() ?>template/assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url() ?>template/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

	<script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='45c2c0913d1dafb0d0ac48aa531690cb' data-cfasync='false' async='async'></script>
	
	<script src="<?php echo base_url() ?>template/assets/vendor/bootstrap-material-design/dist/js/material.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/vendor/bootstrap-material-design/dist/js/ripples.min.js"></script>

	<script type="text/javascript">
	$(document).ready(function(){
		$.material.init();
	});	
	</script>


</head>
<body class="recruitment">
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
								<div class="form-group label-floating">
									<label class="control-label" for="focusedInput1">Nama</label>
									<input class="form-control" id="focusedInput1" name="nama"></input>
								</div>

								<div class="row">
									<div class="col-sm-6">
										<div class="form-group label-floating">
											<label class="control-label" for="focusedInput2">Tempat Lahir</label>
											<input class="form-control" id="focusedInput2" name="tempat_lahir" pattern="[a-zA-Z0-9]+"></input>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="form-group label-floating">
											<label class="control-label" for="focusedInput3">Tanggal Lahir (yyyy-mm-dd)</label>
											<input class="form-control picker" id="focusedInput3" name="tanggal_lahir" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])"></input>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label" for="focusedInput4">Agama</label>
									<select class="form-control" id="focusedInput4" name="agama">
										<option value="">-- Pilih --</option>
										<option value="Islam">Islam</option>
										<option value="Katolik">Katolik</option>
										<option value="Protestan">Protestan</option>
										<option value="Hindu">Hindu</option>
										<option value="Budha">Budha</option>
									</select>
								</div>

								<div class="form-group label-floating">
									<label class="control-label" for="focusedInput5">Jenis Kelamin</label>
									<div class="row">
										<div class="col-xs-6">
											<div class="radio">
												<label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
											</div>
										</div>

										<div class="col-xs-6">
											<div class="radio">											
												<label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label" for="focusedInput6">Golongan Darah</label>
									<select class="form-control" id="focusedInput6" name="golongan_darah">
										<option value="">-- Pilih --</option>
										<option value="a">a</option>
										<option value="b">b</option>
										<option value="ab">ab</option>
										<option value="o">o</option>
									</select>
								</div>

								<div class="form-group label-floating">
									<label class="control-label" for="focusedInput7">Alamat</label>
									<textarea class="form-control" id="focusedInput7" name="alamat_pribadi"></textarea>
								</div>

								<div class="form-group label-floating">
									<label class="control-label" for="focusedInput8">Email</label>
									<input class="form-control" id="focusedInput8" name="email"></input>
								</div>

								<div class="form-group label-floating">
									<label class="control-label" for="focusedInput9">Nomor Telefon (+62xxxx)</label>
						        	<input type="text" id="focusedInput9" class="form-control" name="nomor_pribadi">
								</div>

								<div class="form-group label-floating">
									<label class="control-label" for="focusedInput10">Asal Pendidikan</label>
									<input class="form-control" id="focusedInput10" name="asal_sekolah"></input>
								</div>

								<div class="form-group label-floating">
									<label class="control-label" for="focusedInput11">Pekerjaan</label>
									<input class="form-control" id="focusedInput11" name="pekerjaan"></input>
								</div>

								<div class="form-group">
									<label class="control-label" for="focusedInput12">Domisili Pilihan</label>
									<select class="form-control" id="focusedInput12" name="chapter">
										<option value="">-- Pilih --</option>
										<?php foreach($getChapter as $row) { ?>
										<option value="<?php echo $row->kode; ?>"><?php echo $row->nama; ?></option>
										<?php } ?>
									</select>
								</div>

								<div class="form-group label-floating">
									<label class="control-label" for="focusedInput13">Alasan Bergabung Dengan Isbanban</label>
									<textarea class="form-control" id="focusedInput13" name="alasan"></textarea>
								</div>

								<!-- <div class="form-group label-floating">
									<label class="control-label" for="focusedInput1">Darimana Kamu Tahu Isbanban?</label>
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
									<input class="form-control" name="referensi" nput>
								</div> -->

								<button class="btn btn-primary btn-block btn-raised" type="submit">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>