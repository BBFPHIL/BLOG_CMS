<?php

class Site_model extends CI_Model{

	//Get all records
	function getAll(){
		$q = $this->db->get('test');
		//Filter through each row and save each row
		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				$data[] = $row;
			
			}
		
		return $data;
		}
	}

	//receive a specific function
	function get_records(){
	
		//autoloading database table here
		$query = $this->db->get('data');
		return $query->result();
	}
	
	//add a record to database
	function add_record($data){
		$this->db->insert('data', $data);
		return;
		
	}

	//update a current database record
	function update_record($data){
		$this->db->where('id', 2);
		$this->db->update('data', $data);
	}
	
	
	//delete with sql 
	function delete_row_two($data){
		
		$id = $data['id'];
		$title = $data['title'];
		
		$query = $this->db->query("DELETE FROM data WHERE title=$title AND id=$id)";
		
		//return $query;
		
	}
	
	//delete a record row
	function delete_row(){
		//autoloaded uri - 
		$sql = $this->db->query("DELETE FROM data WHERE id=$data");

		
		//$this->db->where('id', $this->uri->segment(4));
		//$this->db->delete('data');
	}

}




?>