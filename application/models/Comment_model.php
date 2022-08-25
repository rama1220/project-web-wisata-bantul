<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment_model extends CI_Model {

	public function tampil_data() 
	{   
      return $this->db->get('comment');
    }
    public function input_data($data)
	{
		$this->db->insert('comment', $data);
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

	
}
 