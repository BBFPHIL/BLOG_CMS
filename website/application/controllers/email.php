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

		//form_validation is now like a class object
		$this->load->library('form_validation');
		
		//params: field name, error message, validation rules
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
		//End of form validation
		
		//call run method
		if($this->form_validation->run() == FALSE){
			//reload it
			$this->load->view('newsletter');
		}else{
			//validation has passed. Now send the email
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			
			//send email
					$this->load->library('email'); // removed config 
			$this->email->set_newline("\r\n");
			
			$this->email->from('wunderwalk24@gmail.com', 'Phil Walker');
			$this->email->to($email);
			$this->email->subject('Hey phil, your on your way to becoming a PHP developer!');
			$this->email->message('Program 3 hours every day and you will become the best!');
	
			//item means grab from file
			//$path = $this->config->item('server_root');
			//points directly to file to attach
			$file = base_URL() . '/attachments/newsletter1.txt';
	
			//attach to email
			$this->email->attach($file);
			
			//Confirm if sent
			if($this->email->send()){
				//echo 'Your email was sent.';
				$this->load->view('signup_confirmation_view');
				
			}else{
				show_error($this->email->print_debugger());
			}	
		}

	}
	
	
}

?>