<?php


class Pasien extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->model('Pasien_Model');
        $this->load->library('session');
    }

    public function index(){
        $jumlah_data = $this->Pasien_Model->jumlah_data();
	    $config['base_url'] = base_url().'index.php/Pasien/index/';
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
	    $data['pasien'] = $this->Pasien_Model->data($config['per_page'],$from);
        $this->load->view('include/header');
        $this->load->view('pasien_view', $data);
        $this->load->view('include/footer');
    }

    public function cariPasien(){
		$filter=$this->input->post('filter');
		$data['pasien'] = $this->Pasien_Model->cariPasien($filter);
        $this->load->view('include/header');
        $this->load->view('pasien_view', $data);
        $this->load->view('include/footer');
    }
    
    public function createPasien() {
        $this->load->view('include/header');
        $this->load->view('pasien_form_tambah');
        $this->load->view('include/footer');
    }

    public function createDataPasien() {
        $this->Pasien_Model->createData();
        $sukses="<div class='alert alert-success'>Data anda berhasil masuk</div>";
		$this->session->set_flashdata("sukses",$sukses);
        redirect("Pasien/index");
    }

}