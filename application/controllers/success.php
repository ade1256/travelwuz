<?php

class Success extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_sistem');
		$this->load->model('m_data');
		$this->load->helper('date');
	}

	public function index(){
		echo $this->input->get('key');
		echo "<br/>";
		echo $this->input->get('reservation_code');
		echo "<br/>";
		
		// $gmt = local_to_gmt(time());
		// $lokal = gmt_to_local($gmt,'UP7');
		// $bad_date = unix_to_human($lokal,'us');
		$nice_date = nice_date(unix_to_human(gmt_to_local(local_to_gmt(time()),'UP7'),'us'), 'Y-m-d H:i:s');
		$reservasi_tanggal = substr($nice_date, 0,10);
		$reservasi_jam = substr($nice_date, 11);
	
		echo "<br/>";
		
				
	}
}