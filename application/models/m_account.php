<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');
/**
* 
*/
class M_account extends CI_Model
{
	
	function status_account()
	{
		return $this->db->get('tb_account')->result_array();
	}

	function pending_account()
	{
		return $this->db->get('tb_account')->result_array();
	}
	function insert()
	{
		return $this->db->get_where('tb_account')->result_array();
	}

}
?>