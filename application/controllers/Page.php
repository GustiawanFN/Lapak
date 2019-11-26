<?php
//CONTROLLER
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
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
		$this->load->model("M_page");
		$this->load->model("M_page_pedagang");

		if ($this->session->userdata('status') != "login") {
			redirect(base_url("index.php/login"));
		}
	}
	
	public function index()
	{
		$data['judul'] = "Data Lapak";

		$data = array();
		$data['page_name'] = 'home.php';
		$this->load->view('menu', $data);
	}

	public function inputdatalapak()
	{
		$data['pedagang'] = $this->M_page->list_pedagang()->result();
		$data['judul'] = "Input Data Lapak";

		$data['page_name'] = 'input_lapak.php';
		$this->load->view('menu', $data);

	}

	//Fungsi onClick Simpan data lapak
    public function tambah_aksi(){
		$status = 1;
        
        $kode_lapak = $this->input->post('kode_lapak');
		$lokasi_lapak = $this ->input->post('lokasi_lapak');
		$harga_lapak = $this ->input->post('harga_lapak');

		

		//Encript base64
		$encode = base64_encode($kode_lapak);
		
		$this->load->library('ciqrcode'); //pemanggilan library QR CODE

		$config['cacheable']	= true; //boolean, the default is true
		$config['cachedir']		= './assets/'; //string, the default is application/cache/
		$config['errorlog']		= './assets/'; //string, the default is application/logs/
		$config['imagedir']		= './assets/images/'; //direktori penyimpanan qr code
		$config['quality']		= true; //boolean, the default is true
		$config['size']			= '1024'; //interger, the default is 1024
		$config['black']		= array(224, 255, 255); // array, default is array(255,255,255)
		$config['white']		= array(70, 130, 180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);

		$image_name = $encode. '.png'; //buat name dari qr code sesuai dengan 

		$params['data'] = $encode; //data yang akan di jadikan QR CODE
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE


        $data = array(
        
           'kode_lapak' => $kode_lapak,
		   'lokasi_lapak' => $lokasi_lapak,
		   'harga_lapak' => $harga_lapak,
		   
		   'qrcode' => $image_name
            
        );

        $this->M_page->input_data($data, 'tbl_lapak');

		$this->session->set_flashdata("a", "Data Berhasil Ditambah");
		redirect('page/inputdatalapak');

	}

	//View
	public function kelola_data_lapak()
	{
		
		$data['lapak'] = $this->M_page->tampil_data_join();
		

		$data['judul'] = "Data Lapak";
		$data['page_name'] = 'kelola_lapak.php';
		$this->load->view('menu', $data);
	}


	public function edit($kode_lapak) {
		$lokasi_lapak = $this->input->post('lokasi_lapak');
		$harga_lapak = $this->input->post('harga_lapak');

		$data = array(
			
			   'lokasi_lapak' => $lokasi_lapak,
			   'harga_lapak' => $harga_lapak,
				
			);

			$where = array('kode_lapak' => $kode_lapak);
			$this->M_page->edit($where, $data, 'tbl_lapak');
	
			$this->session->set_flashdata("a", "Data Berhasil Diedit");
			redirect('page/kelola_data_lapak');
	}

	//function hapus
	function hapus($kode_lapak)
	{
		$where = array('kode_lapak' => $kode_lapak);

		$this->M_page->hapus_data($where, 'tbl_lapak');
		$this->session->set_flashdata("a", "Data Berhasil Dihapus");
		redirect('page/kelola_data_lapak');
	}


	

	
}
