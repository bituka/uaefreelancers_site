<hr>

      <footer>
        <div id="footer_left">
        	&copy; uaefreelancers 2012 &nbsp;&nbsp;
        	 <a class="btn" href="http://www.facebook.com/UAEfreelancers"><img src="<?php echo base_url('img/Facebook-icon.png') ?>" alt="Facebook Icon" height="50" width="50" /></a>
        	 <a class="btn" href="http://www.twitter.com/uaefreelancers"><img src="<?php echo base_url('img/twitter-icon.png') ?>" alt="Twitter Icon" height="50" width="50" /></a>	
        </div> 
        <div id="footer_right">Terms</div>
      </footer>

    </div> <!-- /container -->
     <div id="fb-root"></div>
 <script>
window.fbAsyncInit = function() {
FB.init({
  appId: '<?php echo $this->facebook->getAppID() ?>',
  cookie: true,
  xfbml: true,
  oauth: true
});
 FB.Event.subscribe('auth.sessionChange', function(response) {
    if (response.session) {
      // A user has logged in, and a new cookie has been saved
        window.location.reload(true);
    } else {
      // The user has logged out, and the cookie has been cleared
    }
  });

FB.Event.subscribe('auth.login', function(response) {
  window.location.reload();
});
FB.Event.subscribe('auth.logout', function(response) {
  window.location.reload();
});
};
(function() {
var e = document.createElement('script'); e.async = true;
e.src = document.location.protocol +
  '//connect.facebook.net/en_US/all.js';
document.getElementById('fb-root').appendChild(e);
}());
</script>    
    
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php echo base_url('js/libs/jquery-1.7.1.min.js');?>"><\/script>')</script>

<script src="<?php echo base_url('js/libs/bootstrap/transition.js');?>"></script>
<script src="<?php echo base_url('js/libs/bootstrap/collapse.js');?>"></script>

<script src="<?php echo base_url('js/script.js');?>"></script>
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

</body>
</html>
