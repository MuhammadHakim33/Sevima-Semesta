<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('Main_model');
        $this->load->library('session');
	}

	public function index()
	{
        // Cek Session
        if($this->session->userdata('status'))
		{
			redirect(base_url());
			die;
		}

		$data["title"] = "Login";
		
		$this->load->view('siswa/template_header', $data);
		$this->load->view('siswa/view_login');
		$this->load->view('siswa/template_footer');
	}

    public function login_input()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == FALSE) 
		{
			$this->index();
		} 
		else 
		{
			// Akun Validasi
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$where = [
				'email_siswa' => $email,
				'password_siswa' => $password
			];

			$data_login = $this->Main_model->get_data("tbl_siswa", $where)[0];

			if(count($data_login) > 0)
			{
                $data_session = [
					'status' => "logged_in",
					'id' => $data_login["id_siswa"],
					'nama' => $data_login["nama_siswa"],
					'kelas' => $data_login["id_kelas"],
				];

                $this->session->set_userdata($data_session);
				redirect(base_url());
				die;
			} 
			else 
			{ 
				// $this->session->set_flashdata('pesanLogin', 'Username / Password Salah');
				redirect(base_url("login")); 
				die;
			}
		}
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login')); 
        die;
    }
}
