<?php

class Jobs_model extends CI_Model {
	
	//TODO change timezone display on on the output
	function insert_job() {
		 
		$data = array(

    		'job_creator_fbid' => $this->input->post('profile_fbid'),
    		'job_creator_fbname' => $this->input->post('profile_fbname'),
            'title' => $this->input->post('title'),
            'emirate' => $this->input->post('emirate'),
            'position' => $this->input->post('position'),
            'details' => $this->input->post('details'),
            'contact_info' => $this->input->post('contact_info')
		);
		$this->db->set('job_posted_date', 'NOW()', FALSE);
		$insert_data = $this->db->insert('jobs', $data);
		return $insert_data;
		 
		 
	}

	function get_jobs_by_fbid($fbid) {
		$this->db->select('id, title, job_creator_fbid, job_posted_date');
		$this->db->from('jobs');
		$this->db->where('job_creator_fbid', $fbid);

		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}

	 
	function get_job_by_jobfb_id($fbid, $job_id){

		$query = $this->db->get_where('jobs', array('id' => $job_id, 'job_creator_fbid' => $fbid), 1);
		 
		if ($query->num_rows() == 1) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	
	//TODO changes done
	function edit_job_model(){

		$data = array(

    	    'title' => $this->input->post('title'),
            'emirate' => $this->input->post('emirate'),
            'position' => $this->input->post('position'),
            'details' => $this->input->post('details'),
            'contact_info' => $this->input->post('contact_info')
		);
		
		$this->db->where('id', $this->input->post('job_id'));
	//	$this->db->set('job_updated_date', 'now()', FALSE);
		$update_data = $this->db->update('jobs', $data);
		return $update_data;
	}
	
	
	
	function delete_job_model($fbid, $job_id){
		$this->db->where('job_creator_fbid', $fbid);
        $this->db->where('id', $job_id);
        
        if($this->db->delete('jobs')){
        	return true;
        
        }else{ return false; }
        
        
	}

}