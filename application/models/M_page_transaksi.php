<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Page_transaksi extends CI_Model {
	public function login($table,$where){
		return $this->db->get_where($table,$where);
	}	
	
	function tampil_data(){
		return $this->db->get('tbl_lapak');
	}

	function list_pedagangs(){
        return $this->db->get('tbl_pedagang');
    }

	function input_data($data,$table){
		$this->db->insert($table,$data);		
	}

	function edit($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	

}