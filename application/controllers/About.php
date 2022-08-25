<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['About'] = $this->About_model->tampil_data()->row();
		$this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('about/about', $data);
        $this->load->view('dasboard/footer');
    }

    public function buat() { 

		$this->load->view('dasboard/header'); 
		$this->load->view('dasboard/sidebar'); 
		$this->load->view('about/about_buat'); 
		$this->load->view('dasboard/footer'); 
	} 


	public function tambah_aksi() 
	{ 
		$id_abt     =$this->input->post('id_abt'); 
		$isi_abt 	= $this->input->post('isi_abt'); 
		$foto 	    = $_FILES['foto']; 
		if ($foto=''){}else{
		 $config['upload_path'] = './assets/foto'; 
		 $config['allowed_types'] = 'jpg|png|gif|jpeg';

		 $this->load->library('upload',$config); 
		 if(!$this->upload->do_upload('foto')){ 
		 	echo "upload gagal"; die(); 
		}else{ 
		 	$foto=$this->upload->data('file_name'); 
		} 
	}

	$data = array(
		'id_abt'    => $id_abt,
		'foto'   	=> $foto,
	 	'isi_abt'   => $isi_abt, 
	  	
	);

	$this->About_model->input_data($data,'about'); 
	$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible" role="alert"> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button> Data Berhasil Ditambahkan! 
		</div>'); 
		redirect('About'); 
	}

	public function hapus($id_abt) 
	{ 
		$where = array ('id_abt' => $id_abt); 
		$this->Produk_model->hapus_data($where, 'about');
		redirect('About'); 
	}

	

    public function edit($id_abt) 
    { 
    	$where = array('id_abt' =>$id_abt); 
    	$data['about'] = $this->About_model->edit_data($where,'about')->row();
    	$this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('about/about_edit', $data);
        $this->load->view('dasboard/footer');
    }

    public function update()
    {
    	$this->About_model->update_data();
		redirect('About'); 
	}

	

}