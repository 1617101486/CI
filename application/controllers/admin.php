
<?php
defined('BASEPATH') OR exit('No direct scipt acces allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_pendaftaran');
		$this->load->model('m_account');
		if ($this->session->userdata('status') != "login") {redirect(base_url("login"));}



		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index(){
		$data['judul'] = "DASHBOARD";
		$this->load->view('v_header',$data);
		$this->load->view('v_dashboard',$data);
		$this->load->view('v_footer',$data);

	}
	function status(){
		$data['judul'] = "STATUS AKUN";
		$data['status'] = $this->m_account->pending_account();
		$this->load->view('v_header',$data);
		$this->load->view('v_aktif',$data);
		$this->load->view('v_footer',$data);
	}
	
	function aktif()
	{
		$id_account = $this->uri->segment(3);
		$data = array(
			'status' => 'aktif'
		);
		$this->db->where('id_account',$id_account);
		$this->db->update('tb_account',$data);
		redirect(base_url('admin/status'));
	}		

	function block()
	{
		$id_account = $this->uri->segment(3);
		$data = array(
			'status' => 'block'
		);
		$this->db->where('id_account',$id_account);
		$this->db->update('tb_account',$data);
		redirect(base_url('admin/status'));
	}

		
} 

 ?>