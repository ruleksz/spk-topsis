<div class="container-fluid">
    <h1 class="h3 mb-3">Data Mobil</h1>

    <a href="<?= base_url('mobil/tambah') ?>" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Tambah Mobil
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Mobil</th>
                <th>Kenyamanan</th>
                <th>Keamanan</th>
                <th>Performa</th>
                <th>Irit BBM</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($mobil as $m): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $m->nama_mobil ?></td>
                <td><?= $m->kenyamanan ?></td>
                <td><?= $m->keamanan ?></td>
                <td><?= $m->performa ?></td>
                <td><?= $m->irit_bbm ?></td>
                <td><?= $m->harga ?></td>
                <td>
                    <a href="<?= base_url('mobil/edit/'.$m->id_mobil) ?>" class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a href="<?= base_url('mobil/hapus/'.$m->id_mobil) ?>"
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
