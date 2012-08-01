
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
        <form action="<?php echo base_url('index.php/members/create_profile_process'); ?>" method="post" accept-charset="utf-8">    
        <h3>Enter profile details:</h3>	
        <?php echo validation_errors('<p class="error">'); ?>
        
        <?php 
        //hidden user info from FB:
        
        echo form_hidden('job_creator_fbid', $fb_data['uid']);
        
        echo form_hidden('job_creator_fbname', $fb_data['me']['name']);
        ?>
        	<label>Enter your title</label> 
        	 <?php echo form_input('title', 'Title'); ?>	
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

		    echo form_dropdown('emirate', $options, 'Dubai', set_value('emirate'));
		    ?>
		    <label>Category/Position</label> 

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
		     
    	  	<label>Type your Contact Information</label> 
 
		     <?php echo form_textarea('contact_info', set_value('contact_info', '')); ?>
		     	    
		    <p><?php echo form_submit('submit', 'Submit');?></p>
		    <?php echo form_close(); ?>
        </div>
        <div class="span4" ></div>
 <?php endif; ?> 
        </div>
    </div>
</div>
