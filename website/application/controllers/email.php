<?php


/*
*SENDS EMAIL WITH GMAIL
*/

class Email extends CI_Controller{
	
	//Constructor
	function __constructor(argument){
		
		parent::Controller();
		
	}
	

	function index(){
		$config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'wunderwalk24@gmail.com',
			'smtp_pass' => 'wunder24!'
		);
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r]\n");
		
		$this->email->from('pwalker@fordham.edu', 'Phil Walker');
		$this->email->to('pwalker@fordham.edu');
		$this->email->subject('Hey phil, your on your way to becoming a PHP developer!');
		$this->email->message('Program 3 hours every day and you will become the best!');
		
		if($this->email->send()){
			echo('our email was sent.');
		}else{
			show_error($this->email->print_debugger());
		}
	}
	
}

