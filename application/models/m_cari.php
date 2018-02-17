<?php

Class M_cari Extends CI_Model{
    function __construct()
    {
        parent::__construct();
    }

    function search($s){
        $this->db->like($s);
        // $this->db->like('bali',$keyword);
        return $this->db->get('tb_rute');
    }
}   