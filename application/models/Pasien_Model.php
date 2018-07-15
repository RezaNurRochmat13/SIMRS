<?php


class Pasien_Model extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

	public function data($number,$offset){
		$this->db->select('*');
		return $query = $this->db->get('pasien',$number,$offset)->result();
	}
	public function jumlah_data(){
		$this->db->select('*');
		return $this->db->get('pasien')->num_rows();
	}

	public function cariPasien($filter){
		$this->db->select('*');
		$this->db->like('pasien.no_rekam_medis_pasien',$filter);
		$this->db->or_like('pasien.nama_pasien', $filter);
		$query= $this->db->get('pasien');
		return $query->result();
	}
}