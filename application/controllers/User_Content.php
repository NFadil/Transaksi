<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Content extends CI_Controller {

	public function __construct() {
    parent::__construct();
  
    $this->load->model("Produk_model","",TRUE);
    $this->load->model("Transaksi_model","",TRUE);
  }
    public function index()
    {
      $data['produk'] = $this->Produk_model->getProduk();
      $this->load->view('User/Navbar');
      $this->load->view('User/Produk',$data);
      $this->load->view('User/Footer');
    }
    public function Transaksi()
    {
      if ($this->Transaksi_model->Transaksi()) {
        redirect(base_url(''));
      } else {
        redirect(site_url("Dashboar_adm/Tambah_produk"));
      }
    }
}
?>