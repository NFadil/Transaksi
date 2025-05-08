<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_adm extends CI_Controller {

	public function index()
	{
		$this->load->view('Admin/Navbar');
	}
}
