 <div class="navbar">
        <div class="top-head">
         <div class="row">
         <div class="span10">
         
              	
         <a href= "<?php echo base_url('index.php/site'); ?>"><img style="padding-left: 0px;" src="<?php echo base_url('img/uaeflogosmallnobg.png')?>" /></a>
               
 
            </div>
            <div class="span2">
             <div id="login_section">
                  
               <?php if(!$fb_data['me']): ?>
               <a href="<?php echo $fb_data['loginUrl']; ?>"><img style="padding-left: 0px; margin-top: 30px; margin-bottom: 0px;" src="<?php echo base_url('img/fb_login_icon.gif')?>" /></a>
  
   
  <?php else: ?>

  <?php //print_r($fb_data); ?>
  <img src="https://graph.facebook.com/<?php echo $fb_data['uid']; ?>/picture" alt="" class="pic" />
  <p>Hi <?php echo $fb_data['me']['name']; ?>,<br />
    <a href="<?php echo site_url('members'); ?>"></a><a href="<?php echo $fb_data['logoutUrl']; ?>"><img style="padding-left: 0px;" src="<?php echo base_url('img/fb-Logout.png')?>" /></a> </p>
  <?php endif; ?>         
            </div>
            </div>
            </div>   
            </div>
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse">
            <ul class="nav">
           <!--   <li class="active"><a href="#">Home</a></li> -->
              <li><a href="<?php echo base_url('index.php/site'); ?>">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>