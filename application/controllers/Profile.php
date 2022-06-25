<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
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

	public function index()
	{
		$data["title"] = "Beranda";
		$data["kelas"] = $this->Main_model->get_data('tbl_kelas');
		$data["siswa"] = $this->Main_model->get_data_join(
			'tbl_siswa', 
			'tbl_kelas' , 
			'tbl_siswa.id_kelas = tbl_kelas.id_kelas',
			['tbl_siswa.id_siswa' => $this->session->id]
		)[0];

		$this->load->view('siswa/template_header', $data);
		$this->load->view('siswa/view_profile');
		$this->load->view('siswa/template_footer');
	}

    public function ubah()
    {
        $id = $this->input->post('id');
        $kelas = $this->input->post('kelas');
        $nama_siswa = $this->input->post('nama_siswa');
        $email_siswa = $this->input->post('email_siswa');

        $input = [
			'nama_siswa' => $nama_siswa,
            'email_siswa' => $email_siswa,
            'id_kelas' => $kelas
		];

        $this->Main_model->update_data('tbl_siswa', $input, ['id_siswa' => $id]);

        redirect(base_url('profile'));
        die;
    }
}
