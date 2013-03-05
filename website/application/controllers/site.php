<?php 

class Site extends CI_Controller{

	//Index page
	function index() {

		//loading a model
		$this->load->model('site_model');
		//Now use like a class object
		$data['records'] = $this->site_model->getAll();
		
		$this->load->view('home', $data);
		
	}
	
	
	
}

?>

