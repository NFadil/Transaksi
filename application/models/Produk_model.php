<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	public function getProduk()
	{
		return $this->db->get('produk');
	}
    public function insertproduk()
    {
        $produk = $this->input->post("produk");
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        
        $data = array(
            "produk" => $produk,
            "stok" => $stok,
            "harga" => $harga
        );
        $this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Produk Ditambahkan !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
        return $this->db->insert("produk",$data);
    }
    public function deleteProduk($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('produk');
        $this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Produk berhasil dihapus !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
    }
    public function getProdukById($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('produk');
    }
    public function updateProduk($id)
    {
        $produk = $this->input->post("produk");
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');
        
        $data = array(
            "produk" => $produk,
            "stok" => $stok,
            "harga" => $harga
        );
        $this->db->where("id", $id);
        $this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Produk berhasil di update !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
        return $this->db->update("produk", $data);
    }
}
