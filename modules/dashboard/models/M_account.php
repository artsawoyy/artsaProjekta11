<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class M_account extends CI_Model{

	function tampil(){
		return $this->db->get('tbl_produk');
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function get_order(){
 		$query = $this->db->get('tbl_order');
 		return $query->result_array();
 	}
 	function get_pelanggan_id($id){
 		if($id>0){
 			$this->db->where('id',$id);
 			}
		$query = $this->db->get('tbl_pelanggan');
 		return $query->result_array();
 	}
 	function get_detail_id($id){
 		if($id>0){
 			$this->db->where('order_id',$id);
 		}
		$query = $this->db->get('tbl_detail_order');
 		return $query->result_array();
 	}
 	function tambah($data)
	{
		$this->db->insert('tbl_produk', $data);
 		$id_produk = $this->db->insert_id();
 		return (isset($id_produk)) ? $id_produk : FALSE;
	} 
	function get_kategori(){
 		$query = $this->db->get('tbl_kategori');
 		return $query->result_array();
 	}
 	function edit_kategori($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function hapus_kategori($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function update_kategori($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tampilkategori(){
		return $this->db->get('tbl_kategori');
	}
	function tambahkategori($data)
	{
		$this->db->insert('tbl_kategori', $data);
	}
	function get_member(){
 		$query = $this->db->get('member');
 		return $query->result_array();
 	}
 	function update_member($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


 } 
?>