<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{   
       $data['Admin'] = $this->Admin_model->tampil_data()->result();
       $this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('admin/admin_view', $data);
        $this->load->view('dasboard/footer');
    }

   

    public function tambah_aksi()
    {
        $id_adm       =  $this->input->post('id_adm');
        $username       =  $this->input->post('username');
        $password        =  $this->input->post('password');
        $email_adm    =  $this->input->post('email_adm');

        $data = array(
            'id_adm'      =>$id_adm,
            'username'    => $username,
            'password'    => $password,
            'email_adm'   => $email_adm
        );

        $this->Admin_model->input_data($data, 'admin');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible" role="alert"> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button> Data Berhasil Ditambahkan! 
        </div>');
        redirect('Admin');
    }

    public function hapus($id) 
    { 
       
        $this->Admin_model->hapus_data($id);
        redirect('Admin'); 
    }

    public function edit($id_adm)
    {
        $where = array('id_adm' =>$id_adm); 
        $data['Admin'] = $this->Admin_model->edit_data($where,'admin')->result();
        $this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('admin/admin_edit', $data);
        $this->load->view('dasboard/footer');
    }

    public function update()
    {
        $id_adm      = $this->input->post('id_adm');
        $username    = $this->input->post('username');
        $password    = $this->input->post('password');
        $email_adm = $this->input->post('email_adm');
    

        $data = array(
            'username'       => $username,
            'password'       => $password,
            'email_adm'      => $email_adm,
          
        );

        $where = array(
            'id_adm' => $id_adm
        );

        $this->Admin_model->update_data($where,$data,'admin');
        redirect('Admin');
    }
}