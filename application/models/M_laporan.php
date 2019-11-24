<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {
	public function login($table,$where){
		return $this->db->get_where($table,$where);
    }	
	
    function tampil_data(){
		return $this->db->get('tbl_tagihan');
	}

	

	

    
}