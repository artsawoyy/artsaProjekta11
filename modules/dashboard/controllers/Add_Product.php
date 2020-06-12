<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Add_Product extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();	
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('m_account');
	}

	public function index(){
		$data['kategori'] = $this->m_account->get_kategori();
             $this->render_backend_admin('dashboard/v_add_product',$data);
             if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
 show_404(); // Redirect ke halaman 404 Not found
 
	}

	public function upload(){
			$config['upload_path']          = 'assets/images';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            {
            	$data_produk=array (
            	$nama_produk = $this->input->post('nama_produk'),
            	$deskripsi = $this->input->post('deskripsi'),
             	$harga = $this->input->post('harga'),
            	$gambar = $this->input->post('gambar'),
            	$kategori = $this->input->post('kategori'),
            	$stok = $this->input->post('stok')
            	);
            	
            	$id_produk 	=  $this->m_account->tambah($data_produk);
 

				$this->session->set_flashdata('msg','data berhasil di upload');
				$pesan['message'] ="Pendaftaran berhasil";
				redirect(base_url('dashboard'));
 
            }
            else
            {
            	//tampung data dari form
            	$nama_produk = $this->input->post('nama_produk');
            	$deskripsi = $this->input->post('deskripsi');
             	$harga = $this->input->post('harga');
            	$file = $this->upload->data();
            	$gambar = $file['file_name'];
            	$kategori = $this->input->post('kategori');
            	$stok = $this->input->post('stok');
 
                $data_produk=array(
			        'nama_produk' => $nama_produk,
			        'deskripsi' => $deskripsi,
			        'harga' => $harga,
			        'gambar' => $gambar,
			        'kategori' => $kategori,
			        'stok' => $stok
				);
				$id_produk 	=  $this->m_account->tambah($data_produk);
 
				$this->session->set_flashdata('msg','data berhasil di upload');
				$pesan['message'] ="Pendaftaran berhasil";
				redirect(base_url('dashboard'));
 
            }
            
		}
}


 ?>