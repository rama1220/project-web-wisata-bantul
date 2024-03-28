<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function index()
	{

      
        $data['Artikel'] = $this->Artikel_model->tampil_data()->result();
        $this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('artikel/artikel_view', $data);
        $this->load->view('dasboard/footer');
    }

   

	public function tambah_aksi() 
	{ 

		$id         =$this->input->post('id'); 
		$nm_tempat 	= $this->input->post('nm_tempat'); 
		$diskripsi 	= $this->input->post('diskripsi'); 
		$id_kate 	= $this->input->post('id_kate'); 
		$uploader 	= $this->input->post('uploader'); 
		$tgl_rilis 	= $this->input->post('tgl_rilis'); 
		$isi 		= $this->input->post('isi'); 
		$hrg_tiket 	= $this->input->post('hrg_tiket');
		$jam 		= $this->input->post('jam');
		$fasilitas 	= $this->input->post('fasilitas');
		$kordinat 	= $this->input->post('kordinat');
		$foto 		= $_FILES['foto']; 
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
		'id'        =>$id,
	 	'nm_tempat' => $nm_tempat,
	 	'diskripsi' => $diskripsi,
	  	'id_kate' 	=> $id_kate,  
	  	'uploader' 	=> $uploader, 
	  	'tgl_rilis' => $tgl_rilis, 
	  	'isi' 		=> $isi, 
	  	'foto' 		=> $foto,
	  	'hrg_tiket' => $hrg_tiket,
	  	'jam' 		=> $jam,
	  	'fasilitas' => $fasilitas,
	  	'kordinat' 	=> $kordinat,
	);

	$this->Artikel_model->input_data($data, 'tb_artikel'); 
	$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible" role="alert"> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button> Data Berhasil Ditambahkan! 
		</div>'); 
		redirect('Artikel'); 
	}

	public function hapus($id) 
	{ 
		$where = array ('id' => $id); 
		$this->Artikel_model->hapus_data($where, 'tb_artikel');
		redirect('Artikel'); 
	}

	public function isi($id) 
	{ 
		$where = array('id' =>$id); 
		$data['Artikel'] = $this->Artikel_model->isi_data($where,'tb_artikel')->row();
		$this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('artikel/artikel_isi', $data);
        $this->load->view('dasboard/footer');
    }

    public function edit($id) 
    { 
    	$where = array('id' =>$id); 
    	$data['kategori'] = $this->Artikel_model->get_katagori();
    	$data['Artikel'] = $this->Artikel_model->isi_data($where,'tb_artikel')->result();
    	$this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('artikel/artikel_edit', $data);
        $this->load->view('dasboard/footer');
    }

    public function update()
    {
  
	 $this->Artikel_model->update_data();
		redirect('Artikel'); 
	}

	
	public function tambahArtikel() { 

        $data['kategori'] = $this->Artikel_model->get_katagori();

		$this->load->view('dasboard/header'); 
		$this->load->view('dasboard/sidebar'); 
		$this->load->view('artikel/artikel_tambah',$data); 
		$this->load->view('dasboard/footer'); 
	} 
}
