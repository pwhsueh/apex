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
     
    
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/products/css/default.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/products/css/menu.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/products/css/jquery.fullPage.css"/>
       <?php echo css($css); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo site_url()?>assets/templates/products/css/footer.css"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"/>
    
    <!-- JS -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo site_url()?>assets/templates/products/js/jquery.fullPage.js"></script>
    <script type="text/javascript" src="<?php echo site_url()?>assets/templates/products/js/responsiveslides.min.js"></script>
    

    
</head>

<body style="background-color:#999;">

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

	<?php if (!isset($not_show_footer) || !$not_show_footer): ?>
		<?php $this->load->view("_blocks/$lang_code/_footer2")?>
	<?php endif ?>
	

 <!-- JS -->

 <?php echo js($js); ?>

   
</body>
</html>