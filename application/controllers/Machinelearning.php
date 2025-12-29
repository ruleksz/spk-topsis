<?php
class Machinelearning extends CI_Controller {

    public function index() {

        $mobil = $this->db->get('mobil')->result();
        $hasil = [];

        $python = "C:\\laragon\\bin\\python\\python-3.10\\python.exe";

        foreach ($mobil as $m) {

            $command = "$python predict.py "
                .$m->kenyamanan." "
                .$m->keamanan." "
                .$m->performa." "
                .$m->irit_bbm." "
                .$m->harga." 2>&1";

            $output = shell_exec($command);

            $hasil[] = [
                'nama_mobil' => $m->nama_mobil,
                'prediksi'   => $output !== null ? trim($output) : '-'
            ];
        }

        $data['hasil'] = $hasil;

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('ml/index', $data);
        $this->load->view('template/footer');
    }
}

