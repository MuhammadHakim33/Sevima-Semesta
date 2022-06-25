<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model');
	}

	public function index()
	{
		$data["title"] = "Beranda";
		$data["videos"] = $this->Main_model->get_data('tbl_video');
		
		$this->load->view('siswa/template_header', $data);
		$this->load->view('siswa/view_beranda');
		$this->load->view('siswa/template_footer');
	}
}
