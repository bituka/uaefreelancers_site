
<div class="container">
    <div class="row">
        <div class="span8">       
			  <?php if(!$fb_data['me']): ?>
			  	Login with your FB account on top to post or create profile.
			  <?php else: ?>
			  	<p> What would you like to do? </p>
        </div>        	
    <div class="span4" ></div>
    </div>
    
    <div class="row" style="margin-bottom:50px;">
        <div class="span8" >           	
        	<a href= "<?php echo base_url('index.php/jobs/post_jobs'); ?>" class="btn btn-primary btn-large">Post Jobs &raquo;</a>
        	<?php if (isset($profile_infos) && count($profile_infos === !null)):
        		foreach ($profile_infos as $profile_info) :
                    if ($profile_info->profile_fbid === $fb_data['uid']):
                        ?>
           	<a href= "<?php echo base_url('index.php/members/edit_profile/' . $profile_info->id); ?>" class="btn btn-primary btn-large">Edit Profile &raquo;</a>
           		<?php endif; endforeach;  ?>
           	<?php else: ?>
           	<a href= "<?php echo base_url('index.php/members/create_profile'); ?>" class="btn btn-primary btn-large">Create Profile &raquo;</a>
        	<?php endif; ?>
           	              
        </div
        <div class="span4" ></div>         
     <div class="row" style="margin:50px 0;">
        <div class="span8" style="margin-bottom:50px;">
        <h2>Your Profile</h2> 
        <?php
            if (isset($profile_infos) && count($profile_infos === !null)):
                foreach ($profile_infos as $profile_info) :
                    if ($profile_info->profile_fbid === $fb_data['uid']):
                        ?>
                        <section id="posts" style="margin:20px">
                        Title : <?php echo $profile_info->title ?><br /> 
                        Emirate : <?php echo $profile_info->emirate ?><br />
                        Position : <?php echo $profile_info->position ?><br />
                        Details : <?php echo $profile_info->details ?><br />
                        Contact : <?php echo $profile_info->contact_info ?><br />
                       
 						<br /><br />
						
 					<!-- 	<a href= "<?php //echo base_url('index.php/jobs/publish/' . $profile_info->id); ?>" class="btn">Hide from public &raquo;</a> -->
 						
 						</section> <hr />
                         <?php endif; ?>
					
                     <?php endforeach;
                 else: ?>
                     <section id="blank_section">No profile set up yet.</section>
		<?php endif; ?>
       
        </div>
        <div class="span4" ></div>
        <div class="span8" style="margin-bottom:50px;">
    	<h3>Posted Jobs</h3> 
    	<?php
            if (isset($posted_jobs) && count($posted_jobs === !null)):
                foreach ($posted_jobs as $posted_job) :
                    if ($posted_job->job_creator_fbid === $fb_data['uid']):
                        // echo $image->filename;
                        ?>
                        <section id="posts" style="margin:20px">
                        Title : <?php echo $posted_job->title ?><br />                      
 						Date Posted : <span class="date"><?php echo $posted_job->job_posted_date ?></span>
 						<br /><br />
 						<a href= "<?php echo base_url('index.php/jobs/edit_job/' . $posted_job->id); ?>" class="btn">Edit &raquo;</a>
 						<a href= "<?php echo base_url('index.php/jobs/delete_job/' . $posted_job->id); ?>" class="btn delete_job">Delete &raquo;</a>
 						</section> <hr />
                         <?php endif; ?>
					
                     <?php endforeach;
                 else: ?>
                     <section id="blank_section">No jobs posted.</section>
			<?php endif; ?>
    	
        </div>
        <div class="span4" ></div>
 		
        </div>
        <?php endif; ?> 
    </div>
</div>