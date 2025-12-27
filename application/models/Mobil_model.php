<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil_model extends CI_Model {

    public function getAll() {
        return $this->db->get('mobil')->result();
    }

    public function getById($id) {
        return $this->db->get_where('mobil', ['id_mobil' => $id])->row();
    }

    public function insert($data) {
        $this->db->insert('mobil', [
            'nama_mobil'  => $data['nama_mobil'],
            'kenyamanan'  => $data['kenyamanan'],
            'keamanan'    => $data['keamanan'],
            'performa'    => $data['performa'],
            'irit_bbm'    => $data['irit_bbm'],
            'harga'       => $data['harga']
        ]);
    }

    public function update($id, $data) {
        $this->db->where('id_mobil', $id);
        $this->db->update('mobil', [
            'nama_mobil'  => $data['nama_mobil'],
            'kenyamanan'  => $data['kenyamanan'],
            'keamanan'    => $data['keamanan'],
            'performa'    => $data['performa'],
            'irit_bbm'    => $data['irit_bbm'],
            'harga'       => $data['harga']
        ]);
    }

    public function delete($id) {
        $this->db->delete('mobil', ['id_mobil' => $id]);
    }
}
