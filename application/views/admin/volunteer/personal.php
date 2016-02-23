<style>
.row .col-sm-6 {
	margin-bottom: 0px;
}
select option {
	text-transform: capitalize;
}
</style>
<div class="card-body">
	<!-- Basic Info -->					
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="nama">
	</div>

	<div class="row">
		<div class="col-sm-6">
			<div class="form-group">
				<label>Tempat Lahir</label>
				<input type="text" class="form-control" name="tempat_lahir">
			</div>
		</div>
		<div class="col-sm-6">
			<div class="form-group">
				<label>Tanggal Lahir</label>
				<input type="text" class="form-control tglLahir" name="tanggal_lahir">
			</div>
		</div>
	</div>

	<div class="form-group">
		<label>Jenis Kelamin</label><br>

		<div class="radio3 radio-check radio-inline">
		  <input type="radio" id="radio" name="jenis_kelamin" value="laki-laki">
		  <label for="radio">
		  	Laki-laki
		  </label>
		</div>

		<div class="radio3 radio-check radio-inline">
		  <input type="radio" id="radio2" name="jenis_kelamin" value="perempuan">
		  <label for="radio2">
		  	Perempuan
		  </label>
		</div>
	</div>

	

	<div class="form-group">
		<label>Golongan Darah</label>
		<select name="golongan_darah" class="form-control">
			<option value="">-- Pilih Golongan Darah --</option>
			<option value="a">A</option>
			<option value="b">B</option>
			<option value="ab">AB</option>
			<option value="o">O</option>
		</select>
	</div>

	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat_pribadi" rows="4" class="form-control"></textarea>
	</div>

	<div class="form-group">
		<label>Agama</label>
		<select name="agama" class="form-control">
			<option>-- Pilih Agama --</option>
			<option value="islam">Islam</option>
			<option value="protestan">Protestan</option>
			<option value="katholik">Katholik</option>
			<option value="hindu">Hindu</option>
			<option value="budha">Budha</option>
		</select>
	</div>

	<div class="form-group">
		<label>Asal Sekolah / Universitas</label>
	  <input type="text" class="form-control" name="asal">
	</div>

	<div class="form-group">
		<label>Pekerjaan</label>
	  <input type="text" class="form-control" name="pekerjaan">
	</div>

	<div class="form-group">
		<label>Email</label>
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
		  <input type="text" class="form-control" placeholder="hello@isbanban.org" name="email">
		</div>
	</div>

	<div class="form-group">
		<label>Nomor Telefon</label>
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
		  <input type="text" class="form-control" placeholder="(+62)" name="nomor_pribadi">
		</div>
	</div>










	<!-- Isbanban Info -->
	<hr>
	<div class="form-group">
		<label>Bulan Masuk</label>
		<input type="text" class="form-control tglGabung" name="bulan_masuk">
	</div>
	<div class="row">
		<div class="col-sm-4">
			<div class="form-group">
				<label>Domisili</label>
				<select name="chapter" class="form-control">
					<option value="">-- Pilih Chapter --</option>
					<?php foreach($getChapter as $item) { ?>
					<option value="<?php echo $item->kode ?>"><?php echo $item->nama ?></option>
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
					<option value="<?php echo $item->kode ?>"><?php echo $item->nama ?></option>
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
					<option value="<?php echo $item->id ?>"><?php echo $item->nama ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label>Kenapa bergabung dengan isbanban?</label>
		<textarea name="alasan"rows="3" class="form-control"></textarea>
	</div>

	<div class="form-group">
		<label>Mimpi untuk isbanban</label>
		<textarea name="visi"rows="3" class="form-control"></textarea>
	</div>

	





	<!-- Social Info -->
	<hr>
	<div class="form-group">
		<label>Facebook Link</label>
		<div class="input-group">
		  <span class="input-group-addon" style="padding: 9px 15px;"><i class="fa fa-facebook"></i></span>
		  <input type="text" class="form-control" placeholder="http://facebook.com/isbanban-family" name="facebook_link">
		</div>
	</div>

	<div class="form-group">
		<label>Twitter Link</label>
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
		  <input type="text" class="form-control" placeholder="http://twitter.com/isbanban-family" name="twitter_link">
		</div>
	</div>

	<div class="form-group">
		<label>Instagram Link</label>
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
		  <input type="text" class="form-control" placeholder="http://Instagram.com/isbanban-family" name="instagram_link">
		</div>
	</div>
</div>