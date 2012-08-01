<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
        <h1>Welcome to the home of UAE freelancers!</h1>
        <p>Companies, Employers, Professionals, Web Developers, Computer Engineers, Network Engineers, Programmers, Photographers, Models, Students, Hobbyists, Everyone...</p>
        <br />
    </div>

    <!-- Example row of columns -->
    <div class="row">
        <div class="span12" >
            <div class="mid-buttons" style="margin-left: 250px;" >
                <a href= "<?php echo base_url('index.php/site/jobs_public'); ?>" class="btn btn-primary btn-large" style="margin: 50px; ">Are you looking for side jobs? &raquo;</a>    
                <a href= "<?php echo base_url('index.php/site/profiles_public'); ?>" class="btn btn-primary btn-large">Are you looking for freelancers? &raquo;</a>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="span4">
            <h2>Login Easily</h2>
            <p>Login easily using secure facebook login. </p>
            <p>You can login using the login button on top of the page.</p>
        </div>   
        <div class="span4">          
            <h2>Free to Post</h2>
            <p>Anyone can view/post jobs or create profile for free. New features will continuously be added.</p>
            <a href= "<?php echo base_url('index.php/members'); ?>" class="btn">Go to Members Area &raquo;</a></p>
            <?php // echo anchor('members', 'Post Now &raquo;', array('class' => 'btn')); ?>
        </div>
        <div class="span4">
            <h2>Find People Locally</h2>
            <p>Find and meet people in the area near to you.</p>
            <p></p>
        </div>  
        
    </div>
