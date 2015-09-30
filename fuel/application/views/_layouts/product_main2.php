<?php

	$lang_code = $this->uri->segment(1);// $this->input->get("lang_code");
	// print_r($lang_code);
	// die;
	if (!isset($lang_code) || empty($lang_code)) {
		$lang_code = 'EN';  
		$this->comm->plu_redirect(site_url($lang_code)."/home", 0,null);
	}

	$data = array(
		"lang_code" => $lang_code
	);

	$title = "APEX USA";
	// if ($lang_code == "zh-TW") {
	// 	$title = "STURDY-新駿實業";
	// }

?>
<!DOCTYPE html>

<html lang="en">
    <head>
    <meta charset="utf-8"/>
    <title>APEX USA</title>
    <meta http-equiv="cleartype" content="on"/>

    <!-- Always force latest IE rendering engine & Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

    <!-- Responsive and mobile friendly stuff -->
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/product/css/default.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/product/css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/product/css/jquery.fullPage.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/product/css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/product/css/footer.css"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- JS -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url()?>assets/templates/product/js/jquery.fullPage.js"></script>
    <script type="text/javascript" src="<?php echo site_url()?>assets/templates/product/js/responsiveslides.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#fullpage').fullpage({
                navigation: true,
                navigationColor: '#EC0928',
                scrollingSpeed: 700,
                animateAnchor: false,
                controlArrows: false,
                sectionsColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#F1F1F1', '#FFFFFF'],
                anchors: ['P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7']
            });
            
            $('.toggle-footer-btn').click(function() {
                $(this).html($(this).html() == '+' ? '-' : '+');
                if($(this).html() == '-') {  
                    $('.toggle-footer-btn, #footer').animate({
                        bottom: "+=100"
                    });
                }
                else {
                    $('.toggle-footer-btn, #footer').animate({
                        bottom: "-=100"
                    });
                }
                return false;
            });
        });
    </script>
    </head>

    <body style="background-color:#999;">
 


	<?php 
		if(isset($views)){
			$this->load->view($lang_code."/".$views,$data);
		}
		else
		{
			define('FUELIFY', FALSE);
			echo fuel_var('body', '');
		}
	?>
 

 <!-- JS -->

 <?php echo js($js); ?>

   
<!-- footer --> 
<a href="#" class="toggle-footer-btn">+</a>
<div style="clear:both;"></div>




<!-- 
<div id="footer" class="footer">
      <div class="pd_footer_right"> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> 
    <!--<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>--> 
    
  </div>
      <div class="pd_footer_left">
    <p class="links"> <a href="index.html">Home</a> | <a href="contact.html">Contact Us</a> | <a href="news.html">News</a> | <a href="termofuse.html">Term of use</a> | <a href="privacy.html">Privacy</a> </p>
    <p class="footercopyright">Copyright ©2015 APEX MEDICAL CORP. All right reserved</p>
  </div>
    </div>
 


<script type="text/javascript" async src="http://www.google-analytics.com/ga.js"></script> 
<script type="text/javascript" href="<?php echo site_url()?>assets/templates/product/js/doubletaptogo.js"></script> 
<script>
	   $(function() {
           // $('#nav li:has(ul)').doubleTapToGo();
	   });
    </script>
</body>
</html>