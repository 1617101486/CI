
<?php
defined('BASEPATH') OR exit('No direct scipt acces allowed');

class pesan extends CI_Controller {

	function __construct(){
		parent::__construct(); 
		$this->load->model('m_siswa');
		$this->load->model('m_grup');
		if ($this->session->userdata('status') != "login") {redirect(base_url("login"));}
	}

	function pesan(){
	
		$data['judul'] = "PESAN";
		$data['pesan']= $this->db->get('tb_pesan')->result_array();
		
		$this->load->view('v_header',$data);
		$this->load->view('v_pesan',$data);
		$this->load->view('v_footer',$data);

	}
	function tambah(){
		$data['judul'] = "pesan";
		$data['pesan'] =$this->db->get('tb_account')->result_array();

		$this->load->view('v_header',$data);
		$this->load->view('v_tambah_pesan',$data);
		$this->load->view('v_footer',$data);
	}
}
?>