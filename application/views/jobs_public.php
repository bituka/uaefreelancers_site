<div class="container">
	<?php  if (!isset($profile_exists) && count($profile_exists === null)):?>
    <div class="row" style="margin:0;">
        <div class="span8" style="margin-bottom:50px;">
       			<a href= "<?php echo base_url('index.php/members/create_profile'); ?>" class="btn btn-primary btn-large">Create Profile &raquo;</a>      
        </div>
        <div class="span4" ></div>
     </div>   
     <?php endif; ?>
     <div class="row" style="margin:50px 0;">
       
        <div class="span8" style="margin-bottom:50px;">
    	<h3>Job Opportunities</h3> 
    	<?php
            if (isset($posted_jobs) && count($posted_jobs === !null)):
                foreach ($posted_jobs as $posted_job) :
                        ?>
                        <section id="posts" style="margin:20px">
                        <b>Posted by:</b> <br /><br />
                        <img src="https://graph.facebook.com/<?php echo $posted_job->job_creator_fbid ?>/picture" alt="" class="pic" />
                        <?php echo $posted_job->job_creator_fbname ?><br /><br />
                        Title : <?php echo $posted_job->title ?><br />                      
 						Emirate: <?php echo $posted_job->emirate ?><br /> 
 						Position: <?php echo $posted_job->position ?><br />
 						Details: <?php echo $posted_job->details ?><br />
 						Contact: <?php echo $posted_job->contact_info ?>
 						<br /><br />
 						</section> <hr />
					
                <?php endforeach;
                 else: ?>
                     <section id="blank_section">This section is still empty.</section>
			<?php endif; ?>
    	
        </div>
        <div class="span4" ></div>
        <div class="row" style="margin:50px 0;">
        <div class="span8" style="margin-bottom:50px;">
 		<?php echo $this->pagination->create_links(); ?>
 		</div>
 		<div class="span4" ></div>
        </div>
         
        
    </div>
</div>