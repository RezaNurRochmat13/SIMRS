<?php

class Transaksi_Poli extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form'));
        $this->load->model('Transaksi_Model');
        $this->load->library('pagination');
        $this->load->library('session');
        $this->load->database();
    }

    public function index(){
        $jumlah_data = $this->Transaksi_Model->jumlah_data();
	    $config['base_url'] = base_url().'index.php/Transaksi_Poli/index/';
	    $config['total_rows'] = $jumlah_data;
	    $config['per_page'] = 5;
	    $from = $this->uri->segment(3);
	    //Konfigurasi pagination bootrap
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
	    $this->pagination->initialize($config);   
	    $data['transaksi'] = $this->Transaksi_Model->data($config['per_page'],$from);
        $this->load->view('include/header');
        $this->load->view('transaksi_poli_view', $data);
        $this->load->view('include/footer');
    }

    public function cariTransaksi(){
		$keywords=$this->input->post('keywords');
        $data['transaksi'] = $this->Transaksi_Model->cariTransaksi($keywords);
        // var_dump($data);
        $this->load->view('include/header');
        $this->load->view('transaksi_poli_view', $data);
        $this->load->view('include/footer');
    }
    
    public function createTransaksi() {
        $data['pasien'] = $this->Transaksi_Model->getPasien();
        $data['poli'] = $this->Transaksi_Model->getPoli();
        $this->load->view('include/header');
        $this->load->view('transaksi_form_tambah', $data);
        $this->load->view('include/footer');
    }

    public function createData() {
        $this->Transaksi_Model->createTransaksi();
        $sukses="<div class='alert alert-success'>Data anda berhasil masuk</div>";
		$this->session->set_flashdata("sukses",$sukses);
        redirect("Transaksi_Poli/index");
    }

    public function editTransaksi($id_transaksi_poli){
		$where=array('id_transaksi_poli' => $id_transaksi_poli);
        $data['editTransaksi'] = $this->Transaksi_Model->edit_data($where,'transaksi_poli')->result();
        $this->load->view('include/header');
        $this->load->view('transaksi_form_ubah',$data);
        $this->load->view('include/footer');
    }
    
    public function updateData(){
        $id_transaksi_poli = $this->input->post('id_transaksi_poli');
        $tanggal_keluar_berkas = date('Y-m-d');
        $status_transaksi = $this->input->post('status_transaksi');
          $data = array(
          'tanggal_keluar_berkas' => $tanggal_keluar_berkas,
          'status_transaksi' => $status_transaksi
          );
        $where = array(
          'id_transaksi_poli' => $id_transaksi_poli
        );
          $this->Transaksi_Model->update_data($where,$data,'transaksi_poli');
          $ubah="<div class='alert alert-info'>Data anda berhasil diubah</div>";
		  $this->session->set_flashdata("ubah",$ubah);
          redirect("Transaksi_Poli/index");
      }
}