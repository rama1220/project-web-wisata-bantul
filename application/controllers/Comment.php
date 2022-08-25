<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller {

	public function index()
	{   
        $data['Comment'] = $this->Comment_model->tampil_data()->result();
        $this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('comment/commentview', $data);
        $this->load->view('dasboard/footer');
    }

   

    public function tambah_aksi()
    {
     
        $nm_cmt       =  $this->input->post('nm_cmt');
        $email        =  $this->input->post('email');
        $subject      =  $this->input->post('subject');
        $mssg         =  $this->input->post('mssg');

        $data = array(

            'nm_cmt'      => $nm_cmt,
            'email'       => $email,
            'subject'     => $subject,
            'mssg'        => $mssg,
            
        );

        $this->Comment_model->input_data($data, 'comment');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible" role="alert"> 
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button> Data Berhasil Ditambahkan! 
        </div>');
        redirect('Awal');
    }

    public function hapus($id_user) 
    { 
        $where = array ('id_cmt' => $id_user); 
        $this->Comment_model->hapus_data($where, 'comment');
        redirect('Comment'); 
    }
public function isi($id_cmt) 
    { 
        $where = array('id_cmt' =>$id_cmt); 
        $data['comment'] = $this->Comment_model->isi_data($where,'comment')->row();
        $this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('comment/comment_isi', $data);
        $this->load->view('dasboard/footer');
    }
   
    
}