<div class="container-fluid">
    <h1 class="h3 mb-4">Hasil Perhitungan TOPSIS</h1>

    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>Ranking</th>
                <th>Nama Mobil</th>
                <th>Nilai Preferensi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $rank = 1;
            foreach ($V as $id => $nilai):
                foreach ($mobil as $m):
                    if ($m->id_mobil == $id):
            ?>
            <tr>
                <td><?= $rank++ ?></td>
                <td><?= $m->nama_mobil ?></td>
                <td><?= round($nilai, 4) ?></td>
            </tr>
            <?php endif; endforeach; endforeach; ?>
        </tbody>
    </table>
</div>
