<?php
defined('BASEPATH') OR exit ('No direct script access allowed'); 

class M_pesan extends CI_Model {

	function pesan($kepada){
		return $this->db->query("SELECT *, tb_account.nama_lengkap FROM tb_pesan LEFT JOIN tb_account ON tb_pesan.dari=tb_account.id_account WHERE kepada = '$kepada' ORDER BY waktu ASC");
	}

	function pesan_semua($diriku){
		return $this->db->query("SELECT *, FROM tb_pesan WHERE (tb_pesan.dari = '$diriku') OR (tb_pesan.kepada = '$diriku' OR tb_account.nama_lengkp  ");
	}

}