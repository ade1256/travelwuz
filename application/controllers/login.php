<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_data');
	}

	public function index()
	{
		$this->load->view('v_login');
		if ($this->input->post['submit']) {
			$this->aksi_login();
		}
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => base64_encode($password)
			);
		$cek = $this->m_login->cek_login("tb_user",$where)->num_rows();

		if($cek > 0){
			$yglogin = $this->db->get_where('tb_user',$where)->row();
			$data_session = array(
				'id' => $yglogin->id,
				'status' => "login",
				'username' => $yglogin->username,
				'fullname' => $yglogin->fullname,
				'level' =>$yglogin->level
				);

			$this->session->set_userdata($data_session);
			if ($this->session->userdata('level')==='admin') {
				redirect(base_url('admin'));
			}
			if ($this->session->userdata('level')==='user') {
				redirect(base_url('home'));
			}

		}else{
			echo "Username dan password salah !";
		}

	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}

}
