<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kriteria_model');
    }

    public function index() {
        $data['kriteria'] = $this->Kriteria_model->getAll();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kriteria/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah() {
        if ($this->input->post()) {
            $this->Kriteria_model->insert($this->input->post());
            redirect('kriteria');
        }

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kriteria/tambah');
        $this->load->view('template/footer');
    }

    public function edit($id) {
        if ($this->input->post()) {
            $this->Kriteria_model->update($id, $this->input->post());
            redirect('kriteria');
        }

        $data['kriteria'] = $this->Kriteria_model->getById($id);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kriteria/edit', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id) {
        $this->Kriteria_model->delete($id);
        redirect('kriteria');
    }
}
