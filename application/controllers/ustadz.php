<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ustadz extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_ustadz');
		if ($this->session->userdata('status') != "login") {redirect(base_url("login"));}
	}

	function index(){
		$data['judul'] = "DATA USTADZ";
		 $data['ustadz'] = $this->m_ustadz->tampil_data();

		$this->load->view('v_header',$data);		
		$this->load->view('v_ustadz',$data);
		$this->load->view('v_footer',$data);
	}
	

	function tambah(){
		$data['judul'] = "TAMBAH USTADZ";
		

		$this->load->view('v_header',$data);
		$this->load->view('v_tambah_ustadz',$data);
		$this->load->view('v_footer',$data);
	}

	function input(){
		$id = $this->input->post('id_ustadz');
		$nama = $this->input->post('nama_ustadz');
		$ttl = $this->input->post('ttl');
		$alamat = $this->input->post('alamat');
		$status = $this->input->post('status');
		$data = array(
			'id_ustadz' => $id,
			'nama_ustadz' => $nama,
			'ttl' => $ttl,
			'alamat' => $alamat,
			'status' => $status
			);
		$this->db->insert('tb_ustadz',$data);
		redirect('ustadz');
	}

	function update()
	{
		$data['judul'] = "EDIT USTADZ";
		$id = $this->uri->segment(3);
        $data['id_ustadz'] = $id;
		$data['ustadz'] = $this->m_ustadz->ustadz($id);
		if(isset($_post['update'])){
				$id = $this->input->post('id_ustadz');
				$nama = $this->input->post('nama_ustadz');
				$tempat = $this->input->post('tempat');
				$tanggal = $this->input->post('tanggal');
				$alamat = $this->input->post('alamat');
				$status = $this->input->post('status');
				$data = array(
					'id_ustadz' => $id,
					'nama_ustadz' => $nama,
					'ttl' => $tempat.', '.$tanggal,
					'alamat' => $alamat,
					'status' => $status
					);
				$this->m_ustadz->update_ustadz('tb_ustadz',$data);
			    redirect('ustadz');
		}
		$this->load->view('v_header',$data);
		$this->load->view('v_edit_ustadz',$data);
		$this->load->view('v_footer',$data);
	}

	function edit_simpan()
	{
		$id = $this->input->post('id_ustadz');
		$data = array(
			'id_ustadz' => $this->input->post('id'),
			'nama_ustadz' => $this->input->post('nama'),
			'ttl' => $this->input->post('ttl'),
			'alamat' => $this->input->post('alamat'),
			'status' => $this->input->post('status'),
		);
		$this->db->where('id_ustadz',$id);
		$this->db->update('tb_ustadz',$data);
		redirect('ustadz');
	}

	function delete()
	{
		$id = $this->uri->segment(3);
		$this->db->where('id_ustadz',$id);
		$this->db->delete('tb_ustadz');
		redirect('ustadz');
	}
	function profile()
	{
		$data['judul'] = "PEMILIHAN USTADZ";
		$data['ustadz'] = $this->m_ustadz->tampil_data();
		
		$data['id'] = $this->input->get('id');

		
		$this->load->view('v_header',$data);
		$this->load->view('v_profile_ustadz',$data);
		$this->load->view('v_footer',$data);
	}

	function insertpilihanustadz(){
		$insert = array(
			'id_ustadz' => $_GET['id'],
			'id_siswa' => $this->session->userdata('id')
		);
		
		$this->m_ustadz->insert_ustadzterpilih($insert);
		redirect('ustadz/pilihan');

	}
	function pilihan()
	{
		 $data['judul'] = "USTADZ PILIHAN";
		

		$id = $this->session->userdata('id');
		$id_pengguna = $this->session->userdata('id');
		$user = $this->session->userdata('kedudukan');

		if($user == '1'){
			$data['ustadz'] = $this->m_ustadz->tampil_ustadzpilihan();
		}else{

			$data['ustadz'] = $this->m_ustadz->tampil_ustadzpilihan($id_pengguna);
			
		}
		
		$this->load->view('v_header',$data);
		$this->load->view('v_ustadz_pilihan',$data);
		$this->load->view('v_footer',$data);
		
	}
	function tugas(){

		$data['judul'] = "TUGAS HAPALAN";
		$id_tugas = $this->uri->segment(3);
        $data['id_tugas'] = $id_tugas;
		$data['tugas'] = $this->m_ustadz->tugas();
		
		$this->load->view('v_header',$data);
		$this->load->view('v_ustadz_tugas',$data);
		$this->load->view('v_footer',$data);

	}
	function update_tugas($id)
	{
		$data['judul'] = "EDIT TUGAS";

        $data['id_ustadz'] = $id;
		$data['tugas'] = $this->m_ustadz->tugas($id);
		
		$this->load->view('v_header',$data);
		$this->load->view('v_edit_tugas',$data);
		$this->load->view('v_footer',$data);

	}

	function edit_tugas()
	{
					
		$id = $this->input->post('id_t');
		$surat = $this->input->post('surat');
		$ayat = $this->input->post('ayat');
		$status = $this->input->post('status');
		$keterangan = $this->input->post('keterangan');
		
		$data = array(
			'surat' => $surat,
			'ayat' => $ayat,
			'status' => $status,
			'keterangan' => $keterangan
			);
		$this->db->where('id_tugas',$id)->update('tb_tugas',$data);
	    redirect('ustadz/tugas');
	}
}