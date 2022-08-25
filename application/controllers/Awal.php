<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {

	public function index()
	{
		
	    $data['kategori'] = $this->Artikel_model->get_katagori();
    	$data['About'] = $this->About_model->tampil_data()->row();
        
    	$this->load->view('awal/head');
        $this->load->view('awal/body',$data);
        $this->load->view('awal/foot');
    }


	public function isi($id) 
    { 
        $data['kategori'] = $this->Artikel_model->get_katagori();
        $data['Produk'] = $this->Artikel_model->get_post_by_katagori($id);
       
        $this->load->view('awal/head');
        $this->load->view('awal/isi_wisata', $data);
        $this->load->view('awal/foot');

    }

     public function isi_kate($id)
  {
        $data['kategori'] = $this->Artikel_model->get_katagori();
        $data['Produk']   = $this->Kategori_model->get_post($id);

        $this->load->view('awal/head');
        $this->load->view('awal/detail_wisata', $data);
        $this->load->view('awal/foot');


  }


	
}