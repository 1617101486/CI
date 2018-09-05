s <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model{
	//fungsi untuk menampilkan semua data siswa
	function tampil_data(){
		return $this->db->get('tb_siswa')->result_array();
	}

	public function siswa($id_siswa)
	{
		return $this->db->get_where('tb_siswa', array('id_siswa' => $id_siswa));
	}

} 