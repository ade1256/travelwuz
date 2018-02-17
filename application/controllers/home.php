<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->model('m_cari');
	 }

	public function index()
	{
		$data['tb_user']= $this->m_data->tampil_data()->result();
		$data['tb_rute']= $this->m_data->group_by_rute()->result();
		$this->load->view('v_home',$data);
	}

}
