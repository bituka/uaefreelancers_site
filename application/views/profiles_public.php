<div class="container">
	
    <div class="row" style="margin:50px 0;">
        <div class="span8" style="margin-bottom:0px;">
       			<a href= "<?php echo base_url('index.php/jobs/post_jobs'); ?>" class="btn btn-primary btn-large">Want to Post your Job Opportunity? &raquo;</a>      
        </div>
        <div class="span4" ></div>
     </div>   
     <div class="row" style="margin:50px 0;">
       
        <div class="span8" style="margin-bottom:50px;">
    	<h3>Freelancers</h3> 
    	<?php
            if (isset($profiles) && count($profiles === !null)):
                foreach ($profiles as $profile) :
                        ?>
                        <section id="posts" style="margin:20px">
                        <b>Posted by:</b> <br /><br />
                        <img src="https://graph.facebook.com/<?php echo $profile->profile_fbid ?>/picture" alt="" class="pic" />
                        Name: <?php echo $profile->profile_fbname ?><br /><br />
                        Title : <?php echo $profile->title ?><br />                      
 						Emirate: <?php echo $profile->emirate ?><br /> 
 						Position: <?php echo $profile->position ?><br />
 						Details: <?php echo $profile->details ?><br />
 						Contact: <?php echo $profile->contact_info ?>
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