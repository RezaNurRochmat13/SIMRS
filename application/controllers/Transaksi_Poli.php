<?php

class Transaksi_Poli extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $this->load->view('include/header');
        $this->load->view('transaksi_poli_view');
        $this->load->view('include/footer');
    }
}