<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_ustadz extends CI_Model{
	//fungsi untuk menampilkan semua data siswa
	function tampil_data(){
		return $this->db->get_where('tb_ustadz')->result_array();
	}

	public function ustadz($id)
	{
		return $this->db->get_where('tb_ustadz', array('id_ustadz' => $id))->result_array();
	}
	public function update_ustadz($update)
	{
		return $this->db->where('id_ustadz',$update['id_ustadz'])->update('tb_ustadz',$update);
	}

	public function tampil_ustadzpilihan($id_pengguna=null){
		if(is_null($id_pengguna)){
			return $this->db->query('select a.id_ustadz, b.nama_ustadz, c.nama_siswa,d.jenis_kelas from tb_ustadz_terpilih a left join tb_ustadz b on a.id_ustadz=b.id_ustadz left join tb_siswa c on a.id_siswa=c.id_siswa LEFT join tb_kelas d on d.id_kelas=c.id_kelas')->result_array();	
		}else{
			return $this->db->query('select a.id_ustadz, b.nama_ustadz, c.nama_siswa,d.jenis_kelas from tb_ustadz_terpilih a left join tb_ustadz b on a.id_ustadz=b.id_ustadz left join tb_siswa c on a.id_siswa=c.id_siswa LEFT join tb_kelas d on d.id_kelas=c.id_kelas where a.id_siswa=?',$id_pengguna)->result_array();		
			
		}
		
	}

	public function insert_ustadzterpilih($input){
		return $this->db->insert('tb_ustadz_terpilih',$input);
	}

	public function tugas($id_tugas=null){
		if(is_null($id_tugas)){
			return $this->db->query('select a.*,b.nama_ustadz,c.nama_siswa from tb_tugas a left join tb_ustadz b on a.id_ustadz=b.id_ustadz
				left join tb_siswa c on a.id_siswa=c.id_siswa')->result_array();
		}else{
			return $this->db->query('select a.*,b.nama_ustadz,c.nama_siswa from tb_tugas a left join tb_ustadz b on a.id_ustadz=b.id_ustadz
				left join tb_siswa c on a.id_siswa=c.id_siswa where a.id_tugas=?',$id_tugas)->result_array();
		}
		
	}

}

