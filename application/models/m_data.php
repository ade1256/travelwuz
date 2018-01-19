<?php 
 
class M_data extends CI_Model{
	function tampil_data($data_username){
		return $this->db->get_where('tb_user',$data_username);
	}
}