<div class="container-fluid">
    <h1 class="h3 mb-3">Tambah Kriteria</h1>

    <form method="post">
        <div class="mb-3">
            <label>Nama Kriteria</label>
            <input type="text" name="nama_kriteria" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tipe Kriteria</label>
            <select name="tipe" class="form-control" required>
                <option value="">-- Pilih --</option>
                <option value="benefit">Benefit</option>
                <option value="cost">Cost</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Bobot</label>
            <input type="number" name="bobot" step="0.01" class="form-control" required>
            <small class="text-muted">Contoh: 0.25</small>
        </div>

        <button class="btn btn-success">Simpan</button>
        <a href="<?= base_url('kriteria') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
