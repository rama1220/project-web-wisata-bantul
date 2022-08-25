<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboards extends CI_Controller {

   public function index()
    {
        $this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('dasboard/dashboards');
        $this->load->view('dasboard/footer');
    }
   

}