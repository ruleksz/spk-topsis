<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria_model extends CI_Model {

    public function getAll() {
        return $this->db->get('kriteria')->result();
    }

    public function getById($id) {
        return $this->db->get_where('kriteria', ['id_kriteria' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('kriteria', [
            'nama_kriteria' => $data['nama_kriteria'],
            'tipe'          => $data['tipe'],
            'bobot'         => $data['bobot']
        ]);
    }

    public function update($id, $data) {
        $this->db->where('id_kriteria', $id);
        $this->db->update('kriteria', [
            'nama_kriteria' => $data['nama_kriteria'],
            'tipe'          => $data['tipe'],
            'bobot'         => $data['bobot']
        ]);
    }

    public function delete($id) {
        $this->db->delete('kriteria', ['id_kriteria' => $id]);
    }
}
