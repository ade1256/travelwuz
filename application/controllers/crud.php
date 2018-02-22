<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->model('m_sistem');
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
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'email' => $email,
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
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');
		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'email' => $email,
			'gender' => $gender
		);

		$this->m_data->input_data($data,'tb_customer');
		redirect('admin/data_customer');
	}

		// DATA RUTE
	function tambah_rute(){
		$data['title']='Tambah Rute';
		$data['tb_transportation']= $this->m_data->tampil_data_transportation()->result();
		$data['class']= $this->m_sistem->kelas()->result();
		$this->load->view('v_admin_data_tambah_rute',$data);
	}

	function tambah_rute_aksi(){
		$tanggal = $this->input->post('tanggal');
		$waktu = $this->input->post('waktu');
		$tanggal_arrive = $this->input->post('tanggal_arrive');
		$waktu_arrive = $this->input->post('waktu_arrive');

		$posisitanggal = explode("/",$tanggal);
		$tanggal = "$posisitanggal[2]/$posisitanggal[1]/$posisitanggal[0]";
		$posisitanggal2 = explode("/",$tanggal_arrive);
		$tanggal_arrive = "$posisitanggal2[2]/$posisitanggal2[1]/$posisitanggal2[0]";
		$id = $this->input->post('id');
		$depart_at = $tanggal.' '.$waktu;
		$depart_arrive = $tanggal_arrive.' '.$waktu_arrive;
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');
		$class = $this->input->post('class');
		$transportation_id = $this->input->post('transportation_id');

		$data = array(
			'id' => $id,
			'depart_at' => $depart_at,
			'depart_arrive' => $depart_arrive,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price,
			'class' => $class,
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
		$data['tb_transportation']= $this->m_data->tampil_data_transportation()->result();
		$data['class']= $this->m_sistem->kelas()->result();
		$this->load->view('v_admin_data_edit_rute',$data);
	}
	function update_rute($id){
		$tanggal = $this->input->post('tanggal');
		$waktu = $this->input->post('waktu');
		$tanggal_arrive = $this->input->post('tanggal_arrive');
		$waktu_arrive = $this->input->post('waktu_arrive');

		$posisitanggal = explode("/",$tanggal);
		$tanggal = "$posisitanggal[2]/$posisitanggal[1]/$posisitanggal[0]";
		$posisitanggal2 = explode("/",$tanggal_arrive);
		$tanggal_arrive = "$posisitanggal2[2]/$posisitanggal2[1]/$posisitanggal2[0]";

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
	function tambah_transportation(){
		$data['title']='Tambah Transportation';
		$data['tb_transportation']= $this->m_data->tampil_data_transportation()->result();
		$data['transportation_type_id']= $this->m_sistem->transportation_type_id()->result();
		$this->load->view('v_admin_data_tambah_transportation',$data);
	}
	function tambah_transportation_aksi(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$seat_qty = $this->input->post('seat_qty');
		$transportation_type_id = $this->input->post('transportation_type_id');
		$data = array(
			'id' => $id,
			'code' => $code,
			'seat_qty' => $seat_qty,
			'transportation_type_id' => $transportation_type_id
		);

		$this->m_data->input_data($data,'tb_transportation');
		redirect('admin/data_transportation');
	}
	function hapus_transportation($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'tb_transportation');
		redirect('admin/data_transportation');
	}
	function edit_transportation($id){
		$where = array('id' => $id);
		$data['title'] = "Edit Transportation";
		$data['tb_transportation'] = $this->m_data->edit_data($where,'tb_transportation')->result();
		$data['transportation_type_id']= $this->m_sistem->transportation_type_id()->result();
		$this->load->view('v_admin_data_edit_transportation',$data);
	}
	function update_transportation(){
		$id = $this->input->post('id');
		$code = $this->input->post('code');
		$seat_qty = $this->input->post('seat_qty');
		$transportation_type_id = $this->input->post('transportation_type_id');
		$data = array(
			'code' => $code,
			'seat_qty' => $seat_qty,
			'transportation_type_id' => $transportation_type_id
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'tb_transportation');
		redirect('admin/data_transportation');
	}
	
	//Transportation Type
	function hapus_transportation_type($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'tb_transportation_type');
		redirect('admin/data_transportation_type');
	}
	function tambah_transportation_type(){
		$data['title']='Tambah Transportation Type';
		$this->load->view('v_admin_data_tambah_transportation_type',$data);
	}
	function tambah_transportation_type_aksi(){
		$id = $this->input->post('id');
		$description = $this->input->post('description');
		$data = array(
			'id' => $id,
			'description' => $description
		);

		$this->m_data->input_data($data,'tb_transportation_type');
		redirect('admin/data_transportation_type');
	}
	function edit_transportation_type($id){
		$where = array('id' => $id);
		$data['tb_transportation_type'] = $this->m_data->edit_data($where,'tb_transportation_type')->result();
		$this->load->view('v_admin_data_edit_transportation_type',$data);
	}
	function update_transportation_type(){
		$id = $this->input->post('id');
		$description = $this->input->post('description');
		$data = array(
			'id' => $id,
			'description' => $description
		);

		$where = array(
			'id' => $id
		);

		$this->m_data->update_data($where,$data,'tb_transportation_type');
		redirect('admin/data_transportation_type');
	}


}