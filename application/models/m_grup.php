<?php
defined('BASEPATH') OR exit ('No direct script access allowed'); 

class M_grup extends CI_Model {

	function tampil_data(){
		return $this->db->get('tb_grup');
	}

	public function grup($id_grup)
	{
		return $this->db->get_where('tb_grup', array('id_grup' => $id_grup));
	}
	
}