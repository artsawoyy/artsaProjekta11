<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class M_account extends CI_Model{
	function daftar($data)
	{
		$this->db->insert('member', $data);
			$id_member = $this->db->insert_id();

			return $id_member;

	}
	function changeActiveState($key){
		$this->load->database();
		$data = array(
			'active' => 1
		);

		$this->db->where('md5(id_member)' , $key );
		$this->db->update('member',$data);

		return true;
	}
} 
?>