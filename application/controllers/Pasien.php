<?php


class Pasien extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $this->load->view('include/header');
        $this->load->view('pasien_view');
        $this->load->view('include/footer');
    }
}