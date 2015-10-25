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
<html lang="zh-tw">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Mobile Specific Metas
        ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Apex</title>
<meta name="keywords" content="關鍵字" />
<meta name="description" content="描述" />
<link rel="shortcut icon" href="<?php echo site_url()?>assets/icon/favicon.png"/>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<meta property="og:site_name" content="FB title" />
<meta property="og:description" content="FB描述" />
<meta property="og:type" content="website" />
<meta property="og:image" content="FB 照片" />
<link rel='stylesheet' id='contact-form-7-css'  href='<?php echo site_url()?>assets/templates/css/hd.css' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='<?php echo site_url()?>assets/templates/css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='<?php echo site_url()?>assets/templates/css/settings.css' type='text/css' media='all' />
<link rel='stylesheet' id='mmenu-css'  href='<?php echo site_url()?>assets/templates/css/mmenu.css' type='text/css' media='all' />
<link rel='stylesheet' id='waves-bootstrap-css'  href='<?php echo site_url()?>assets/templates/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='waves-prettyphoto-css'  href='<?php echo site_url()?>assets/templates/css/prettyPhoto.css' type='text/css' media='all' />
<link rel='stylesheet' id='waves-animate-css'  href='<?php echo site_url()?>assets/templates/css/animate.css' type='text/css' media='all' />
<link rel='stylesheet' id='waves-fa-css'  href='<?php echo site_url()?>assets/templates/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='themewaves-css'  href='<?php echo site_url()?>assets/templates/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='waves-responsive-css'  href='<?php echo site_url()?>assets/templates/css/responsive.css' type='text/css' media='all' />
<link rel='stylesheet' id='google-font-css'  href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C400italic%2C500%2C600%2C700%7CMontserrat%3A400%2C400italic%2C500%2C600%2C700%7CMontserrat%3A400%2C400italic%2C500%2C600%2C700%7CMontserrat%3A400%2C400italic%2C500%2C600%2C700%7CRoboto%3A400%2C400italic%2C500%2C600%2C700&#038;subset&#038;ver=4.2.2' type='text/css' media='all' />
<link rel='stylesheet' id='ms-main-css'  href='<?php echo site_url()?>assets/templates/css/masterslider.main.css' type='text/css' media='all' />
<link rel='stylesheet' id='ms-custom-css'  href='<?php echo site_url()?>assets/templates/css/custom.css' type='text/css' media='all' />

    

    <?php echo css($css); ?>
    <?php 
    	if (isset($css2)) {
    		echo css($css2);
    	} 
    ?>

<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/jquery.js'></script>
<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/jquery.themepunch.revolution.min.js'></script>
<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/loading.js'></script>

</head>

    <!-- <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/css/min-1200.css"/> -->
<!-- <body>  -->

<?php $this->load->view("_blocks/$lang_code/_header",$data)?> 


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

	<?php //if (!isset($not_show_footer) || !$not_show_footer): ?>
		<?php $this->load->view("_blocks/$lang_code/_footer")?>
	<?php //endif ?>
	

 <!-- JS -->


</div>
<a id="scrollUp" title="Scroll to top"><i class="fa fa-chevron-up"></i></a> 
<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/jquery.form.min.js'></script> 
<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/owl.js'></script> 
<!--<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/waves-script.js'></script> -->
<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/themewaves.js'></script> 
<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/smoothscroll.js'></script> 
<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/jquery.easy-pie-chart.js'></script> 
<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/Chart.min.js'></script> 
<!-- <script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?v=3.exp&#038;sensor=false&#038;ver=4.2.2'></script>  -->
<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/jquery.parallax-1.1.3.js'></script> 
<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/jquery.jplayer.min.js'></script> 
<!--<script type='text/javascript' src='<?php echo site_url()?>assets/templates/js/jquery.isotope.min.js'></script> -->
<!-- <script src='http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.13'></script>
<script src='http://maplacejs.com/src/maplace-0.1.3.min.js'></script> -->
 <?php echo js($js); ?>
</body>
</html>