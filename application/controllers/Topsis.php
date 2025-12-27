<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topsis extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Topsis_model');
    }

    public function index() {

        $mobil    = $this->Topsis_model->getMobil();
        $kriteria = $this->Topsis_model->getKriteria();

        // 1. Matriks Keputusan
        foreach ($mobil as $m) {
            foreach ($kriteria as $k) {
                $X[$m->id_mobil][$k->nama_kriteria] = $m->{$k->nama_kriteria};
            }
        }

        // 2. Normalisasi
        foreach ($kriteria as $k) {
            $sum = 0;
            foreach ($X as $row) {
                $sum += pow($row[$k->nama_kriteria], 2);
            }
            $pembagi = sqrt($sum);

            foreach ($X as $id => $row) {
                $R[$id][$k->nama_kriteria] = $row[$k->nama_kriteria] / $pembagi;
            }
        }

        // 3. Normalisasi Terbobot
        foreach ($kriteria as $k) {
            foreach ($R as $id => $row) {
                $Y[$id][$k->nama_kriteria] = $row[$k->nama_kriteria] * $k->bobot;
            }
        }

        // 4. Solusi Ideal
        foreach ($kriteria as $k) {
            $nilai = array_column($Y, $k->nama_kriteria);
            if ($k->tipe == 'benefit') {
                $Aplus[$k->nama_kriteria]  = max($nilai);
                $Amin[$k->nama_kriteria]   = min($nilai);
            } else {
                $Aplus[$k->nama_kriteria]  = min($nilai);
                $Amin[$k->nama_kriteria]   = max($nilai);
            }
        }

        // 5. Jarak ke Solusi Ideal
        foreach ($Y as $id => $row) {
            $Dplus[$id] = 0;
            $Dmin[$id]  = 0;
            foreach ($row as $k => $v) {
                $Dplus[$id] += pow($v - $Aplus[$k], 2);
                $Dmin[$id]  += pow($v - $Amin[$k], 2);
            }
            $Dplus[$id] = sqrt($Dplus[$id]);
            $Dmin[$id]  = sqrt($Dmin[$id]);
        }

        // 6. Nilai Preferensi
        foreach ($Dplus as $id => $val) {
            $V[$id] = $Dmin[$id] / ($Dmin[$id] + $Dplus[$id]);
        }

        arsort($V);

        $data = compact('mobil','kriteria','V');

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('topsis/index', $data);
        $this->load->view('template/footer');
    }
}
