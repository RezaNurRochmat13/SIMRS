<?php


class Pasien_Model extends CI_Model {
    public function __construct(){
        parent::__construct();
		$this->load->database();
		$this->load->helper('string');
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

	public function createData() {
		$id_pasien = "PASIEN-".random_string('numeric', 16);
		$no_rekam_medis_pasien = "RM-".random_string('numeric', 6);
		$nama_pasien = $this->input->post('nama_pasien');
		$alamat_pasien = $this->input->post('alamat_pasien');
		$tanggal_lahir_pasien = date('Y-m-d', strtotime($this->input->post('tanggal_lahir_pasien')));
		$jenis_kelamin_pasien = $this->input->post('jenis_kelamin_pasien');
		$pekerjaan_pasien = $this->input->post('pekerjaan_pasien');
		$golongan_darah_pasien = $this->input->post('golongan_darah_pasien');

		$data = array(
			'id_pasien' => $id_pasien,
			'no_rekam_medis_pasien' => $no_rekam_medis_pasien,
			'nama_pasien' => $nama_pasien,
			'alamat_pasien' => $alamat_pasien,
			'tanggal_lahir_pasien' => $tanggal_lahir_pasien,
			'jenis_kelamin_pasien' => $jenis_kelamin_pasien,
			'pekerjaan_pasien' => $pekerjaan_pasien,
			'golongan_darah_pasien' => $golongan_darah_pasien
		);

		$this->db->insert('pasien', $data);
	}
}