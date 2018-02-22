<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendgrid extends CI_Controller {

	public function index()
	{
		$this->load->library('email');

		$this->email->initialize(array(
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.sendgrid.net',
			'smtp_user' => 'aderobert1256',
			'smtp_pass' => 'ade12561256',
			'smtp_port' => 587,
			'crlf' => "\r\n",
			'newline' => "\r\n"
		));

		$this->email->from('aderobert1256@gmail.com', 'Ade Robert');
		$this->email->to('adeprasetyo174@gmail.com');
		$this->email->subject('Email Test');
		$this->email->message('Testing the email dari localhost.');
		$this->email->send();

		echo $this->email->print_debugger();
	}
}
