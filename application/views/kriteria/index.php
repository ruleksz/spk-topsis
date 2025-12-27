<div class="container-fluid">
    <h1 class="h3 mb-3">Data Kriteria</h1>

    <a href="<?= base_url('kriteria/tambah') ?>" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Kriteria
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Kriteria</th>
                <th>Tipe</th>
                <th>Bobot</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($kriteria as $k): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= ucfirst($k->nama_kriteria) ?></td>
                <td>
                    <span class="badge <?= $k->tipe=='benefit'?'bg-success':'bg-danger' ?>">
                        <?= ucfirst($k->tipe) ?>
                    </span>
                </td>
                <td><?= $k->bobot ?></td>
                <td>
                    <a href="<?= base_url('kriteria/edit/'.$k->id_kriteria) ?>" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="<?= base_url('kriteria/hapus/'.$k->id_kriteria) ?>"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Yakin hapus data?')">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
