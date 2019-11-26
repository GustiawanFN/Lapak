<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Page extends CI_Model {
	public function login($table,$where){
		return $this->db->get_where($table,$where);
	}	
	
	function tampil_data(){
		return $this->db->get('tbl_lapak');

		
	//	SELECT tbl_lapak.kode_lapak, tbl_lapak.lokasi_lapak, tbl_lapak.harga_lapak, tbl_lapak.tersedia, tbl_pedagang.nama_pedagang FROM tbl_lapak LEFT JOIN tbl_pedagang ON tbl_lapak.kode_pedagang = tbl_pedagang.kode_pedagang ;
	}

	function tampil_data_join(){
		$this->db->select('tbl_lapak.kode_lapak, tbl_lapak.lokasi_lapak, tbl_lapak.harga_lapak, tbl_lapak.tersedia, tbl_lapak.qrcode, tbl_pedagang.nama_pedagang');
		$this->db->from('tbl_lapak');
		$this->db->join('tbl_pedagang', 'tbl_lapak.kode_pedagang = tbl_pedagang.kode_pedagang', 'left');
		$query = $this->db->get();
		return $query->result();
	}

	//List Pedagang
	function list_pedagang(){
		return $this->db->get('tbl_pedagang');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);		
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}