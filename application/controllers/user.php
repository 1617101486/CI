
<?php
defined('BASEPATH') OR exit('No direct scipt acces allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_pendaftaran');


		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}

	public function index(){
		$data['judul'] = "Dasboard";
		$this->load->view('v_user_header',$data);
		$this->load->view('v_user_dashboard',$data);
		$this->load->view('v_footer_user',$data);
	}
} 

 ?>