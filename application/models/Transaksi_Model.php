<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function getTransaksi()
	{
		return $this->db->get('transaksi');
	}
	public function Transaksi()
{
    $tanggal = date('Y-m-d');
    $tanggalYMD = date('Ymd');
    $prefix = "TRS";

    // Ambil transaksi terakhir hari ini
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

    // Format counter jadi 3 digit
    $formatkode = str_pad($counter, 3, '0', STR_PAD_LEFT);

    // Gabungkan prefix + tanggal + counter
    $kodebaru = $prefix . $tanggalYMD . $formatkode;

    // Simpan transaksi
    $data = array(
        "kode_transaksi" => $kodebaru,
        "tanggal" => $tanggal
    );
    $this->db->insert("transaksi", $data);

    // Optional: return kode untuk digunakan di view/controller
    return $kodebaru;
}

	
}
