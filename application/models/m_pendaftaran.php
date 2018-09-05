s <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendaftaran extends CI_Model{
	//fungsi untuk menampilkan semua data siswa
	function input_data(){
		return $this->db->get('tb_account');
	}

	public function pendaftaran($id_account)
	{
		return $this->db->get_where('tb_pendaftaran', array('id_account' => $id_account));
	}

} 