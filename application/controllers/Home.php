<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mahasiswa');
	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$queryAllMahasiswa = $this->M_mahasiswa->getDataMahasiswa();
		$DATA = array('queryAllMhs' => $queryAllMahasiswa);
		$this->load->view('home', $DATA);
		
		// $this->load->view('home');
	}
	public function halaman_tambah() 
	{
		$this->load->view('halaman_tambah_mhs');
	}
	public function halaman_edit() 
	{
		$this->load->view('halaman_edit_mhs');
	}
	public function fungsiTambah() 
	{
		$nama = $this->input->post('nama');
		$foto_diri_mahasiswa = $this->input->post('foto_diri_mahasiswa');
		$foto_ktp_mahasiswa = $this->input->post('foto_ktp_mahasiswaS');
		
		$ArrInsert = array(
			'nama' => $nama,
			'foto_diri_mahasiswa' => $foto_diri_mahasiswa,
			'foto_ktp_mahasiswa' => $foto_ktp_mahasiswa
		);

		echo "<pre>";
		print_r($ArrInsert);
		echo "</pre>";
	}

}
