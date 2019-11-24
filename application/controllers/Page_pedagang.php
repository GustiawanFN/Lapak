<?php
//CONTROLLER
defined('BASEPATH') or exit('No direct script access allowed');

class Page_pedagang extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_page_pedagang');
		$this->load->library('session');
		$this->load->helper(array('url')); //load helper url
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
		

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("index.php/login"));
		}
    }


    public function input_data_pedagang(){

        $data['judul'] = "Input Data Pedagang";

		$data['page_name'] = 'input_pedagang.php';
		$this->load->view('menu', $data);
    }


	//Fungsi onClick Simpan data pedagang
    public function tambah_aksi(){
       
        $nama_pedagang = $this->input->post('nama_pedagang');
        $alamat_pedagang = $this ->input->post('alamat_pedagang');


        $data = array(
        //    'kode_pedagang' => $kode_pedagang,
           'nama_pedagang' => $nama_pedagang,
           'alamat_pedagang' => $alamat_pedagang
            
        );

        $this->M_page_pedagang->input_data($data, 'tbl_pedagang');

		$this->session->set_flashdata("a", "Data Berhasil Ditambah");
		redirect('page_pedagang/input_data_pedagang');

	}
	
	//View
	public function kelola_data_pedagang()
	{
		//$yoghurt as key
		$data['pedagang'] = $this->M_page_pedagang->tampil_data()->result();

		$data['judul'] = "Data Pedagang";
		$data['page_name'] = 'kelola_pedagang.php';
		$this->load->view('menu', $data);
	}

	public function edit($kode_pedagang) {
		$nama_pedagang = $this->input->post('nama_pedagang');
		$alamat_pedagang = $this->input->post('alamat_pedagang');

		$data = array(
			
			   'nama_pedagang' => $nama_pedagang,
			   'alamat_pedagang' => $alamat_pedagang
				
			);

			$where = array('kode_pedagang' => $kode_pedagang);
			$this->M_page_pedagang->edit($where, $data, 'tbl_pedagang');
	
			$this->session->set_flashdata("a", "Data Berhasil Diedit");
			redirect('page_pedagang/kelola_data_pedagang');
	}
	function hapus($kode_pedagang)
	{
		$where = array('kode_pedagang' => $kode_pedagang);

		$this->M_page_pedagang->hapus_data($where, 'tbl_pedagang');
		$this->session->set_flashdata("a", "Data Berhasil Dihapus");
		redirect('page_pedagang/kelola_data_pedagang');
	}
    
}
