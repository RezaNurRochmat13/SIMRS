<?php


class Transaksi_Model extends CI_Model {
    public function __construct(){
        parent::__construct();
		$this->load->database();
		$this->load->helper('string');
    }

	public function data($number,$offset){
		$this->db->select('*');
		$this->db->join('pasien', 'pasien.id_pasien = transaksi_poli.id_pasien', 'left');
		$this->db->join('poli', 'poli.id_poli = transaksi_poli.id_poli', 'left');
		return $query = $this->db->get('transaksi_poli',$number,$offset)->result();
	}
	public function jumlah_data(){
		$this->db->select('*');
		$this->db->join('pasien', 'pasien.id_pasien = transaksi_poli.id_pasien', 'left');
		$this->db->join('poli', 'poli.id_poli = transaksi_poli.id_poli', 'left');
		return $this->db->get('transaksi_poli')->num_rows();
	}

	public function cariTransaksi($keywords){
		$this->db->select('*');
		$this->db->where('pasien.id_pasien=transaksi_poli.id_pasien AND poli.id_poli=transaksi_poli.id_poli');
		$this->db->like('pasien.nama_pasien', $keywords);
		return $this->db->get('transaksi_poli, poli, pasien')->result();
	}

	public function getPasien() {
		$this->db->select('*');
		$query = $this->db->get('pasien');
		return $query->result();
	}

	public function getPoli() {
		$this->db->select('*');
		$query = $this->db->get('poli');
		return $query->result();
	}

	public function createTransaksi() {
		$id_transaksi_poli = "TRX-".random_string('alnum', 16);
		$id_pasien = $this->input->post('id_pasien');
		$id_poli = $this->input->post('id_poli');
		$nomor_antrian = $this->input->post('nomor_antrian');
		$tanggal_masuk_berkas = date('Y-m-d');
		$status_transaksi = $this->input->post('status_transaksi');

		$data = array(
			'id_transaksi_poli' => $id_transaksi_poli,
			'id_pasien' => $id_pasien,
			'id_poli' => $id_poli,
			'nomor_antrian' => $nomor_antrian,
			'tanggal_masuk_berkas' => $tanggal_masuk_berkas,
			'status_transaksi' => $status_transaksi
		);

		$this->db->insert('transaksi_poli', $data);
	}

	public function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}