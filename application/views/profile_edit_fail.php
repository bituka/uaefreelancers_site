<div class="container">
    <div class="row">
        <div class="span8"> 
  <?php if(!$fb_data['me']): ?>
  Login with your Facebook account on top of the page to post or create profile.
        </div>        	
        <div class="span4"></div>
    </div>
    <?php else: ?>
    <div class="row" >
        <div class="span12" style="padding-right: 500px; padding-bottom: 200px; padding-top: 200px;">  
        	
        	<center>  
        	<h3>Error editing job.</h3>
        	<?php echo validation_errors('<p class="error">'); ?>
        	<a href= "<?php echo base_url('index.php/members/edit_job/' . $job_id); ?>" class="btn btn-primary btn-large">Back to Edit Page.&raquo;</a>
        	</center>               	
       
         </div>
     </div>        
 <?php endif; ?> 
 </div>  
 </div>