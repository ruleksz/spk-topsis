<div class="container-fluid">
    <h1 class="h3 mb-4">Prediksi Machine Learning</h1>

    <!-- TABEL -->
    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>Nama Mobil</th>
                <th>Prediksi ML</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($hasil)): ?>
                <?php foreach ($hasil as $h): ?>
                <tr>
                    <td><?= $h['nama_mobil'] ?></td>
                    <td><?= $h['prediksi'] ?></td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="2" class="text-center text-muted">
                        Data prediksi belum tersedia
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <!-- GRAFIK -->
    <div class="card mt-5">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">
                Grafik Prediksi Machine Learning
            </h6>
        </div>
        <div class="card-body">
            <canvas id="mlChart"></canvas>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const labels = <?= json_encode(array_column($hasil, 'nama_mobil')) ?>;
    const dataML = <?= json_encode(array_map('floatval', array_column($hasil, 'prediksi'))) ?>;

    const canvas = document.getElementById('mlChart');
    if (!canvas) return;

    const ctx = canvas.getContext('2d');

    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Prediksi ML',
                data: dataML,
                backgroundColor: 'rgba(78,115,223,0.7)'
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

});
</script>

