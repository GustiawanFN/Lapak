<?php
//CONTROLLER
defined('BASEPATH') or exit('No direct script access allowed');

class Page_transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_page');
		$this->load->library('session');
		$this->load->helper(array('url')); //load helper url
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		
        $this->load->model("M_page_transaksi");
        $this->load->model("M_page_pedagang");

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("index.php/login"));
		}
	}
	public function transaksi_data_lapak()
	{
		$data['pedagang'] = $this->M_page_transaksi->list_pedagangs()->result();
        $data['lapak'] = $this->M_page->tampil_data()->result();

		$data['judul'] = "Transaksi Lapak";
		$data['page_name'] = 'transaksi_lapak.php';

		$this->load->view('menu', $data);

	}

	
    

    public function list_pedagang(){
        $data['pedagang'] = $this->M_page_transaksi->list_pedagangs()->result();

	}
	
	public function sewa_lapak(){
		$data['pedagang'] = $this->M_page_transaksi->list_pedagangs()->result();
		$data['lapak'] = $this->M_page->tampil_data()->result();
		$data['judul'] = "Transaksi Lapak";
		$data['page_name'] = 'sewa_lapak.php';

		$this->load->view('menu', $data);
	}

	public function edit($kode_lapak) {

		$tersedia = 1;
		$kode_pedagang = $this->input->post('kode_pedagang');
		

		$data = array(
			'tersedia' => $tersedia,
			'kode_pedagang' => $kode_pedagang
			   
				
			);

			$where = array('kode_lapak' => $kode_lapak);
			$this->M_page_transaksi->edit($where, $data, 'tbl_lapak');
	
			$this->session->set_flashdata("a", "Data Berhasil Diedit");
			redirect('page/kelola_data_lapak');
	}
  
}
