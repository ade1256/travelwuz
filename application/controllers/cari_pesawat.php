<?php
class Cari_pesawat extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_sistem');
        $this->load->model('m_data');
    }

    function index(){
        redirect('home','refresh');
    }

    function search()
    {
        $rute_from  =   $this->input->get('rute_from');
        $rute_to  =   $this->input->get('rute_to');
        $depart_at  =   $this->input->get('depart_at');
        $class  =   $this->input->get('class');
        $seat  =   $this->input->get('seat');
        $posisitanggal = explode("-",$depart_at);
        $depart_at = "$posisitanggal[2]-$posisitanggal[1]-$posisitanggal[0]";
        $s = array(
            'rute_from'=>$rute_from,
            'rute_to'=>$rute_to,
            'depart_at'=>$depart_at,
            'class'=>$class
        );
        $data['tb_rute']    =   $this->m_sistem->search($s)->result();
        $data['rute_from']= $this->m_sistem->rute_from()->result();
        $data['rute_to']= $this->m_sistem->rute_to()->result();
        $data['class']= $this->m_sistem->kelas()->result();
        $this->load->view('v_hasil_pencarian',$data);
    }

    public function mau_booking(){
        if ($this->session->userdata('status')!='login') {
            redirect(base_url('login'));
        }
        $seat = $this->input->post('seat');
        $rute_id = $this->input->post('rute_id');
        $session_name = 'PRAS'.base64_encode(rand(1256,9999));
        $value = [
            'seat' => $seat,
            'rute_id' => $rute_id
        ];
        $this->session->set_userdata($session_name,$value);
        redirect(base_url().'booking/?key='.$session_name);
    }
}