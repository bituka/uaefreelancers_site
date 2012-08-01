
<div class="container">
	<?php if(!$fb_data['me']): ?>
    <div class="row">
        <div class="span8">  
  		Login with your Facebook account on top of the page to post or create profile.
     	</div>     	
    	<div class="span4" ></div>
    </div>
    <?php else: ?>
    <div class="row">
        <div class="span8">           	
        <a href= "<?php echo base_url('index.php/members'); ?>" class="btn btn-primary btn-large">Back to Members Area &raquo;</a>           	 
        </div>
        <div class="span4"></div>         
        <div class="row" style="margin-top:100px; padding-left: 35px;" >
        <div class="span8">
        
        <?php echo validation_errors('<p class="error">'); ?>
        <form action="<?php echo base_url('index.php/jobs/post_job_process'); ?>" method="post" accept-charset="utf-8">    
        <h3>Enter job details:</h3>	
        	
        
        <?php 
        //hidden user info from FB:
        
        echo form_hidden('profile_fbid', $fb_data['uid']);
        
        echo form_hidden('profile_fbname', $fb_data['me']['name']);
        ?>
        	<label>Enter the Title</label> 
        	 <?php echo form_input('title', ''); ?>	
        	 <label>Choose Emirate</label>      	 	
        	 <?php     	
		    $options = array(
			'Dubai' => 'Dubai',
			'Abu Dhabi' => 'Abu Dhabi',
			'Ajman' => 'Ajman',
			'Fujairah' => 'Fujairah',
			'Ras al-Khaimah' => 'Ras al-Khaimah',
			'Sharjah' => 'Sharjah',
			'Umm al-Quwain' => 'Umm al-Quwain',
		    );

		    $emirate = array('Abu Dhabi', 'Dubai');

		    echo form_dropdown('emirate', $options, 'Dubai');
		    ?>
		    
		    <label>Position you need</label> 

		    <?php
		    $options = array(
			'Web Developer' => 'Web Developer',
			'Programmer' => 'Programmer',
			'Photographer' => 'Photographer',
			'Computer Engineer' => 'Computer Engineer',
			'Network Engineer' => 'Network Engineer',
			'Sales Person' => 'Sales Person',
			'Model' => 'Model',
			'Others' => 'Others',
		    );
		
		    $position = array('Model', 'Web Developer');
		
		    echo form_dropdown('position', $options, 'Web Developer');
		    ?> 
		    
		     <label>Description/Details</label> 

		     <?php echo form_textarea('details', set_value('details', '')); ?>
    	  	<label>Type your Contact Information (Phone, Email, Links to your Website, etc.)</label> 
 
		     <?php echo form_textarea('contact_info', set_value('contact_info', '')); ?>
		    
		    <p><?php echo form_submit('submit', 'Submit');?></p>
		    <?php echo form_close(); ?>
        </div>
        <div class="span4" ></div>
 <?php endif; ?> 
        </div>
    </div>
</div>
