<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datakelas extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Mkelas');
		$tampildata['data'] = $this->Mkelas->read()->result_array();
		$this->load->model('Mjurusan');
		$tampiljurusan['datajurusan'] = $this->Mjurusan->read()->result_array();
		$this->load->view('admin/header');
		$this->load->view('admin/datakelas', $tampildata, $tampiljurusan);
		$this->load->view('admin/footer');
	}

	public function create()
	{

	}

	public function update()
	{
		
	}

	public function delete()
	{
		
	}
}
