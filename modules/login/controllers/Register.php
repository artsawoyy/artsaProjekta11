<?php 
defined('BASEPATH') OR exit('No direct script access allowed');   
class Register extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('m_account');
    //call model
	} 
 
  public function index() {

  	$this->form_validation->set_rules('nama_member', 'NAME','required');
  	$this->form_validation->set_rules('username', 'USERNAME','required');
    $this->form_validation->set_rules('telp', 'TELP','required');
    $this->form_validation->set_rules('alamat', 'ALAMAT','required');
    $this->form_validation->set_rules('role', 'ROLE','required');
  	$this->form_validation->set_rules('email','EMAIL','required|valid_email');
  	$this->form_validation->set_rules('password','PASSWORD','required');
  	$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password] ');

  	if($this->form_validation->run() == FALSE) {
      $this->load->view('v_register');
  }else{

  	$nama_member   =    $this->input->post('nama_member');
  	$username =    $this->input->post('username');
  	$email  =    $this->input->post('email');
    $telp  =    $this->input->post('telp');
    $alamat  =    $this->input->post('alamat');
    $role  =    $this->input->post('role');
  	$password =    md5($this->input->post('password'));


    $data = array(
     'nama_member' => $nama_member,
     'username' => $username,
     'email' => $email,
     'telp' => $telp,
     'alamat' => $alamat,
     'role' => $role,
     'password' => $password,
     'active' => 0
    );

  	$this->load->model('m_account');
    $id_member=$this->m_account->daftar($data);

    $encrypted_id=md5($id_member);

    $this->load->library('email');
    $config=array();
    $config['charset']='utf-8';
    $config['useragent']='Codeigniter';
    $config['protocol']="smtp";
    $config['mailtype']="html";
    $config['smtp_host']="ssl://smtp.gmail.com";
    $config['smtp_port']="465";
    $config['smtp_timeout']="400";
    $config['smtp_user']="lindatavia99@gmail.com";
    $config['smtp_pass']="miftakhu1";
    $config['crlf']="\r\n";
    $config['newline']="\r\n";
    $config['wordwrap']=TRUE;
    
  	$this->email->initialize($config);
    //konfigurasi pengiriman email
    $this->email->from($config['smtp_user']);
    $this->email->to($email);
    $this->email->subject("Verifikasi Akun");
    $this->email->message(
      "registrasi email : ".site_url("login/register/verification/$encrypted_id")
    );

    if ($this->email->send()){
      $pesan['message'] ="Silahkan Cek Email Anda Untuk Proses verifikasi";
      $this->load->view('v_sukses',$pesan);
    }else{
      $pesan['message'] ="Gagal Mengirim Verifikasi Ke Email Anda";
      $this->load->view('v_sukses',$pesan);
      
    }
    } 
  }  

  public function verification($key){
    $this->m_account->changeActiveState($key);
      $pesan['message'] ="Proses verifikasi Berhasil";
      $this->load->view('v_sukses',$pesan);
  }

}