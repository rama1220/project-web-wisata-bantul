<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	public function tampil_data()
	{
		return $this->db->get('tb_kategori');
	}

	public function input_data($data)
	{
		$this->db->insert('tb_kategori', $data);
	}

	public function hapus_artikel($id)
	{
	 
        $this->db->where('id_kate', $id);
        $this->db->delete('tb_artikel');


	}
	public function hapus_kategori($id)
	{
	 
        $this->db->where('id', $id);
        $this->db->delete('tb_kategori');


	}


	public function edit_data($where,$table) 
	{ 
		return $this->db->get_where($table,$where); 
	} 

	public function update_data($where,$data,$table) 
	{ 
		$this->db->where($where); 
		$this->db->update($table,$data); 
	} 
	public function get_kategori($id){
			$query = $this->db->get_where('tb_kategori', array('id' => $id));
			return $query->row();
		}

	public function get_post($id)
	{
		$this->db->select('a.*');
   	$this->db->from('tb_artikel a');
   	$this->db->join('tb_kategori b', 'b.id = a.id_kate');
   	$this->db->where('a.id',$id);
   	return $this->db->get()->row();
	}
		
}