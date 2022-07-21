<?php 

class mhsModel extends CI_Model{

	function get_all_data(){
		$all_mhs = $this->db->get('tb_mahasiswa');
		return $all_mhs->result();
	}

	function store_mhs_data($data){
		$insert_data['NIM'] = $data['NIM'];
		$insert_data['nama_mahasiswa'] = $data['nama_mahasiswa'];
		$insert_data['foto_diri_mahasiswa'] = $data['foto_diri_mahasiswa'];
		$insert_data['foto_ktp_mahasiswa'] = $data['foto_ktp_mahasiswa'];

		$query = $this->db->insert('tb_mahasiswa', $insert_data);
	}

	function get_data_mhs($nim) {
		$this->db->where('NIM', $nim);
		$query = $this->db->get('tb_mahasiswa');
		return $query->row();
	}
	
	function update_data_mhs($data, $temp) {
		$this->db->where('NIM', $temp);
		$this->db->update('tb_mahasiswa', $data);
	}

	function delete_data_mhs($nim) {
		$this->db->where('NIM', $nim);
		$this->db->delete('tb_mahasiswa');
	}
}
