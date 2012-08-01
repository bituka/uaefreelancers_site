<?php
$config = array(
    'jobs/post_job_process' , 'jobs/edit_job_process' => array(
            array(
                    'field' => 'title',
                    'label' => 'Title',
                    'rules' => 'trim|required'
                    ),
            array(
                    'field' => 'emirate',  
                    'label' => 'Choose Emirate',
                    'rules' => 'trim|required'
                    ),
            array(
                    'field' => 'position',
                    'label' => 'Position you need',
                    'rules' => 'trim|required'
                    ),
            array(
                    'field' => 'details',
                    'label' => 'Description/Details',
                    'rules' => 'trim|required'
                    ),
                    
            array(
                    'field' => 'contact_info',
                    'label' => 'Contact Information',
                    'rules' => 'trim|required'
                    )        
            ),      
      
           
    'members/create_profile_process'=> array(
            array(
                    'field' => 'title',
                    'label' => 'Title',
                    'rules' => 'trim|required'
                    ),
            array(
                    'field' => 'emirate',  
                    'label' => 'Choose Emirate',
                    'rules' => 'trim|required'
                    ),
            array(
                    'field' => 'position',
                    'label' => 'Position you need',
                    'rules' => 'trim|required'
                    ),
            array(
                    'field' => 'details',
                    'label' => 'Description/Details',
                    'rules' => 'trim|required'
                    ),
                    
            array(
                    'field' => 'contact_info',
                    'label' => 'Contact Information',
                    'rules' => 'trim|required'
                    )        
            )        
        ); 