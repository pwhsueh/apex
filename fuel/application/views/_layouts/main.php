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
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/css/default.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/css/footer.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/css/index.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/css/max-767.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/css/max-1199.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/css/min-1200.css"/>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    

    <?php echo css($css); ?>
    <?php 
    	if (isset($css2)) {
    		echo css($css2);
    	} 
    ?>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo site_url()?>assets/templates/js/modernizr.custom.js"></script>
	<script src="<?php echo site_url()?>assets/templates/js/responsiveslides.min.js"></script> 
	<script src="<?php echo site_url()?>assets/templates/js/modernizr.custom.js"></script>
</head>

<body> 

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

 <?php echo js($js); ?>

</body>
</html>