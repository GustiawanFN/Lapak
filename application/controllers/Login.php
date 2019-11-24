<?php
class Login extends CI_Controller{

function __construct(){
    parent::__construct();	
        $this->load->helper(array('url')); //load helper url
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');	
		$this->load->model('m_login');
    
}

function index(){
    $this->load->view('v_login');
}

public function aksi_login(){

    $user = $this->input->post('email');
    $password = $this->input->post('pass');

    $where = array(
        'username' => $user,
        'password' => md5($password)
    );

    $cek = $this->m_login->cek_login("tbl_admin", $where)->num_rows();
		if ($cek > 0) {

			$data_session = array(
				'nama' => $user,
				'status' => "login"
			);
			var_dump($data_session);

            $this->session->set_userdata($data_session);
            redirect(base_url("index.php/page/index"));
        }else{
            echo "Username dan password salah !";
        }
    }

    function logout(){
        $this->session-session_destroy();
        redirect(base_url('index.php/login'));
    }
}