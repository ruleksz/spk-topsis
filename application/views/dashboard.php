<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <div class="row">

        <div class="col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Total Mobil
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= $total_mobil ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Total Kriteria
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= $total_kriteria ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Metode SPK
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        TOPSIS
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="card shadow">
        <div class="card-body">
            <h5>Sistem Pendukung Keputusan Pemilihan Mobil</h5>
            <p>
                Aplikasi ini membantu menentukan mobil terbaik menggunakan metode
                <strong>TOPSIS</strong> berdasarkan kriteria:
            </p>
            <ul>
                <li>Kenyamanan</li>
                <li>Keamanan</li>
                <li>Performa</li>
                <li>Irit BBM</li>
                <li>Harga</li>
            </ul>
        </div>
    </div>

</div>
