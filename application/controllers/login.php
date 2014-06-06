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
        
        $this->form_validation->set_rules('username', 'Username', 'required|trim|xss_clean|callback_validate_credentials');
        $this->form_validation->set_rules('password', 'Password', 'required|md5|trim');

        if($this->form_validation->run()){
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => 1
            );
            $this->session->set_userdata($data);
            redirect('pages/members');
        }
        else {
            $this->login();
        }
    }
    
    public function validate_credentials(){
        $this->load->model('model_users');
        
        if($this->model_users->can_log_in()){
            return true;
        } else{
            $this->form_validation->set_message('validate_credentials', 'Incorrect Username and/or Password');
            return false;
        }
    }
}