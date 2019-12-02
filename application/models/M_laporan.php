<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {
	public function login($table,$where){
		return $this->db->get_where($table,$where);
    }	
	
    function tampil_data(){
		$this->db->select('*');
		$this->db->from('tbl_pedagang');
		$this->db->join('tbl_lapak', 'tbl_lapak.kode_pedagang = tbl_pedagang.kode_pedagang');
		$this->db->join('tbl_tagihan', 'tbl_tagihan.kode_lapak = tbl_lapak.kode_lapak');
		$query = $this->db->get('');
        return $query->result_array();
	}
	    function laporan_data($data){
		$this->db->from('tbl_pedagang');
		$this->db->join('tbl_lapak', 'tbl_lapak.kode_pedagang = tbl_pedagang.kode_pedagang');
		$this->db->join('tbl_tagihan', 'tbl_tagihan.kode_lapak = tbl_lapak.kode_lapak');
		$this->db->where('MONTH(tbl_tagihan.tanggal)',$data['bulan']); 
		$this->db->where('YEAR(tbl_tagihan.tanggal)',$data['tahun']);
		$query = $this->db->get('');
        return $query->result_array();
	}
    
}
