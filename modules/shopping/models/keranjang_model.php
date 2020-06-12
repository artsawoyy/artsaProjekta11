<?php if (!defined('BASEPATH')) exit('No direct script access
allowed');
class Keranjang_model extends CI_Model {
 public function get_produk_all()
 {
 $this->load->library('pagination'); // Load librari paginationnya
 $query = "SELECT * FROM tbl_produk"; // Query untuk menampilkan semua data siswa
 $config['base_url'] = base_url('shopping/index');
 $config['total_rows'] = $this->db->query($query)->num_rows();
 $config['per_page'] = 5;
 $config['uri_segment'] = 3;
 $config['num_links'] = 3;
 // Style Pagination
 // Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
 $config['full_tag_open'] = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
 $config['full_tag_close'] = '</ul>';

 $config['first_link'] = 'First';
 $config['first_tag_open'] = '<li>';
 $config['first_tag_close'] = '</li>';

 $config['last_link'] = 'Last';
 $config['last_tag_open'] = '<li>';
 $config['last_tag_close'] = '</li>';

 $config['next_link'] = ' <i class="glyphicon glyphicon-menu-right"></i> ';
 $config['next_tag_open'] = '<li>';
 $config['next_tag_close'] = '</li>';

 $config['prev_link'] = ' <i class="glyphicon glyphicon-menu-left"></i> ';
 $config['prev_tag_open'] = '<li>';
 $config['prev_tag_close'] = '</li>';

 $config['cur_tag_open'] = '<li class="active"><a href="#">';
 $config['cur_tag_close'] = '</a></li>';
 $config['num_tag_open'] = '<li>';
 $config['num_tag_close'] = '</li>';
 // End style pagination

 $this->pagination->initialize($config); // Set konfigurasi paginationnya
 $page = ($this->uri->segment($config['uri_segment'])) ?
 $this->uri->segment($config['uri_segment']) : 0;
 $query .= " LIMIT ".$page.", ".$config['per_page'];
 $data['limit'] = $config['per_page'];
 $data['total_rows'] = $config['total_rows'];
 $data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
 $data['tbl_produk'] = $this->db->query($query)->result();
 return $data;

 }
 public function get_produk_kategori($kategori){
 $this->load->library('pagination'); // Load librari paginationnya
 $query = "SELECT * FROM tbl_produk where kategori = $kategori"; // Query untuk menampilkan semua data siswa
 $config['base_url'] = base_url('shopping/produk_kategori/').'/'.$kategori.'/page/';
 $config['total_rows'] = $this->db->query($query)->num_rows();
 $config['per_page'] = 5;
 $config['uri_segment'] = 5;
 $config['num_links'] = 3;
 // Style Pagination
 // Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
 $config['full_tag_open'] = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
 $config['full_tag_close'] = '</ul>';

 $config['first_link'] = 'First';
 $config['first_tag_open'] = '<li>';
 $config['first_tag_close'] = '</li>';

 $config['last_link'] = 'Last';
 $config['last_tag_open'] = '<li>';
 $config['last_tag_close'] = '</li>';

 $config['next_link'] = ' <i class="glyphicon glyphicon-menu-right"></i>';
 $config['next_tag_open'] = '<li>';
 $config['next_tag_close'] = '</li>';

 $config['prev_link'] = ' <i class="glyphicon glyphicon-menu-left"></i> ';
 $config['prev_tag_open'] = '<li>';
 $config['prev_tag_close'] = '</li>';

 $config['cur_tag_open'] = '<li class="active"><a href="#">';
 $config['cur_tag_close'] = '</a></li>';
 $config['num_tag_open'] = '<li>';
 $config['num_tag_close'] = '</li>';
 // End style pagination

 $this->pagination->initialize($config); // Set konfigurasi paginationnya
 $page = ($this->uri->segment($config['uri_segment'])) ?
 $this->uri->segment($config['uri_segment']) : 0;
 $query .= " LIMIT ".$page.", ".$config['per_page'];
 $data['limit'] = $config['per_page'];
 $data['total_rows'] = $config['total_rows'];
 $data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
 $data['tbl_produk'] = $this->db->query($query)->result();
 return $data;
 
 }

  public function search($keyword){
 $this->load->library('pagination'); // Load librari paginationnya
 $query = "SELECT * FROM tbl_produk where deskripsi like '%$keyword%'"; // Query untuk menampilkan semua data siswa
 $config['base_url'] = base_url('shopping/index');
 $config['total_rows'] = $this->db->query($query)->num_rows();
 $config['per_page'] = 5;
 $config['uri_segment'] = 3;
 $config['num_links'] = 3;
 // Style Pagination
 // Agar bisa mengganti stylenya sesuai class2 yg ada di bootstrap
 $config['full_tag_open'] = '<ul class="pagination pagination-sm m-t-xs m-b-xs">';
 $config['full_tag_close'] = '</ul>';

 $config['first_link'] = 'First';
 $config['first_tag_open'] = '<li>';
 $config['first_tag_close'] = '</li>';

 $config['last_link'] = 'Last';
 $config['last_tag_open'] = '<li>';
 $config['last_tag_close'] = '</li>';

 $config['next_link'] = ' <i class="glyphicon glyphicon-menu-right"></i>';
 $config['next_tag_open'] = '<li>';
 $config['next_tag_close'] = '</li>';

 $config['prev_link'] = ' <i class="glyphicon glyphicon-menu-left"></i> ';
 $config['prev_tag_open'] = '<li>';
 $config['prev_tag_close'] = '</li>';

 $config['cur_tag_open'] = '<li class="active"><a href="#">';
 $config['cur_tag_close'] = '</a></li>';
 $config['num_tag_open'] = '<li>';
 $config['num_tag_close'] = '</li>';
 // End style pagination

 $this->pagination->initialize($config); // Set konfigurasi paginationnya
 $page = ($this->uri->segment($config['uri_segment'])) ?
 $this->uri->segment($config['uri_segment']) : 0;
 $query .= " LIMIT ".$page.", ".$config['per_page'];
 $data['limit'] = $config['per_page'];
 $data['total_rows'] = $config['total_rows'];
 $data['pagination'] = $this->pagination->create_links(); // Generate link pagination nya sesuai config diatas
 $data['tbl_produk'] = $this->db->query($query)->result();
 return $data;
 
 }
 public function get_kategori_all()
 {
 $query = $this->db->get('tbl_kategori');
 return $query->result_array();
 }
 public function get_produk_id($id)
 {
 $this->db->select('tbl_produk.*,nama_kategori');
 $this->db->from('tbl_produk');
 $this->db->join('tbl_kategori','kategori=tbl_kategori.id','left');
 $this->db->where('id_produk',$id);
 return $this->db->get();
 }
 public function tambah_pelanggan($data)
 {
 $this->db->insert('tbl_pelanggan', $data);
 $id = $this->db->insert_id();
 return (isset($id)) ? $id : FALSE;
 }
 public function tambah_order($data)
 {
 $this->db->insert('tbl_order', $data);
 $id = $this->db->insert_id();
 return (isset($id)) ? $id : FALSE;
 }
 public function tambah_detail_order($data)
 {
 $this->db->insert('tbl_detail_order', $data);
 }
}
?>
