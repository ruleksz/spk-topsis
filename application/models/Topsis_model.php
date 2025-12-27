<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topsis_model extends CI_Model {

    public function getMobil() {
        return $this->db->get('mobil')->result();
    }

    public function getKriteria() {
        return $this->db->get('kriteria')->result();
    }
}
