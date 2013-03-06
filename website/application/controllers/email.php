<?php


/*
*SENDS EMAIL WITH GMAIL
*/

class Email extends CI_Controller{
 	
/* WHY WILL THIS MAKE THE PROGRAM STOP WORKING???*/

 	//Constructor
	function __construct(){
		
		parent::__construct();
		
	}

	function index(){
	
		//load the html view
		$this->load->view('newsletter');
		
	}
	
	function send(){
		
		echo 'hello from send'; die();
		
		$this->load->library('email'); // removed config 
		$this->email->set_newline("\r\n");
		
		$this->email->from('wunderwalk24@gmail.com', 'Phil Walker');
		$this->email->to('pwalker@fordham.edu');
		$this->email->subject('Hey phil, your on your way to becoming a PHP developer!');
		$this->email->message('Program 3 hours every day and you will become the best!');

		//item means grab from file
		$path = $this->config->item('server_root');
		//points directly to file to attach
		$file = $path . '/ci/website/attachments/yourInfo.txt';

		//attach to email
		$this->email->attach($file);
		
		//Confirm if sent
		if($this->email->send()){
			echo 'Your email was sent.';
		}else{
			show_error($this->email->print_debugger());
		}
	}
	
	
}

?>