<?php

Class M_sistem Extends CI_Model{
	function __construct()
	{
		parent::__construct();
	}

	public function rute_from(){
		$this->db->select('rute_from');
		$this->db->group_by('rute_from');
		return $this->db->get('tb_rute');
	}
	public function rute_to(){
		$this->db->select('rute_to');
		$this->db->group_by('rute_to');
		return $this->db->get('tb_rute');
	}
	public function kelas(){
		$this->db->select('class');
		$this->db->group_by('class');
		return $this->db->get('tb_rute');
	}
    public function transportation_type_id(){
        $this->db->select('id');
        $this->db->group_by('id');
        return $this->db->get('tb_transportation_type');
    }

	function search($s){
		$this->db->like($s);
		return $this->db->get('tb_rute');
	}

	 public function get_rute($id){
        $this->db->select('*');
        $this->db->from('tb_rute');
        $this->db->join('tb_transportation','tb_rute.transportation_id = tb_transportation.id');
        $this->db->where('tb_rute.id ='.$id);
        return $this->db->get()->result_array();
    }

    public function get_seat_booked($id){
        $this->db->select('tb_passengers.seat');
        $this->db->from('tb_rute');
        $this->db->join('tb_reservation','tb_rute.id=tb_reservation.rute_id');
        $this->db->join('tb_passengers','tb_reservation.id=tb_passengers.reservation_id');
        $this->db->where(['tb_rute.id'=>$id]);
        return $this->db->get()->result_array();

        // SELECT passengers.seat FROM rute JOIN reservation ON rute.id = reservation.rute_id JOIN passengers on passengers.reservation_id = reservation.id WHERE rute.id = 2
    }
     public function get_seat_total($id){
        $this->db->select('tb_transportation.seat_qty');
        $this->db->from('tb_rute');
        $this->db->join('tb_transportation', 'tb_rute.transportation_id=tb_transportation.id');
        $this->db->where(['tb_rute.id'=>$id]);
        return $this->db->get()->result_array();
        // SELECT transportation.seat_qty FROM `rute` JOIN transportation ON rute.transportation_id = transportation.id WHERE rute.id = 2;
    }

    public function check_code_reservation($code){
        $this->db->where(['reservation_code' => $code]); 
        $query = $this->db->get('tb_reservation');
        return $query->result_array(); //return as array
    }   

    public function insert_reservation($data){
        $this->db->insert('tb_reservation',$data);
        return $this->db->insert_id();
    }

    public function insert_customer($data){
        $this->db->insert('tb_customer',$data);
        return $this->db->insert_id();
    }

    public function get_customer($id){
        $this->db->select('name');
        $this->db->where(['id'=>$id]);
        $query = $this->db->get('tb_customer'); //get db
        return $query->result_array(); //return as array
    }
     public function insert_passengers($data){
        return $this->db->insert('tb_passengers',$data);
    }
   
}   