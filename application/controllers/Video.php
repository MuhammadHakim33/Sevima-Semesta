<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model');
		$this->load->library('session');

		if(empty($this->session->userdata('status')))
		{
			redirect(base_url("login"));
			die;
		}
	}

	public function feed($id_pelajaran)
	{
		$data["title"] = "Onsty";
		$data["videos"] = $this->Main_model->get_data('tbl_video', ['id_pelajaran' => $id_pelajaran]);
		
		// var_dump($data["videos"]);
		// die;
		
		$this->load->view('siswa/template_header', $data);
		$this->load->view('siswa/view_feed');
		$this->load->view('siswa/template_footer');
	}

	public function player($yt_id_video)
	{
		$data["title"] = "Play";
		$data["video"] = $this->Main_model->get_data('tbl_video', ['yt_id_video' => $yt_id_video])[0];

		$this->load->view('siswa/template_header', $data);
		$this->load->view('siswa/view_video');
		$this->load->view('siswa/template_footer');
	}
}
