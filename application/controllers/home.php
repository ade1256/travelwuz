<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->model('m_sistem');
	 }

	public function index()
	{
		$data['tb_user']= $this->m_data->tampil_data()->result();
		$data['rute_from']= $this->m_sistem->rute_from()->result();
		$data['rute_to']= $this->m_sistem->rute_to()->result();
		$data['class']= $this->m_sistem->kelas()->result();
		$this->load->view('layout/header',$data);
		$this->load->view('v_home');
		$this->load->view('layout/footer');
	}

}
