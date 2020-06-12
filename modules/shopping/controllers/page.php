<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Page extends CI_Controller {
 public function __construct()
 {
 parent::__construct();
 $this->load->library('cart');
 $this->load->model('keranjang_model');
 }
 public function index()
 {
 $data['produk'] = $this->keranjang_model->get_produk_all();
 $data['kategori'] = $this->keranjang_model->get_kategori_all();
 $this->load->view('shopping/themes/index',$data);
 }
  public function tentang()
 {
 $data['kategori'] = $this->keranjang_model->get_kategori_all();
 $this->load->view('shopping/themes/header',$data);
 $this->load->view('shopping/tentang',$data);
 $this->load->view('shopping/themes/footer');
 }
 public function cara_bayar()
 {
 $data['kategori'] = $this->keranjang_model->get_kategori_all();
 $this->load->view('shopping/themes/header',$data);
 $this->load->view('shopping/cara_bayar',$data);
 $this->load->view('shopping/themes/footer');
 }
}
