<?php
//CONTROLLER
defined('BASEPATH') or exit('No direct script access allowed');

class Page_laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_laporan');
		$this->load->library('session');
		$this->load->helper(array('url')); //load helper url
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("index.php/login"));
		}
    }


	
	//View
	public function data_laporan()
	{
		//$yoghurt as key
		$data['laporan'] = $this->M_laporan->tampil_data()->result();

		$data['judul'] = "Data Iuran";
		$data['page_name'] = 'laporan.php';
		$this->load->view('menu', $data);
	}

    
}
