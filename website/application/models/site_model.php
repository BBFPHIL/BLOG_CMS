<?php

class Site_model extends CI_Model{

	//Get all titles
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


	
}




?>