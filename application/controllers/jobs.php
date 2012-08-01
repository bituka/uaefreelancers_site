<?php

class Jobs extends CI_Controller {

	function __construct() {
		parent::__construct();

	}

	function post_jobs(){
		// $this->load->model('jobs_model');
		$fb_data = $this->session->userdata('fb_data');

		$data['fb_data'] = $fb_data;
		//  print_r($data);
		//	echo $data['fb_data']['me']['id'];die();
		 
		$data['main_content'] = 'create_jobs_form';
		$this->load->view('includes/template', $data);

	}
	 
	function post_job_process(){
			

		$this->load->library('form_validation');

		if ($this->form_validation->run() === FALSE) {
			//display errors
		//	echo validation_errors();die();
			$fb_data = $this->session->userdata('fb_data');
			$data['fb_data'] = $fb_data;
			$data['main_content'] = 'create_jobs_form';
			$this->load->view('includes/template', $data);
		} else {
			//insert data to database

			if ($this->jobs_model->insert_job()) {
				//post successful
				$fb_data = $this->session->userdata('fb_data');
				$data['fb_data'] = $fb_data;
				$data['main_content'] = 'create_job_success';
				$this->load->view('includes/template', $data);
				 
			}

		
		}
		 
	}

	function edit_job() {
			
		//get id of job to edit
		$job_id = $this->uri->segment(3);
			
		$fb_data = $this->session->userdata('fb_data');
		$data['fb_data'] = $fb_data;
	 	
		//get fb id
		$fbid = $data['fb_data']['me']['id'];
		 
		//get full info of selected job to edit
		$data['posted_jobs'] = $this->jobs_model->get_job_by_jobfb_id($fbid, $job_id);
		//  print_r($data);die();

		$data['main_content'] = 'edit_jobs_form';
		$this->load->view('includes/template', $data);
	}

	function edit_job_process(){
			
		 
		$this->load->library('form_validation');

		if ($this->form_validation->run() == FALSE) {
			 
			$data['job_id'] = $this->input->post('job_id');
			
			// print_r($data); die();
			$fb_data = $this->session->userdata('fb_data');
			$data['fb_data'] = $fb_data;
	
			$data['main_content'] = 'jobedit_error_page';
			$this->load->view('includes/template', $data);
		} else {
			//insert data to database
			//   echo 'ready for update'; die();
			if ($this->jobs_model->edit_job_model()) {
				//post successful
				$fb_data = $this->session->userdata('fb_data');
				$data['fb_data'] = $fb_data;
				$data['main_content'] = 'edit_job_success';
				$this->load->view('includes/template', $data);
				 
			}

		}
		 
	}

	function delete_job(){
		 
		//get id of job to delete
		$job_id = $this->uri->segment(3);
			
		$fb_data = $this->session->userdata('fb_data');
		$data['fb_data'] = $fb_data;
	 	
		//get fb id
		$fbid = $data['fb_data']['me']['id'];
		 
			if ($this->jobs_model->delete_job_model($fbid, $job_id)){
			 
			//deleted job success		
			$fb_data = $this->session->userdata('fb_data');
			$data['fb_data'] = $fb_data;
			$data['main_content'] = 'delete_job_success';
			$this->load->view('includes/template', $data);
		 
			}
	}

}
