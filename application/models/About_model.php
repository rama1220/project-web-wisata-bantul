<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_model extends CI_Model {

	public function tampil_data()
	{
		return $this->db->get('about');
	}

	public function input_data($data) 
	{ 
		$this->db->insert('about', $data); 
	} 

	public function hapus_data($where, $table) 
	{ 
		$this->db->where($where); 
		$this->db->delete($table); 
	} 

	public function edit_data($where,$table) 
	{ 
		return $this->db->get_where($table,$where); 
	} 

	public function update_data() 
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


	
   $this->db->where('id_abt', $this->input->post('id_abt'));
   return $this->db->update('About', $data);
	
	} 
	

	
}