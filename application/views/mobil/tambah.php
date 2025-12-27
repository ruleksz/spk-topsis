<div class="container-fluid">
    <h1 class="h3 mb-3">Tambah Mobil</h1>

    <form method="post">
        <?php
        $fields = ['nama_mobil','kenyamanan','keamanan','performa','irit_bbm','harga'];
        foreach ($fields as $f):
        ?>
            <div class="mb-3">
                <label><?= ucfirst(str_replace('_',' ',$f)) ?></label>
                <input type="<?= $f=='nama_mobil'?'text':'number' ?>" name="<?= $f ?>" class="form-control" required>
            </div>
        <?php endforeach ?>

        <button class="btn btn-success">Simpan</button>
        <a href="<?= base_url('mobil') ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
