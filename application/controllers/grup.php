<?php
defineD('BASEPATH') OR exit ('No direct script access allowed');

class Grup extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_grup');
		$this->load->model('m_pesan');
		if ($this->session->userdata('status') != "login") {redirect(base_url("login"));}

	}

	function index()
	{
		$data['judul'] = "DATA GRUP";
		$data['grup'] = $this->m_grup->tampil_data()->result();
		$this->load->view('v_header',$data);
		$this->load->view('v_grup',$data);
		$this->load->view('v_footer',$data);
	}

	function tambah()
	{
		$data['judul'] = "TAMBAH GRUP";
		$this->load->view('v_header',$data);
		$this->load->view('v_tambah_grup',$data);
		$this->load->view('v_footer',$data);
	}

	function input()
	{
		$id_grup = $this->input->post('id_grup');
		$id_ustadz = $this->input->post('id_ustadz');
		$id_siswa = $this->input->post('id_siswa');
		$nama_grup = $this->input->post('nama_grup');
		$tanggal = $this->input->post('tanggal');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'id_grup' => $id_grup,
			'id_ustadz' => $id_ustadz,
			'id_siswa' => $id_siswa,
			'nama_grup' => $nama_grup,
			'tanggal' => $tanggal,
			'keterangan' => $keterangan,
			
			
			);
		$this->db->insert('tb_grup',$data);
		redirect('grup');
	}

	function update()
	{
		$data['judul'] = "EDIT GRUP";
		$id = $this->uri->segment(3);
		$data['g'] = $this->m_grup->grup($id)->row_array();
		$this->load->view('v_header',$data);
		$this->load->view('v_edit_grup',$data);
		$this->load->view('v_footer',$data);
	}

	function edit_simpan()
	{
		$id_grup = $this->input->post('id_grup');
		$data = array(
			'nama_grup' => $this->input->post('nama_grup'),
			'tanggal' => $this->input->post('tanggal'),
			'keterangan' => $this->input->post('keterangan'),
			'surat' => $this->input->post('surat'),
			'ayat' => $this->input->post('ayat'),
		);
		$this->db->where('id_grup',$grup);
		$this->db->update('tb_grup',$data);
		redirect('grup');
	}

	function Daftar()
	{
		$data['judul'] = "DATA GRUP";
		$data['grup'] = $this->m_grup->tampil_data()->result();
		$this->load->view('v_header',$data);
		$this->load->view('v_daftar',$data);
		$this->load->view('v_footer',$data);
	}

	function delete()
	{
		$id_grup = $this->uri->segment(3);
		$this->db->where('id_grup',$id_grup);
		$this->db->delete('tb_grup');
		redirect('grup');
	}

	function detail(){
		$id = $this->uri->segment(3);
		$this->session->set_userdata('kepada',$ustadz);
		$data['judul'] = "DETAIL GRUP";
		$data['pesan'] = $this->m_pesan->pesan($id)->result();
		$data['kelas'] = $this->m_grup->kelas($ustadz)->row_array();
		$this->load->view('v_header', $data);
		$this->load->view('v_detail_kelas',$data);
		$this->load->view('v_footer',$data);
	}

	function pesan(){
		$data = array(
			'dari' => $this->session->userdata('id'),
			'kepada' => $this->uri->segment(3),
			'isi' => $this->input->post('isi') 
		);
		$this->db->insert('tb_pesan',$data);
		redirect(base_url('grup/detail/').$this->uri->segment(3));
	}
}