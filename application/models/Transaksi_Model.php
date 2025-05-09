<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function getTransaksi()
	{
		$this->db->select('detail_transaksi.*, transaksi.tanggal, transaksi.kode_transaksi, produk.harga, produk.produk');
		$this->db->from('detail_transaksi');
		$this->db->join('transaksi', 'transaksi.id = detail_transaksi.id_transaksi');
		$this->db->join('produk', 'produk.id = detail_transaksi.id_produk');
		return $this->db->get();
	}
	public function getTransaksiByID($id)
	{
		$this->db->select('detail_transaksi.*, transaksi.tanggal, transaksi.kode_transaksi, produk.harga, produk.produk');
		$this->db->from('detail_transaksi');
		$this->db->join('transaksi', 'transaksi.id = detail_transaksi.id_transaksi');
		$this->db->join('produk', 'produk.id = detail_transaksi.id_produk');
		$this->db->where('detail_transaksi.id', $id);
		return $this->db->get()->row();
	}

	public function Transaksi()
	{
		$id_produk = $this->input->post("produkId");
		$jumlah = $this->input->post("jumlah");
		$tanggal = date('Y-m-d');
		$tanggalYMD = date('Ymd');
		$prefix = "TRS";

		$this->db->from('transaksi');
		$this->db->where('tanggal', $tanggal);
		$this->db->order_by('kode_transaksi', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			$row = $query->row_array();
			$transaksiterakhir = $row['kode_transaksi'];
			$kodeterakhir = (int)substr($transaksiterakhir, -3);
			$counter = $kodeterakhir + 1;
		} else {
			$counter = 1;
		}

		$formatkode = str_pad($counter, 3, '0', STR_PAD_LEFT);

		$kodebaru = $prefix . $tanggalYMD . $formatkode;

		$data = array(
			"kode_transaksi" => $kodebaru,
			"tanggal" => $tanggal
		);
		$this->db->insert("transaksi", $data);
	
		$id_transaksi = $this->db->insert_id();
		
		$data2 = array(
			"id_transaksi" => $id_transaksi, 
			"id_produk" => $id_produk,
			"quantity" => $jumlah
		);
		$this->db->insert("detail_transaksi", $data2);
		$id = $this->db->insert_id();

		$this->db->where('id', $id_produk);
		$produk = $this->db->get('produk')->row();

		if ($produk) {
			$stok_sekarang = $produk->stok;
			$stok_baru = $stok_sekarang - $jumlah;

			if ($stok_baru < 0) {
				$this->session->set_flashdata("error", "<div class='alert alert-danger' role='alert'>Stok tidak cukup!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
				return false;
			}

			$this->db->where('id', $id_produk);
			$this->db->update('produk', array('stok' => $stok_baru));
		}
		$this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Berhasil Transaksi !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");

		return $id; 

	}
	public function deleteTransaksi($id)
	{
		
		$this->db->where('id_transaksi', $id);
		$this->db->delete('detail_transaksi');
	
		$this->db->where('id', $id);
		$this->db->delete('transaksi');
		
		$this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Transaksi berhasil dihapus!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
	}
	

	
}
