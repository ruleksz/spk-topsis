<div class="container-fluid">
    <h1 class="h3 mb-3">Edit Kriteria</h1>

    <form method="post">
        <div class="mb-3">
            <label>Nama Kriteria</label>
            <input type="text" name="nama_kriteria"
                   value="<?= $kriteria->nama_kriteria ?>"
                   class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tipe Kriteria</label>
            <select name="tipe" class="form-control" required>
                <option value="benefit" <?= $kriteria->tipe=='benefit'?'selected':'' ?>>Benefit</option>
                <option value="cost" <?= $kriteria->tipe=='cost'?'selected':'' ?>>Cost</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Bobot</label>
            <input type="number" step="0.01" name="bobot"
                   value="<?= $kriteria->bobot ?>"
                   class="form-control" required>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="<?= base_url('kriteria') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
