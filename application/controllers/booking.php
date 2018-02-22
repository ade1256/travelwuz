<?php

class Booking extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_sistem');
		$this->load->model('m_data');
		$this->load->helper('date');
	}

	function index(){
		$session_key = $this->input->get('key');
		$data['kursi'] = $this->session->userdata($session_key);
		$data['data_rute'] = $this->m_sistem->get_rute($this->session->userdata($session_key)['rute_id'])[0];

		$this->load->view('layout/header');
		$this->load->view('v_booking', $data);
		$this->load->view('layout/footer');
	}

	public function insert_customer()
	{
		$key = $this->input->post('key');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');

		$form_customer = [
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'email' => $email,
			'gender' => $gender
		];

		$value = $this->session->userdata($key);

		$value['form_customer'] = $form_customer; 
		$this->session->set_userdata($key, $value);

		redirect(base_url() . 'booking/seat/?key=' . $key);
	}

	public function seat()
	{
		$customer_data = $this->session->userdata($_GET['key']);
		// var_dump($customer_data);
		// die;


		$rute = $this->m_sistem->get_rute($customer_data['rute_id'])[0];

		$transportation_seat = $rute['seat_qty'];
		
		$seat_booked = $this->m_sistem->get_seat_booked($customer_data['rute_id']);

		$seat_bookeds = [];
		for ($i=0; $i < count($seat_booked); $i++) { 
			$seat_bookeds[] = $seat_booked[$i]['seat'];
		}

		$seat_total = $this->m_sistem->get_seat_total($customer_data['rute_id'])[0]['seat_qty'];

		$data['seat'] = [
			'seat_bookeds' => $seat_bookeds,
			'seat_total' => $seat_total
		];

		$data['data_form'] = $customer_data['form_customer']['name'];
		$data['data'] = $customer_data;
		$data['transportation_seat'] = $transportation_seat;
		$data['data_rute'] = $this->m_sistem->get_rute($customer_data['rute_id'])[0];

		$this->load->view('layout/header');
		$this->load->view('v_seat', $data);
		$this->load->view('layout/footer');
	}
	public function proccess()
	{

		$key = $this->input->post('key');
		$customer_seat = $this->input->post('seat');
		$customer_data = $this->session->userdata($key);
		$rute = $this->m_sistem->get_rute($customer_data['rute_id'])[0];
		$code = 'TRV-'.rand(11111,99999).'-WUZ'; //generate reservation code
		$reservation_code = $code;
		while (count($this->m_sistem->check_code_reservation($code)) != 0) { //check code mbok ana nng db :3
			$code = 'TRV-'.rand(11111,99999).'-WUZ';
			$reservation_code = $code;
		}
		$user_id = $this->session->userdata('id');;
		$rute_id = $customer_data['rute_id'];
		$reservation_at = nice_date(unix_to_human(gmt_to_local(local_to_gmt(time()),'UP7'),'us'), 'Y-m-d H:i:s');

		

		//insert customer
		$customer_form = $customer_data['form_customer'];
		for ($i = 0; $i < count($customer_form['name']); $i++) {
			$data_customer_form = [
				'name' => $customer_form['name'][$i],
				'address' => $customer_form['address'][$i],
				'phone' => $customer_form['phone'][$i],
				'email' => $customer_form['email'][$i],
				'gender' => $customer_form['gender'][$i]
			];
			$customer_id[] = $this->m_sistem->insert_customer($data_customer_form); //get last id from customer
		}
		//end insert customer

		// insert reservation
		for ($i = 0; $i < count($customer_form['name']); $i++) {
			$data_reservation = [
				'reservation_code' => $reservation_code,
				'user_id' => $user_id,
				'rute_id' => $rute_id,
				'reservation_at'=>$reservation_at,
				'price'=>$rute['price'],
				'depart_at'=>$rute['depart_at'],
				'customer_id'=>$customer_id[$i],
				'seat_code'=>$customer_seat[$i]
			];
		$reservation_id = $this->m_sistem->insert_reservation($data_reservation); //get last id from reservation
	}
		//end insert reservation
		
		//insert passengers
		if (count($customer_id) == count($customer_seat)) {
			for ($i = 0; $i < count($customer_id); $i++) {
				$data_passengers = [
					'customer_id' => $customer_id[$i],
					'reservation_id'=>$reservation_id,
					'seat' => $customer_seat[$i]
				];
				$this->m_sistem->insert_passengers($data_passengers);
			}
		}
		//end insert passengers


	$customer_data['reservation_code'] = $reservation_code;
	$this->session->set_userdata($key,$customer_data);
	redirect(base_url().'success/?key='.$key.'&reservation_code='.$reservation_code);
}


}