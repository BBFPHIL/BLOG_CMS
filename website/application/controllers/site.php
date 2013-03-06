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
	
	//Options controller for options_view view
	function options(){
		
		//initialize an array for data
		$data = array();
		
		if($query = $this->site_model->get_records()){
			$data['records'] = $query;
		}
		
		$this->load->view('options_view', $data);
		
	}
	
	//Creating a database record
	function create(){
		$data = array(
			'title' => $this->input->post('title'),
			'contents' => $this->input->post('contents'),
			'author' => $this->input->post('author')
			
		);

		$this->site_model->add_record($data);
		
		//send back to main page
		$this->options();
	}
	
	//Deleting a database record
	function delete(){
		$this->site_model->delete_row();
		$this->options();
	}
	
	
	//Updating a database record
	function update(){
		
		$data = array(
			'title' => 'My freshly updated AGAIN title',
			'author'=> 'Phillip Walker',
			'contents' => 'This is updated'
		);
		
		$this->site_model->update_record($data);
		
	}
	
	
}

?>

