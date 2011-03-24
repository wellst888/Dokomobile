<?php
/*
Template Name:landing_page
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
<?php bloginfo('name'); ?>
<?php if ( is_single() ) { ?>
&raquo; Blog Archive
<?php } ?>
<?php wp_title(); ?>
</title>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="../css/index_style.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../js/index.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
			$(document).ready(function() {
			tryDoko();
			getDoko();
			/*mouseMover();*/
			demoRator();
			});/*document ready function*/
</script>

<script type="text/javascript">
// move the image where the mouse is
			/*$(document).mousemove( function(e) {
  			mouseX = e.pageX;
  			mouseY = e.pageY;
  			relMouseX = mouseX - offset.left;
  			relMouseY = mouseY - offset.top;
			});
			function animateFollower() {
  				$('#follower').css('left', (relMouseX-15));
  				$('#follower').css('top', relMouseY-15);
			}*/
</script>
</head>
<body>
<div id="header1">
  <!--HEADER1-->
  <div id="header">
    <div id="logo"></div>
    <div id="mobile">mobile</div>
    <div id="logIn_header">
      <?php wp_login_form(); ?>
    </div>
  </div>
  <!--header-->
</div>
<!--header1-->
<div id="wrapper">
  <div id="content">
    <div id="left">
      <!--LEFT-->
      <div class="lColumnheader">
        <h2 class="enigmatic2">Welcome to Doko</h2>
      </div>
      <p class="perspective2">Doko is a family of mobile applications designed to fit the active lifestyle. Get information from Doko's catalog of places and activities, updated live.</p>
      <div id="demo_btn"></div>
      <p class="perspective2">Each app is based on your desired location, and contains information about what you'd like to do, the best places to go to do it, and the information you need to make it happen. Each app is constantly improved upon by input from the Doko community, so the information stays up to date.</p>
    </div>
    <!--left_end-->
    <div id="center">
      <!--CENTER-->
       <div id="phone">
       
       <!--<div id="followDiv"><img src="../images/mouse_follower.png" id="follower" alt="Mouse follower image." /></div>-->
       <div id="phoneDemo1">
       <div id="phoneDemo2">
       	  			<div id="phoneDemo3"><p>Click the screen to navigate.</p></div>
       	  		</div>
       	  	<div id="phoneDemo4">4</div>
       	  	<div id="phoneDemo5">5</div>
       	  	<div id="phoneDemo6">6</div>
        </div>
       <!--phoneDemo1-->
     </div>
      <!--phone_end-->
    </div>
    <!--CENTER_end-->
    <div id="right">
      <!--RIGHT-->
      <div id="flipper1">
        <div id="join_btn"></div>
        <div id="dokoRegister">
          <p id ="register_p">You need to register in order to get access to Doko mobile apps. It's free, and we never sell your private information.</p>
          <div id="registerLink">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sideBar2') ) : ?>
            <?php endif; ?>
          </div>
          <!--registerLink-END-->
        </div>
        <!--dokoRegister-END-->
      </div>
      <!--flipper1-->
      <div id="rColumncallout">
        <div id="rColumnheader">
          <h2 class="enigmatic2">The Doko Community</h2>
        </div>
        <p class="perspective2">Doko is free. Simply become part of the Doko community, and get app updates, information and the insights and information available through a membership with the Doko network.</p>
      </div>
      <!--rColumncallout-->
      <div id="rColumncallout2">
        <h2 class="enigmatic2">Latest Additions</h2>
        <div id="latestIcons"></div>
        <div id="latestIcon_text">
          <p class="perspective4"><img src="../images/mtHood.png" alt="mtHood" width="57" height="57" id="img_icon" alt="Mt. Hood App Icon" title="Mt. Hood App Icon"/>Mt. Hood Oregon is one of the most scenic areas on the planet, beloved by native Oregonians as well as people the world over. Doko mobile's Mt Hood app provides you with up-to-date information for skiing, hiking, snowboarding, camping and more on this national treasure. </p>
        </div>
        <!--latestIcon_text_END-->
      </div>
      <!--rColumncallout2_END-->
    </div>
    <!--RIGHT_END-->
  </div>
  <!--CONTENT_END-->
</div>
<!--WRAPPER_END-->
<div id="footer1">
  <!--FOOTER1-->
  <div id="footer">
    <div id="footer_l"></div>
    <!--footer_l-->
    <div id="footer_m"></div>
    <div id="footer_r"></div>
  </div>
  <!--footer-->
</div>
<!--footer1-->
</body>
</html>