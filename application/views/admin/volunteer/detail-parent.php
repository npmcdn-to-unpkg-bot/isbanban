<div class="card-body">
	<!-- <div class="alert alert-info" role="alert">
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
	</div> -->
	
	<div class="form-group">
		<label>Alamat</label>
		<textarea name="alamat_orangtua" rows="5" class="form-control"><?php echo $row->alamat_orangtua; ?></textarea>
	</div>

	<div class="form-group">
		<label>Nomor Telefon</label>
		<div class="input-group">
		  <span class="input-group-addon"><i class="fa fa-phone"></i></span>
		  <input type="text" class="form-control" placeholder="(+62)" name="nomor_orangtua" value="<?php echo $row->nomor_orangtua; ?>">
		</div>
	</div>
</div>