<?php
class Ml_model extends CI_Model {

    public function getDataset() {
        return $this->db->get('ml_dataset')->result_array();
    }

    public function predictScore($mobil) {
        $data = $this->getDataset();

        // Hitung rata-rata target (baseline regression)
        $total = 0;
        foreach ($data as $d) {
            $total += $d['target'];
        }

        $meanTarget = count($data) ? $total / count($data) : 0;

        // Skor prediksi sederhana
        $fitur = [
            $mobil->kenyamanan,
            $mobil->keamanan,
            $mobil->performa,
            $mobil->irit_bbm,
            $mobil->harga
        ];

        return array_sum($fitur) / count($fitur) * $meanTarget / 5;
    }
}
