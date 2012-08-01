<?php

class Members_model extends CI_Model {

	function insert_profile() {
			
		$data = array(

    		'profile_fbid' => $this->input->post('profile_fbid'),
    		'profile_fbname' => $this->input->post('profile_fbname'),
            'title' => $this->input->post('title'),
            'emirate' => $this->input->post('emirate'),
            'position' => $this->input->post('position'),
            'details' => $this->input->post('details'),
            'contact_info' => $this->input->post('contact_info')
		);
		$this->db->set('profile_created', 'NOW()', FALSE);
		$insert_data = $this->db->insert('members', $data);
		return $insert_data;
			
	}

	function get_profile_by_fbid($fbid){
	
		$query = $this->db->get_where('members', array('profile_fbid' => $fbid), 1);
		 
		if ($query->num_rows() == 1) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	
	function get_profile_by_profilefb_id($fbid, $profile_id) {
		
		$query = $this->db->get_where('members', array('id' => $profile_id, 'profile_fbid' => $fbid), 1);
		 
		if ($query->num_rows() == 1) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
	}
	
	
	function edit_profile_model(){

		$data = array(

    	    'title' => $this->input->post('title'),
            'emirate' => $this->input->post('emirate'),
            'position' => $this->input->post('position'),
            'details' => $this->input->post('details'),
            'contact_info' => $this->input->post('contact_info')
		);
		
		$this->db->where('id', $this->input->post('profile_id'));
	//	$this->db->set('job_updated_date', 'now()', FALSE);
		$update_data = $this->db->update('members', $data);
		return $update_data;
	}
	
	/*
	 * TODO option for user to have puclic profile
	function is_public($fbid){
	
				$query = $this->db->get_where('members', array('id' => $profile_id, 'profile_fbid' => $fbid), 1);
		
	
	}
	*/
	
}