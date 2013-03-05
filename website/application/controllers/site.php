<?php 

class Site extends CI_Controller{

	//Index page
	function index() {

		//load it once
		$this->load->model('data_model');
		
		//use it by storing in variable
		$data['rows'] = $this->data_model->getAll();
		
		//Grab only user data from data model's getUser() function
		$data['users'] = $this->data_model->getUser();
		
		$this->load->view('home', $data);
		
	}
	
	
	
}

?>

