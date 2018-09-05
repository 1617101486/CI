<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function __construct(){
		parent::__construct(); 
		$this->load->model('m_siswa');
		$this->load->model('m_grup');
		if ($this->session->userdata('status') != "login") {redirect(base_url("login"));}
	}

	function index(){
		$data['judul'] = "DATA SISWA";
		$data['siswa'] = $this->m_siswa->tampil_data();
		$this->load->view('v_header',$data);
		$this->load->view('v_siswa',$data);
		$this->load->view('v_footer',$data);
	}

	function tambah(){
		$data['judul'] = "TAMBAH SISWA";
		$this->load->view('v_header',$data);
		$this->load->view('v_tambah_siswa',$data);
		$this->load->view('v_footer',$data);
	}

	function input(){
		$id_siswa = $this->input->post('id_siswa');
		$nama_siswa = $this->input->post('nama_siswa');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal = $this->input->post('ttl');
		$alamat = $this->input->post('alamat');
		$id_kelas = $this->input->post('id_kelas');
		$status = $this->input->post('status');

		$data = array(
			'id_siswa' => $id_siswa,
			'nama_siswa' => $nama_siswa,
			'tempat_lahir' => $tempat_lahir,
			'ttl' => date($tanggal,strtotime('Y-m-d')),
			'alamat' => $alamat,
			'id_kelas' => $id_kelas
			);
		$this->db->insert('tb_siswa',$data);
		redirect('siswa');
	}

	function update(){
		$data['judul'] = "EDIT SISWA";
		$id_siswa = $this->uri->segment(3);
		$data['siswa'] = $this->m_siswa->siswa($id_siswa)->row_array();
		$this->load->view('v_header',$data);
		$this->load->view('v_edit_siswa',$data);
		$this->load->view('v_footer',$data);
	}

	function edit_simpan(){
		$id_siswa = $this->input->post('id_siswa');
		$data = array(
			'nama_siswa' => $this->input->post('nama_siswa'),
			'ttl' => $this->input->post('ttl'),
			'alamat' => $this->input->post('alamat'),
			'id_kelas' => $this->input->post('id_kelas'),

		);
		$this->db->where('id_siswa',$id_siswa);
		$this->db->update('tb_siswa',$data);
		redirect('siswa');
	}

	function delete(){
		$id_siswa = $this->uri->segment(3);
		$this->db->where('id_siswa',$id_siswa);
		$this->db->delete('tb_siswa');
		redirect('siswa');
	}
}