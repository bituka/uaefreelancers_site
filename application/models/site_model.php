<?php

class Site_model extends CI_Model {

 	function get_jobs_count(){
	 	
 		$query = $this->db->count_all('jobs');
 		return $query;
 			
	}

	function get_jobs($limit, $offset){
		
		
        $this->db->order_by('job_updated_date', 'desc');
        $query = $this->db->get('jobs', $limit, $offset);
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
                
            }
        }
   
        return $data;
	
	}
	
		function get_profiles_count(){
	 	
 		$query = $this->db->count_all('members');
 		return $query;
 			
	}
	
	function get_profiles($limit, $offset){
		
		
        $this->db->order_by('profile_update', 'desc');
        $query = $this->db->get('members', $limit, $offset);
        
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
                
            }
        }
   
        return $data;
	
	}
}

