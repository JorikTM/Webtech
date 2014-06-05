<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {        
        parent::__construct();
    }
    
    public function index()
    {
        $this->login();
    }
    
    public function login(){
        $this->load->view('templates/header');
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
    }
    
    public function login_validation(){
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('nickname', 'Nickname', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run()){
            redirect('pages/members');
        }
        else {
            $this->login();
        }
    }
}