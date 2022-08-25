<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
    }
	
	public function index()
	{
		$data['Kategori'] = $this->Kategori_model->tampil_data()->result();
		$this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('kategori/kategori_view', $data);
        $this->load->view('dasboard/footer');
    }

    public function tambah() 
    {
    	$this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('kategori/kategori_view');
        $this->load->view('dasboard/footer');
    }

	public function tambah_aksi()
	{
		$id    =  $this->input->post('id');
        $kategori    =  $this->input->post('kategori');
        $data = array(
             'id'      => $id,
            'kategori' => $kategori        
        );

		$this->Kategori_model->input_data($data, 'tb_kategori'); 
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible" role="alert"> 
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button> Data Berhasil Ditambahkan! 
		</div>'); 
		redirect('Kategori'); 
	}

	public function hapus($id) 
	{
        $this->Kategori_model->hapus_artikel($id);
        $this->Kategori_model->hapus_kategori($id);
		
		redirect('Kategori');
	}

	public function edit($id)
    {
       $where = array('id' =>$id); 
        $data['Kategori'] = $this->Kategori_model->edit_data($where,'tb_kategori')->result();
        $this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('kategori/kategori_edit', $data);
        $this->load->view('dasboard/footer');
    }

    public function update()
    {
        $id      = $this->input->post('id');
        $kategori = $this->input->post('kategori');

        $data = array(
            'id'            => $id,
            'kategori'      => $kategori
        );

        $where = array(
            'id' => $id
        );

        $this->Kategori_model->update_data($where,$data,'tb_kategori');
        redirect('Kategori');
    }
    public function isi($id) 
    { 
     
        $data['title'] = $this->Kategori_model->get_kategori($id)->kategori;
        $data['Artikel'] = $this->Artikel_model->get_post_by_katagori($id);
        $this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('Kategori/kategori_isi', $data);
        $this->load->view('dasboard/footer');
    }

   public function isi_kate($id)
  {
      
        $data['Artikel'] = $this->Kategori_model->get_post($id);
        $this->load->view('dasboard/header');
        $this->load->view('dasboard/sidebar');
        $this->load->view('artikel/artikel_isi', $data);
        $this->load->view('dasboard/footer');



  }
  
}