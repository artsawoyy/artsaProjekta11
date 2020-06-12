<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Add_Kategori extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();	
		$this->simple_login->cek_login();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('m_account');
	}

	public function index(){
		$data['kategori'] = $this->m_account->tampilkategori()->result();
		 $this->render_backend_admin('dashboard/tambahkategori',$data);
		 if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
 show_404(); // Redirect ke halaman 404 Not found
 
	}

	 function tambah(){
			
                $id= $this->input->post('id');
            	$nama_kategori = $this->input->post('nama_kategori');

                $this->m_account->tambahkategori(array(
			        'id' => $id,
			        'nama_kategori' => $nama_kategori
				));  
                redirect(base_url('dashboard/kategori'));
		 if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
 show_404(); // Redirect ke halaman 404 Not found
 		}
}


 ?>