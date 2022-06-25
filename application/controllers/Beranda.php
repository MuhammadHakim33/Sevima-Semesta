<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller 
{

	public function index()
	{
		$data["title"] = "Beranda";
		
		$this->load->view('siswa/template_header', $data);
		$this->load->view('siswa/view_beranda');
		$this->load->view('siswa/template_footer');
	}
}
