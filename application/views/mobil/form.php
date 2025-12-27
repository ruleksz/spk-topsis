<div class="form-group">
<label>Nama Mobil</label>
<input type="text" name="nama_mobil" class="form-control" value="<?= isset($nama_mobil)?$nama_mobil:'' ?>" required>
</div>

<div class="form-group">
<label>Kenyamanan (1-5)</label>
<input type="number" name="kenyamanan" class="form-control" value="<?= isset($kenyamanan)?$kenyamanan:'' ?>" required>
</div>

<div class="form-group">
<label>Keamanan (1-5)</label>
<input type="number" name="keamanan" class="form-control" value="<?= isset($keamanan)?$keamanan:'' ?>" required>
</div>

<div class="form-group">
<label>Performa (1-5)</label>
<input type="number" name="performa" class="form-control" value="<?= isset($performa)?$performa:'' ?>" required>
</div>
<div class="form-group">
<label>Irit BBM (1-5)</label>
<input type="number" name="irit_bbm" class="form-control" value="<?= isset($irit_bbm)?$irit_bbm:'' ?>" required>
</div>

<div class="form-group">
<label>Harga (Juta)</label>
<input type="number" name="harga" class="form-control" value="<?= isset($harga)?$harga:'' ?>" required>
</div>
