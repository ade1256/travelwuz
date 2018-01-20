<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['tb_user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_admin',$data);
	}
 
	// function tambah(){
	// 	$this->load->view('v_input');
	// }
 
	// function tambah_aksi(){
	// 	$nama = $this->input->post('nama');
	// 	$alamat = $this->input->post('alamat');
	// 	$pekerjaan = $this->input->post('pekerjaan');
 
	// 	$data = array(
	// 		'nama' => $nama,
	// 		'alamat' => $alamat,
	// 		'pekerjaan' => $pekerjaan
	// 		);
	// 	$this->m_data->input_data($data,'tb_user');
	// 	redirect('crud/index');
	// }
 
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'tb_user');
		redirect('admin');
	}
}