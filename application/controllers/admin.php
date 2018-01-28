<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->library('encryption');
		if ($this->session->userdata('status')!='login') {
			redirect(base_url('login'));
		}
	 }
	public function index()
	 {	
		$data['tb_user']= $this->m_data->tampil_data()->result();
		$data['title']= "Dashboard";
		$this->load->view('v_admin',$data);
	}

	function data_user(){
		$data['tb_user']= $this->m_data->tampil_data()->result();
		$data['title']= "Data User";
		$this->load->view('v_admin_data_user',$data);
	}

	function data_customer(){
		$data['tb_customer']= $this->m_data->tampil_data_customer()->result();
		$data['title']= "Data Customer";
		$this->load->view('v_admin_data_customer',$data);
	}

	function data_rute(){
		$data['tb_rute']= $this->m_data->tampil_data_rute()->result();
		$data['title']= "Data rute";
		$this->load->view('v_admin_data_rute',$data);
	}

	function data_transportation(){
		$data['tb_transportation']= $this->m_data->tampil_data_transportation()->result();
		$data['title']= "Data transportation";
		$this->load->view('v_admin_data_transportation',$data);
	}

	function data_transportation_type(){
		$data['tb_transportation_type']= $this->m_data->tampil_data_transportation_type()->result();
		$data['title']= "Data transportation type";
		$this->load->view('v_admin_data_transportation_type',$data);
	}

	function data_reservation(){
		$data['tb_reservation']= $this->m_data->tampil_data_reservation()->result();
		$data['title']= "Data reservation";
		$this->load->view('v_admin_data_reservation',$data);
	}
}
