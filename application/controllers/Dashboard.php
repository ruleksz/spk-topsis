<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index() {
        // Hitung jumlah data
        $data['total_mobil']    = $this->db->count_all('mobil');
        $data['total_kriteria'] = $this->db->count_all('kriteria');

        // Load template
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('dashboard', $data);
        $this->load->view('template/footer');
    }
}
