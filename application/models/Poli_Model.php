<?php


class Poli_Model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

	public function data($number,$offset){
		$this->db->select('*');
		return $query = $this->db->get('poli',$number,$offset)->result();
	}
	public function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('poli')->num_rows();
	}

	public function cariPoli($filter){
		$this->db->select('*');
		$this->db->like('poli.nama_poli',$filter);
		$query= $this->db->get('poli');
		return $query->result();
	}
}