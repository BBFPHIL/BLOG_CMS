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
		
		//Validation checking
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('contents', 'Content', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');
		
		//check if validated right
		if($this->form_validation->run() == FALSE){
			echo 'Please fill out the id field';
		}else{
			//execute
			
			//Get the data via post
			$id = $this->input->post('title');
			$title = $this->input->post('title');
			$contents = $this->input->post('contents');
			$author = $this->input->post('author');
			
			//Store in data array
			$data = array(
				'id' => $id,
				'title' => $title,
				'contents' => $contents,
				'author' => $author
			
				);
			
			//Send to data model
			$this->site_model->add_record($data);
		
			//send back to main blog field page
			$this->options();			
		}
	}
	
	
	//Deleting a database record
	function delete(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'ID', 'required');
		
		
		if($this->form_validation->run() == FALSE){
			
			echo 'Please fill out the id field';	
			
		}else{
		$id = $this->input->post('id');
		
		$data = array(
			'id' => $id
		);
	
		$this->site_model->delete_record($data);
		$this->options();			
			
		}
	
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
	
	function members_area(){
		$this->load->view('members_area');
	}
	
	
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if(!isset($is_logged_in) || $is_logged_in != true){
			echo 'You dont have permission to access his page. <a href="../login">Login</a>';
			die();
		}
	}
	
}
