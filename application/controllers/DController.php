<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('DModel');
	}

	public function index()
	{
		$data['data_tabel'] = $this->DModel->getAll();
		$this->load->view('DView',$data);
	}
	public function tambah()
	{
		$this->load->view('DTambah');

	}
	public function simpan_data()
	{
		$data = array(
			'id_05'=>$this->input->post('id_05'),
			'kolom_jurusan'=>$this->input->post('kolom_jurusan'),
			'kolom_kelas'=>$this->input->post('kolom_kelas'),
			'kolom_isi'=>$this->input->post('kolom_isi'));
			
	//	print_r($data);
		$this->DModel->store($data);
		redirect('DController/index','refresh');
	}
}