<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends CI_Controller {
    
    public function __construct() {        
        parent::__construct();
    }
    
    public function index()
    {
        $this->register();
    }
    
    public function register(){
        $this->load->view('templates/header');
        $this->load->view('pages/register');
        $this->load->view('templates/footer');
    }
    
    
    
}