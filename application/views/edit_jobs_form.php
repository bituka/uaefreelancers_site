<div class="container">
<?php if(!$fb_data['me']): ?>
	<div class="row">
		<div class="span8">Login with your Facebook account on top of the page
			to post or create profile.</div>
		<div class="span4"></div>
	</div>
	<?php else: ?>
	<div class="row">
		<div class="span8">
			<a href="<?php echo base_url('index.php/members'); ?>"
				class="btn btn-primary btn-large">Back to Members Area &raquo;</a>
		</div>
		<div class="span4"></div>
		<div class="row" style="margin-top: 100px; padding-left: 35px;">
			<div class="span8">
				<form action="<?php echo base_url('index.php/jobs/edit_job_process'); ?>" method="post" accept-charset="utf-8">
					<?php echo validation_errors('<p class="error">','</p>'); ?>
					<h3>Edit job details:</h3>
					
					<?php
					if (isset($posted_jobs) && count($posted_jobs === !null)):
					foreach ($posted_jobs as $posted_job) :
					if (($posted_job->job_creator_fbid === $fb_data['uid']) && ($posted_job->id === $this->uri->segment(3))):
					// echo $image->filename;
					?>
					<?php
					//hidden user info from FB:

					echo form_hidden('job_creator_fbid', $fb_data['uid']);

					echo form_hidden('job_creator_fbname', $fb_data['me']['name']);
					echo form_hidden('job_id', $posted_job->id);
					?>
					ID : <?php echo $posted_job->id ?><br />
					
					<label>Enter the title</label>
					<?php echo form_input('title', $posted_job->title); ?>
    

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

					$emirate = array('Abu Dhabi', $posted_job->emirate);

					echo form_dropdown('emirate', $options, $posted_job->emirate);

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

					$position = array('Model', $posted_job->position);

					echo form_dropdown('position', $options, $posted_job->position);
					?>

					<label>Description/Details</label>
					<?php echo form_textarea('details', set_value('details', $posted_job->details)); ?>


					<label>Type your Contact Information (Phone, Email, Links to your
						Website, etc.)</label>
						<?php echo form_textarea('contact_info', set_value('contact_info', $posted_job->contact_info)); ?>
						<?php endif; ?>
						<?php endforeach;
						else: ?>
					<section id="blank_section">Error on page. No jobs to edit.</section>
					
					<?php endif; ?>

					<p>
					<?php echo form_submit('submit', 'Submit');?>
					</p>
					<?php echo form_close(); ?>
			
			</div>
			<div class="span4"></div>
			<?php endif; ?>
		</div>
	</div>
</div>
