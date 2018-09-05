<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_hitung extends CI_Model {

	function hitung(){
		return $this->db->query("SELECT COUNT(tb_ustadz) AS hitung_ustadz FROM db_tahfidz_quran");
	}

}

 ?>