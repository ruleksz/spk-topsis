<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Mobil_model');
    }

    public function index() {
        $data['mobil'] = $this->Mobil_model->getAll();

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('mobil/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah() {
        if ($this->input->post()) {
            $this->Mobil_model->insert($this->input->post());
            redirect('mobil');
        }

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('mobil/tambah');
        $this->load->view('template/footer');
    }

    public function edit($id) {
        if ($this->input->post()) {
            $this->Mobil_model->update($id, $this->input->post());
            redirect('mobil');
        }

        $data['mobil'] = $this->Mobil_model->getById($id);

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('mobil/edit', $data);
        $this->load->view('template/footer');
    }

    public function hapus($id) {
        $this->Mobil_model->delete($id);
        redirect('mobil');
    }
}
