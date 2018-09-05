<?php
defined('BASEPATH') OR exit('No direct script accesS allowed');

class Login extends CI_ControLLer {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');



	}

	function index(){
		$this->load->view('v_login');
	}

	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password)
			);
		$data_user = $this->m_login->cek_login("tb_account",$where);
		if ($data_user->num_rows() > 0) {
			$data_user = $data_user->result()[0];

			if($data_user->status == 'aktif')
			{
				$data_session = array(
					'id' => $data_user->id_pengguna,
					'nama' => $data_user->nama_lengkap,
					'kedudukan' => $data_user->kedudukan,
					'status' => "login"
					);

				$this->session->set_userdata($data_session);
				redirect(base_url('admin'));
			}
			else
			{
				$this->session->set_flashdata('error', 'Akun Anda Belum Diaktifkan');
				redirect(base_url('login'));
			}
		}else{
			$this->session->set_flashdata('error', 'Username Atau Password Anda Salah.');
			redirect(base_url('login'));
		}
	}

	function logout(){
			$this->session->sess_destroy();
			redirect(base_url('login'));
	}

	}
 
 ?>