<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function getTransaksi()
	{
		return $this->db->get('transaksi');
	}
	
}
