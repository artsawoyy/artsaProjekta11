<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login extends MY_Controller {
 public function __construct(){
 parent::__construct();
 $this->load->model('UserModel');
 }
 public function index(){
 if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
 redirect('member'); // Redirect ke page home
 // function render_login tersebut dari file core/MY_Controller.php
 $this->render_login('loginv'); // Load view login.php
 }
 public function masuk(){
 $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
 $password = md5($this->input->post('password')); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
 $user = $this->UserModel->get($username); // Panggil fungsi get yang ada di UserModel.php
 if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
 $this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
 redirect('loginv'); // Redirect ke halaman login
 }else{
 if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
 $session = array(
 'authenticated'=>true, // Buat session authenticated dengan value true
 'username'=>$user->username, // Buat session username
 'nama_member'=>$user->nama_member, // Buat session nama
 'alamat'=>$user->alamat, // Buat session alamat
 'telp'=>$user->telp, // Buat session telp
 'email'=>$user->email, // Buat session email
 'active' =>$user->active,
 'role'=>$user->role // Buat session role

 );
 $this->session->set_userdata($session); // Buat session sesuai $session
 if ($this->session->userdata("role")=="admin"){
 			redirect('dashboard');
 		}else if($this->session->userdata("role")=="member"){
 			redirect('member');
 		}
 }else{
 $this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
 redirect('loginv'); // Redirect ke halaman login
 }
 }
  }
 public function logout(){
 $this->session->sess_destroy(); // Hapus semua session
 redirect('shopping'); // Redirect ke halaman login
 }
}