<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller 
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model');
	}

	public function player($yt_id_video)
	{
		$data["title"] = "Video";
		$data["video"] = $this->Main_model->get_data('tbl_video', ['yt_id_video' => $yt_id_video])[0];

		$this->load->view('siswa/template_header', $data);
		$this->load->view('siswa/view_video');
		$this->load->view('siswa/template_footer');
	}
}
