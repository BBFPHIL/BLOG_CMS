<?php

class Data_model extends CI_Model{
	
	/*
	//Get all data from database table
	function getAll(){
		
		//all retrieved stored in q
		$q = $this->db->query("SELECT * FROM data");
		
		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				//each instance has a new key as row in data array
				$data[] = $row;
			}
			return $data;
		}
		
	}
	
	*/
	
	/*
	//Active records version of getAll() function
	function getAll(){
	
		//active records to simplify SQL 
		$q = $this->db->get('data');
		
		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		
		
	}
	*/
	
	/*
	//Grabbing specific rows with select
	function getAll(){
		
		//object db primed with select func
		$this->db->select('title, contents');
		
		//apply select func to data table 
		$q = $this->db->get('data');
		
		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
				
	}
	*/
	
	
	/*
	//Passing SQL selecting with query binding
	function getAll(){
	
		//using binding to fill in the ? with the $q line
		$sql = "SELECT title, author, contents FROM data WHERE id = ? AND author = ?";
		$q = $this->db->query($sql, array(2, 'Phillip Walker') );
		
		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				$data[] = $row;
			}
			return $data;
		}		
		
	}
	*/
	
	//Using active records for more control over exactly what we want. 
	function getAll(){
		$this->db->select('title, contents');
		$this->db->from('data');
		$this->db->where('id', 1);
		
		//db is the object being primed with select, from where and then passed to get function for specific query
		$q = $this->db->get();

		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				$data[] = $row;
			}
			return $data;
		}	
		
	}
	
	//Select only the username
	function getUser(){
		
		$this->db->select('author');
		$this->db->from('data');
		
		$q = $this->db->get();
		
		if($q->num_rows() > 0){
			foreach($q->result() as $row){
				$data[] = $row;
			}
			return $data;
		}
		
	}
	
}





?>