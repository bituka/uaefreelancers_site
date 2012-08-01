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
				<form action="<?php echo base_url('index.php/members/edit_profile_process'); ?>" method="post" accept-charset="utf-8">

					<h3>Edit profile details:</h3>
					<?php echo validation_errors('<p class="error">'); ?>
					<?php
					if (isset($profile_infos) && count($profile_infos === !null)):
					foreach ($profile_infos as $profile_info) :
					if (($profile_info->profile_fbid === $fb_data['uid']) && ($profile_info->id === $this->uri->segment(3))):
					
					?>
					<?php
					//hidden user info from FB:

					echo form_hidden('profile_fbid', $fb_data['uid']);

					echo form_hidden('profile_fbname', $fb_data['me']['name']);
					echo form_hidden('profile_id', $profile_info->id);
					?>
					ID : <?php echo $profile_info->id ?><br />
					
					<label>Enter the title</label>
					<?php echo form_input('title', $profile_info->title); ?>
    

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

					$emirate = array('Abu Dhabi', $profile_info->emirate);

					echo form_dropdown('emirate', $options, $profile_info->emirate);

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

					$position = array('Model', $profile_info->position);

					echo form_dropdown('position', $options, $profile_info->position);
					?>

					<label>Description/Details</label>
					<?php echo form_textarea('details', set_value('details', $profile_info->details)); ?>


					<label>Type your Contact Information (Phone, Email, Links to your
						Website, etc.)</label>
						<?php echo form_textarea('contact_info', set_value('contact_info', $profile_info->contact_info)); ?>
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
