
<div class="container"><?php echo form_open('index.php/members/create_job'); ?> 

    
    
    
<div class="row">
<h3>Enter details of job you want to post</h3><br />
<div class="span8" >
    <?php echo validation_errors('<p class="error">'); ?>	
    
    <label>Enter the title</label> 
    <?php echo form_input('title', 'Title'); ?>


    <label>Choose location</label> 

    <?php 
    $options = array(
        'dubai' => 'Dubai',
        'abu_dhabi' => 'Abu Dhabi',
        'ajman' => 'Ajman',
        'fujairah' => 'fujairah',
        'ras_al_khaimah' => 'Ras al-Khaimah',
        'sharjah' => 'Sharjah',
        'umm_al_quwain' => 'Umm al-Quwain',
    );

    $location = array('abu_dhabi', 'dubai');

    echo form_dropdown('location', $options, 'dubai');
    ?> 

    <label>Position you need</label> 

    <?php
    $options = array(
        'web_developer' => 'Web Developer',
        'programmer' => 'Programmer',
        'photographer' => 'Photographer',
        'computer_engineer' => 'Computer Engineer',
        'network_enginner' => 'Network Engineer',
        'sales_person' => 'Sales Person',
        'model' => 'Model',
        'other' => 'Others',
    );

    $position = array('model', 'computer_engineer');

    echo form_dropdown('position', $options, 'computer_engineer');
    ?> 

    <label>Description/Details<label> 

    <?php echo form_textarea('details', set_value('details', 'Details')); ?>
    <legend></legend> <?php echo form_submit('submit', 'Submit'); ?> <?php echo form_close(); ?>

    </div>
    <div class="span4" >
    </div>
    </div>