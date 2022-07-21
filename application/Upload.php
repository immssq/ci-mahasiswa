<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Upload extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('mhsModel');
		$this->load->library('form_validation');
		$this->load->view('header');
	}
	
	public function form(){
		$this->load->view('upload_form');
	}

	public function mhsDelete($nim)
	{
		$this->mhsModel->delete_data_mhs($nim);
		redirect('/');
	}

	public function mhsUpdate($nim)
	{
		$mhsDetail = $this->mhsModel->get_data_mhs($nim);
		$DATA = array('queryMhs' => $mhsDetail);
		$this->load->view('mhs_edit', $DATA);
	}

	public function fungsiEdit($temp)
	{
		$this->form_validation->set_rules('NIM', 'nama_mahasiswa', 'required');

        if ($this->form_validation->run() == FALSE){
			// $this->load->view('upload_form');
		}else{
			$ArrUpdate['NIM'] = $this->input->post('NIM', TRUE);
			$ArrUpdate['nama_mahasiswa'] = $this->input->post('nama_mahasiswa', TRUE);

			$config['upload_path']          = APPPATH. '../assets/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['overwrite'] 			= TRUE;
			$config['max_size']             = 10000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto_diri_mahasiswa')){
				$error = array('error' => $this->upload->display_errors());
				// $this->load->view('upload_form', $error);
			}else{
				$upload_data = $this->upload->data();
				$ArrUpdate['foto_diri_mahasiswa'] = $upload_data['file_name'];
			}

			if ( ! $this->upload->do_upload('foto_ktp_mahasiswa')){
				$error = array('error' => $this->upload->display_errors());
				// $this->load->view('upload_form', $error);
			}else{
				$upload_data = $this->upload->data();
				$ArrUpdate['foto_ktp_mahasiswa'] = $upload_data['file_name'];

				$this->mhsModel->update_data_mhs($ArrUpdate, $temp);
				redirect('/');
			}
		}
	}
	
	public function file_data(){
		$this->form_validation->set_rules('NIM', 'nama_mahasiswa', 'required');

        if ($this->form_validation->run() == FALSE){
			$this->load->view('upload_form');
		}else{
			$data['NIM'] = $this->input->post('NIM', TRUE);
			$data['nama_mahasiswa'] = $this->input->post('nama_mahasiswa', TRUE);

			$config['upload_path']          = APPPATH. '../assets/uploads/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['overwrite'] 			= TRUE;
			$config['max_size']             = 10000;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto_diri_mahasiswa')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload_form', $error);
			}else{
				$upload_data = $this->upload->data();
				$data['foto_diri_mahasiswa'] = $upload_data['file_name'];
			}

			if ( ! $this->upload->do_upload('foto_ktp_mahasiswa')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('upload_form', $error);
			}else{
				$upload_data = $this->upload->data();
				$data['foto_ktp_mahasiswa'] = $upload_data['file_name'];

				$this->mhsModel->store_mhs_data($data);
				redirect('/');
			}
		}
	}
}
