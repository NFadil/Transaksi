<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_adm extends CI_Controller {

	public function __construct() {
        parent::__construct();
      
        $this->load->model("Produk_model","",TRUE);
		$this->load->model("Transaksi_model","",TRUE);
    }
	public function index()
	{
		$data['produk'] = $this->Produk_model->getProduk();
		$this->load->view('Admin/Navbar');
		$this->load->view('Admin/Data_trk',$data);
		$this->load->view('Admin/Footer');
	}
	public function Transaksi()
	{
		$data['transaksi'] = $this->Transaksi_model->getTransaksi();
		$this->load->view('Admin/Navbar');
		$this->load->view('Admin/Transaksi',$data);
		$this->load->view('Admin/Footer');
	}
	public function Tambah_produk()
	{
		$data['transaksi'] = $this->Transaksi_model->getTransaksi();
		$this->load->view('Admin/Navbar');
		$this->load->view('Admin/Tambah_Produk',$data);
		$this->load->view('Admin/Footer');
	}
	public function insertProduk()
	{
		if ($this->Produk_model->insertproduk()) {
			redirect(base_url(''));
		} else {
			redirect(site_url("Dashboar_adm/Tambah_produk"));
		}
	}
	public function Editproduk($id)
	{
		$data['produk'] = $this->Produk_model->getProdukById($id)->row();
		$this->load->view('Admin/Navbar');
		$this->load->view('Admin/Update_produk',$data);
		$this->load->view('Admin/Footer');

	}
	public function updateProduk($id)
	{
		if ($this->Produk_model->updateProduk($id)) {
			redirect(base_url(''));
		} else {
			redirect(site_url("Dashboard_adm/Editproduk"));
		}

	}
	public function Detail($id)
    {
      $data['laporan'] = $this->Transaksi_model->getTransaksiByID($id);
      $this->load->view('Admin/Navbar');
      $this->load->view('Admin/Detail',$data);
      $this->load->view('Admin/Footer');
    }
	public function deleteProduk($id) {
		$this->Produk_model->deleteProduk($id);
		redirect(base_url(''));
	}
	public function deleteTransaksi($id) {
		$this->Transaksi_model->deleteTransaksi($id);
		redirect(site_url('Dashboard_adm/Transaksi'));
	}
}
