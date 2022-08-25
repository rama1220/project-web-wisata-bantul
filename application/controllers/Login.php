<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct(){
            parent::__construct();
            $this->load->model('Login_model');
        }

      
        public function index()
        {
            $this->load->view('login/login');
        }

        public function login(){
        if (isset($_POST['submit'])){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $check = $this->Login_model->checklogin($username, $password);

            if (!$check){
                redirect('Login','refresh');
            }else{
                $data = array(
                        'username' => $username,
                        'password' => $password,
                        'is_login' => TRUE,
                );

                $this->session->set_userdata($data);
                redirect('Dashboards');
            }
        }    
    }

   public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
