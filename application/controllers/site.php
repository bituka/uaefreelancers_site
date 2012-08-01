<?php

class Site extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('facebook_model');
        $this->load->model('site_model');
 		$this->load->library('pagination');
    }

    function index() { 
    	//get facebook info
    	$data['fb_data'] = $this->session->userdata('fb_data');    
    	    
        $data['main_content'] = 'index';
        $this->load->view('includes/template', $data);
    }
    
    function jobs_public(){
    
        
    	$data['fb_data'] = $this->session->userdata('fb_data');    
		$fbid	= $data['fb_data']['me']['id'];
    	$jobscount = $this->site_model->get_jobs_count();
    	
    //	echo $jobscount; die();
    	
    	
    	//pagination config
    	$config['base_url'] = base_url('index.php/site/jobs_public/');
        $config['total_rows'] = $jobscount;
        $config['per_page'] = 10;
        $config['num_links'] = 10;
        $config['cur_page'] = $this->uri->segment(3);
   		$config['uri_segment'] = 3;
   	    $config['page_query_string'] = FALSE;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
    	
    	$data['profile_exists'] = $this->members_model->get_profile_by_fbid($fbid);
    	$data['posted_jobs'] = $this->site_model->get_jobs($config['per_page'], $this->uri->segment(3));
    	
        $data['main_content'] = 'jobs_public';
        $this->load->view('includes/template', $data);
    }
    
    function profiles_public() {
    	
    	$data['fb_data'] = $this->session->userdata('fb_data');    
		
    	$profilescount = $this->site_model->get_profiles_count();
    	
    	
    	//pagination config
    	$config['base_url'] = base_url('index.php/site/profiles_public/');
        $config['total_rows'] = $profilescount;
        $config['per_page'] = 10;
        $config['num_links'] = 10;
        $config['cur_page'] = $this->uri->segment(3);
   		$config['uri_segment'] = 3;
   	    $config['page_query_string'] = FALSE;
        $config['full_tag_open'] = '<div id="pagination">';
        $config['full_tag_close'] = '</div>';

        $this->pagination->initialize($config);
    	
    
    	$data['profiles'] = $this->site_model->get_profiles($config['per_page'], $this->uri->segment(3));
    	
        $data['main_content'] = 'profiles_public';
        $this->load->view('includes/template', $data);
    }
    
}