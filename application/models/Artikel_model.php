<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	public function tampil_data()
	{
		return $this->db->get('tb_artikel');
	}

	public function input_data($data) 
	{ 
		$this->db->insert('tb_artikel', $data); 
	} 

	public function hapus_data($where, $table) 
	{ 
		$this->db->where($where); 
		$this->db->delete($table); 
	} 

	public function isi_data($where,$table) 
	{ 
		return $this->db->get_where($table,$where); 
	} 

	public function update_data() 
	{ 
		$data = array(
		'id'        =>$this->input->post('id'),
	 	'nm_tempat' => $this->input->post('nm_tempat'),
	 	'diskripsi' => $this->input->post('diskripsi'),
	  	'id_kate' 	=> $this->input->post('id_kate'), 
	  	'uploader' 	=> $this->input->post('uploader'), 
	  	'tgl_rilis' => $this->input->post('tgl_rilis'), 
	  	'isi' 		=> $this->input->post('isi'),
	  	'hrg_tiket' => $this->input->post('hrg_tiket'),
	  	'jam' 		=> $this->input->post('jam'),
	  	'fasilitas' => $this->input->post('fasilitas'),
	  	'kordinat' 	=> $this->input->post('kordinat'),


	);
	
   $this->db->where('id', $this->input->post('id'));
   return $this->db->update('tb_artikel', $data);
	
	} 

public function get_katagori(){
			$this->db->order_by('kategori');
			$query = $this->db->get('tb_kategori');
			return $query->result_array();
		}
   public function get_post_by_katagori($id){
		
   	$this->db->select('a.*');
   	$this->db->from('tb_artikel a');
   	$this->db->join('tb_kategori b', 'b.id = a.id_kate');
   	$this->db->where('a.id_kate',$id);
   	return $this->db->get()->result();
}

}