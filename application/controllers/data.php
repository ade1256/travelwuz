<?php
class Data extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	public function index()
	{
		$data['tb_customer'] = $this->m_data->join_customer()->result();
		$this->load->view('v_join_data',$data);
	}
}