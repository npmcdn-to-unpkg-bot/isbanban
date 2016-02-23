<div class="card-body">
	<!-- Basic Info -->					
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $row->nama; ?>">
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label>Tempat Lahir</label>
				<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $row->tempat_lahir; ?>">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input type="text" class="form-control tglLahir" name="tanggal_lahir" value="<?php echo $row->tanggal_lahir; ?>">
			</div>
		</div>
	</div>

	<div class="form-group">
		<label>Jenis Kelamin</label><br>

		<div class="radio3 radio-check radio-inline">
		  <input type="radio" id="radio" name="jenis_kelamin" value="laki-laki"
		  <?php if($row->jenis_kelamin == "laki-laki") { echo "checked"; } ?>>
		  <label for="radio">
		  	Laki-laki
		  </label>
		</div>

		<div class="radio3 radio-check radio-inline">
		  <input type="radio" id="radio2" name="jenis_kelamin" value="perempuan"
		  <?php if($row->jenis_kelamin == "perempuan") { echo "checked"; } ?>>
		  <label for="radio2">
		  	Perempuan
		  </label>
		</div>
	</div>

	

	<div class="form-group">
		<label>Golongan Darah</label>
		<select name="golongan_darah" class="form-control">
			<option value="">-- Pilih Golongan Darah --</option>
			<option <?php if($row->golongan_darah == "a") { echo "selected"; } ?> value="a">A</option>
			<option <?php if($row->golongan_darah == "b") { echo "selected"; } ?> value="b">B</option>
			<option <?php if($row->golongan_darah == "ab") { echo "selected"; } ?> value="ab">AB</option>
			<option <?php if($row->golongan_darah == "o") { echo "selected"; } ?> value="o">O</option>
		</select>
	</div>

	<div class="alert alert-info" role="alert">
		<strong>Perhatian:</strong>
		<p>
			Mohon untuk melengkapi alamat dibawah ini dengan lengkap, seperti nama jalan, nomor rumah dan informasi penting lainnya.
			Apabila data yang berkaitan tidak lengkap, mohon ditindak lanjuti dengan cara menghubungi langsung kak <b><?php echo $row->nama; ?></b>
			dinomor <b><?php echo $row->nomor_pribadi; ?></b>
		</p>

		<br>
		<strong>Data yang diharapkan:</strong>
		<p>
			Perumahan Taman Surga Indah, Blok F43 Nomor 8. Jl Kemuning nomor 13 Serang, Banten
		</p>
	</div>

	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat_pribadi" rows="4" class="form-control"><?php echo $row->alamat_pribadi; ?></textarea>
	</div>

	<div class="form-group">
		<label>Agama</label>
		<select name="agama" class="form-control">
			<option value="">-- Pilih Agama --</option>
			<option <?php if($row->agama == "islam") { echo "selected"; } ?> value="islam">Islam</option>
			<option <?php if($row->agama == "protestan") { echo "selected"; } ?> value="protestan">Protestan</option>
			<option <?php if($row->agama == "katholik") { echo "selected"; } ?> value="katholik">Katholik</option>
			<option <?php if($row->agama == "hindu") { echo "selected"; } ?> value="hindu">Hindu</option>
			<option <?php if($row->agama == "budha") { echo "selected"; } ?> value="budha">Budha</option>
		</select>
	</div>

	<div class="form-group">
		<label>Asal Sekolah / Universitas</label>
	  <input type="text" class="form-control" name="asal" value="<?php echo $row->asal; ?>">
	</div>

	<div class="form-group">
		<label>Pekerjaan</label>
	  <input type="text" class="form-control" name="pekerjaan" value="<?php echo $row->pekerjaan; ?>">
	</div>

	<div class="form-group">
		<label>Email</label>
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
		  <input type="text" class="form-control" placeholder="hello@isbanban.org" name="email" value="<?php echo $row->email; ?>">
		</div>
	</div>

	<div class="form-group">
		<label>Nomor Telefon</label>
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
		  <input type="text" class="form-control" placeholder="(+62)" name="nomor_pribadi" value="<?php echo $row->nomor_pribadi; ?>">
		</div>
	</div>










	<!-- Isbanban Info -->
	<hr>
	<div class="form-group">
		<label>Bulan Masuk</label>
		<input type="text" class="form-control tglGabung" name="bulan_masuk" value="<?php echo $row->bulan_masuk; ?>">
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label>Domisili</label>
				<select name="chapter" class="form-control">
					<option value="">-- Pilih Chapter --</option>
					<?php foreach($getChapter as $item) { ?>
					<option <?php if($item->kode == $row->chapter) { echo "selected"; } ?> value="<?php echo $item->kode ?>"><?php echo $item->nama ?></option>
					<?php } ?>
				</select>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="form-group">
				<label>Departemen</label>
				<select name="departemen" class="form-control">
					<option value="">-- Pilih Departemen --</option>
					<?php foreach($getDepartment as $item) { ?>
					<option <?php if($item->kode == $row->departemen) { echo "selected"; } ?> value="<?php echo $item->kode ?>"><?php echo $item->nama ?></option>
					<?php } ?>
				</select>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="form-group">
				<label>Posisi</label>
				<select name="posisi" class="form-control">
					<option value="">-- Pilih Posisi --</option>
					<?php foreach($getPosition as $item) { ?>
					<option <?php if($item->id == $row->posisi) { echo "selected"; } ?> value="<?php echo $item->id ?>"><?php echo $item->nama ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label>Kenapa bergabung dengan isbanban?</label>
		<textarea name="alasan"rows="3" class="form-control"><?php echo $row->alasan; ?></textarea>
	</div>

	<div class="form-group">
		<label>Mimpi Untuk Isbanban</label>
		<textarea name="visi"rows="3" class="form-control"><?php echo $row->visi; ?></textarea>
	</div>



	





	<!-- Social Info -->
	<hr>
	<div class="alert alert-info" role="alert">
	  <strong>Perhatian:</strong> 
	  <p>Mohon untuk mengisi <b>Link Sosial Media</b> relawan yang berkaitan, bukan username atau nama pengguna. Apabila data yang berkaitan
	  berupa nama pengguna atau username, mohon ditindak lanjuti dengan menghubungi kak <b><?php echo $row->nama; ?></b>
	  di nomor <b><a href="SMS:<?php echo $row->nomor_pribadi; ?>"><?php echo $row->nomor_pribadi; ?></a></b>
	  </p>

	  <p><strong>Data yang diharapkan:</strong></p>
	  <b>http://www.facebook.com/BogelDR</b><br> 
	  <b>http://www.twitter.com/barnessan</b><br> 
	  <b>http//www.instagram.com/anapple_cilegon</b>
	</div>

	<div class="form-group">
		<label>Facebook Link</label>
		<div class="input-group">
		  <span class="input-group-addon" style="padding: 9px 15px;"><i class="fa fa-facebook"></i></span>
		  <input type="text" class="form-control" placeholder="http://facebook.com/isbanban-family" name="facebook_link" value="<?php echo $row->facebook_link; ?>">
		</div>
	</div>

	<div class="form-group">
		<label>Twitter Link</label>
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
		  <input type="text" class="form-control" placeholder="http://twitter.com/isbanban-family" name="twitter_link" value="<?php echo $row->twitter_link; ?>">
		</div>
	</div>

	<div class="form-group">
		<label>Instagram Link</label>
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
		  <input type="text" class="form-control" placeholder="http://Instagram.com/isbanban-family" name="instagram_link" value="<?php echo $row->instagram_link; ?>">
		</div>
	</div>
</div>