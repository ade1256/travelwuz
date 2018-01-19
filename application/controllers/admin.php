<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		if ($this->session->userdata('status')!='login') {
			redirect(base_url('login'));
		}
	 }
	public function index()
	 {	
	 	$data_username = array('username'=> $this->session->userdata('username'));
		$data['tb_user']= $this->m_data->tampil_data($data_username)->result();
		$this->load->view('v_admin',$data);
	}
}
