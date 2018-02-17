<?php
class Cari_pesawat extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_cari');
        $this->load->model('m_data');
    }

    function index(){
        redirect('home','refresh');
    }

    function search()
    {
        $rute_from  =   $this->input->get('rute_from');
        $rute_to  =   $this->input->get('rute_to');
        // $day  =   substr($this->input->get('depart_at'), 0,1);
        $depart_at  =   $this->input->get('depart_at');
        $s = array(
            'rute_from'=>$rute_from,
            'rute_to'=>$rute_to,
            'depart_at'=>$depart_at
        );
        $data['tb_rute']    =   $this->m_cari->search($s)->result();
        $data['rute']= $this->m_data->tampil_data_rute()->result();
        $this->load->view('v_hasil_pencarian',$data);
    }
}