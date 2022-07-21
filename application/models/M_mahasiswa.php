<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

    function getDataMahasiswa(){
        $query = $this->db->get('tb_mahasiswa');
        return $query->result();
    }
}