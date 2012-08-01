<?php

class Members extends CI_Controller {

	function __construct() {
		parent::__construct();
		
	//	$this->load->model('members_model');
		$this->load->model('facebook_model');
	//	$this->load->model('jobs_model');
		$this->load->helper('date');
	}

	function index() {

		 
	//get facebook info
	 $fb_data = $this->session->userdata('fb_data');

	 $data['fb_data'] = $fb_data;

	 //get fb id
	 $fbid	= $data['fb_data']['me']['id'];
	 
	 //TODO check if published to public
//	 $data['published'] = $this->members_model->is_public($fbid);
	 
	 $data['profile_infos'] = $this->members_model->get_profile_by_fbid($fbid);
	 $data['posted_jobs'] = $this->jobs_model->get_jobs_by_fbid($fbid);
	//  print_r($data['posted_jobs']); die(); 
	 $data['main_content'] = 'members';
	 $this->load->view('includes/template', $data);

	}
	
	//TODO to copy function - form file, success and fail
	function create_profile(){
	
		// $this->load->model('jobs_model');
		$fb_data = $this->session->userdata('fb_data');

		$data['fb_data'] = $fb_data;
		//  print_r($data);
		$fbid	= $data['fb_data']['me']['id'];
		
		$profile_exists = $this->members_model->get_profile_by_fbid($fbid);
		
		//check if profile does not exists
		if (!$profile_exists){
		
		$data['main_content'] = 'create_profile_form';
		$this->load->view('includes/template', $data);
		
		} else
		
		$data['main_content'] = 'profile_exists';
		$this->load->view('includes/template', $data);
		
	
	}
	
	function create_profile_process(){
			
		//get facebook info
		$fb_data = $this->session->userdata('fb_data');

	 	$data['fb_data'] = $fb_data;

	 	//get fb id
	 	$fbid	= $data['fb_data']['me']['id'];
	 	 	
		$this->load->library('form_validation');
		
				
			if ($this->form_validation->run() == FALSE) {
				//display errors
				$fb_data = $this->session->userdata('fb_data');
				$data['fb_data'] = $fb_data;
				$data['main_content'] = 'create_profile_form';
				$this->load->view('includes/template', $data);
			} else { //insert data to database
		
				if ($this->members_model->insert_profile()) {
					//insert successful
					$fb_data = $this->session->userdata('fb_data');
					$data['fb_data'] = $fb_data;
					$data['main_content'] = 'create_profile_success';
					$this->load->view('includes/template', $data);
					 
				}

		}
		 
	}
	
		function edit_profile() {
			
		//get id of job to edit
		$profile_id = $this->uri->segment(3);
			
		$fb_data = $this->session->userdata('fb_data');
		$data['fb_data'] = $fb_data;
	 	
		//get fb id
		$fbid = $data['fb_data']['me']['id'];
		 
		//get full info of selected job to edit
		$data['profile_infos'] = $this->members_model->get_profile_by_profilefb_id($fbid, $profile_id);
		//  print_r($data);die();

		$data['main_content'] = 'edit_profile_form';
		$this->load->view('includes/template', $data);
	}
	
	
		function edit_profile_process(){
			
		 
		$this->load->library('form_validation');

		if ($this->form_validation->run() == FALSE) {
			 
			$data['profile_id'] = $this->input->post('profile_id');
			
			$data['fb_data'] = $this->session->userdata('fb_data');
		
			$data['main_content'] = 'edit_profile_fail';
			$this->load->view('includes/template', $data);
		} else {
			//insert data to database
			//   echo 'ready for update'; die();
			if ($this->members_model->edit_profile_model()) {
				//post successful
				$fb_data = $this->session->userdata('fb_data');
				$data['fb_data'] = $fb_data;
				$data['main_content'] = 'edit_profile_success';
				$this->load->view('includes/template', $data);
				 
			}

		}
		 
	}
	
	
	
	
	

}