<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('encryption');
		

	}

	function index(){
		// $data['tb_user'] = $this->m_data->tampil_data()->result();
		// $this->load->view('v_admin',$data);
		redirect('admin');
	}

 // DATA USER
	function tambah(){
		$data['title'] = "Tambah User";
		$this->load->view('v_admin_data_tambah_user',$data);
	}

	function tambah_aksi(){

		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'fullname' => $fullname,
			'username' => $username,
			'password' => base64_encode($password),
			'level' => $level
		);

		$this->m_data->input_data($data,'tb_user');
		redirect('admin/data_user');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['tb_user'] = $this->m_data->edit_data($where,'tb_user')->result();
		$data['title'] = 'Edit User';
		$this->load->view('v_admin_data_edit_user',$data);
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'tb_user');
		redirect('admin/data_user');
	}

	function update(){
		$id = $this->input->post('id');
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'fullname' => $fullname,
			'username' => $username,
			'password' => base64_encode($password),
			'level' => $level
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'tb_user');
		redirect('admin/data_user');

	// $query = $this->db->query('UPDATE `tb_user` SET `username` = "'.$username.'", `password` = "'.$password.'", `fullname` = "'.$fullname.'", `level` = "'.$level.'" WHERE `tb_user`.`id` = "'.$id.'"');
	// 	if ($query) {
	// 		echo redirect('admin/data_user');
	// 	}
	}

// DATA CUSTOMER
	function tambah_customer(){
		$data['title'] = "Tambah Customer";
		$this->load->view('v_admin_data_tambah_customer',$data);
	}
	function hapus_customer($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'tb_customer');
		redirect('admin/data_customer');
	}
	function edit_customer($id){
		$where = array('id' => $id);
		$data['tb_customer'] = $this->m_data->edit_data($where,'tb_customer')->result();
		$this->load->view('v_admin_data_edit_customer',$data);
	}
	function update_customer(){
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'tb_customer');
		redirect('admin/data_customer');
	}
	
	function tambah_customer_aksi(){

		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender
		);

		$this->m_data->input_data($data,'tb_customer');
		redirect('admin/data_customer');
	}

		// DATA RUTE
	function tambah_rute(){
		$data['title']='Tambah Rute';
		$this->load->view('v_admin_data_tambah_rute',$data);
	}

	function tambah_rute_aksi(){
		$tanggal = $this->input->post('tanggal');
		$waktu = $this->input->post('waktu');

		$id = $this->input->post('id');
		$depart_at = $tanggal.' '.$waktu;
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');
		$transportation_id = $this->input->post('transportation_id');

		$data = array(
			'id' => $id,
			'depart_at' => $depart_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price,
			'transportation_id' => $transportation_id
		);

		$this->m_data->input_data($data,'tb_rute');
		redirect('admin/data_rute');
	}

	function hapus_rute($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'tb_rute');
		redirect('admin/data_rute');
	}

	function edit_rute($id){
		$where = array('id' => $id);
		$data['tb_rute'] = $this->m_data->edit_data($where,'tb_rute')->result();
		$this->load->view('v_admin_data_edit_rute',$data);
	}
	function update_rute($id){
		$tanggal = $this->input->post('tanggal');
		$waktu = $this->input->post('waktu');

		$id = $this->input->post('id');
		$depart_at = $tanggal.' '.$waktu;
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');
		$transportation_id = $this->input->post('transportation_id');

		$data = array(
			'depart_at' => $depart_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price,
			'transportation_id' => $transportation_id
		);

		$where = array('id' => $id);
		$this->m_data->update_data($where,$data,'tb_rute');
		redirect('admin/data_rute');
	}

	//Transportation
	function hapus_transportation($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'tb_transportation');
		redirect('admin/data_transportation');
	}
	
	//Transportation Type
	function hapus_transportation_type($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'tb_transportation_type');
		redirect('admin/data_transportation_type');
	}

}