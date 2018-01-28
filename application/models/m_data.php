<?php 
 
class M_data extends CI_Model{

	// DATA USER
	function tampil_data(){
		return $this->db->get('tb_user');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
 
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}


		
	function tampil_data_customer(){
		return $this->db->get('tb_customer');
	}

	function tampil_data_rute(){
		return $this->db->get('tb_rute');
	}

	function tampil_data_transportation(){
		return $this->db->get('tb_transportation');
	}

	function tampil_data_transportation_type(){
		return $this->db->get('tb_transportation_type');
	}

	function tampil_data_reservation(){
		return $this->db->get('tb_reservation');
	}
}