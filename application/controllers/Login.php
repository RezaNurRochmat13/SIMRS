<?php

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $this->load->view('include/header_login');
        $this->load->view('login_view');
        $this->load->view('include/footer_login');
    }
}