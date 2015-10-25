<?php
/*
|--------------------------------------------------------------------------
| FUEL NAVIGATION: An array of navigation items for the left menu
|--------------------------------------------------------------------------
*/
$config['nav']['sup'] = array(
'sup/lists'		=> 'Online Partner'
	// 'sup/lists?type=640'		=> 'FAQ',
	// 'sup/lists?type=641'		=> 'Download',
	// 'sup/lists?type=642'		=> 'Video',
	// 'sup/lists?type=643'		=> 'Health Sleep'
);

// deterines whether to use this configuration below or the database for controlling the blogs behavior
$config['crawleruse_db_table_settings'] = TRUE;

// the cache folder to hold blog cache files
$config['sup'] = 'sup';

$config['tables']['mod_partner'] = 'mod_partner';


$config['sup_javascript'] = array(
    site_url().'assets/admin_js/jquery.js',
    site_url().'assets/admin_js/bootstrap.min.js', 
	site_url().'assets/admin_js/jquery-ui.min.js',
);

$config['sup_ck_javascript'] = array(
    site_url().'assets/admin_js/ckeditor.js',
    site_url().'assets/admin_js/adapters/jquery.js',  
);

$config['sup_css'] = array(
	site_url().'assets/admin_css/bootstrap.min.css',
	site_url().'assets/admin_css/style.css',
	site_url().'assets/admin_css/style-responsive.css'
	// site_url().'assets/admin_css/datepicker.css'
);

?>