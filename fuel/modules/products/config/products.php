<?php
/*
|--------------------------------------------------------------------------
| FUEL NAVIGATION: An array of navigation items for the left menu
|--------------------------------------------------------------------------
*/
$config['nav']['products'] = array(
'products/lists?type=656'		=> 'Device',
'products/lists?type=657'		=> 'Mask'
);

// deterines whether to use this configuration below or the database for controlling the blogs behavior
$config['crawleruse_db_table_settings'] = TRUE;

// the cache folder to hold blog cache files
$config['products'] = 'products';

$config['tables']['mod_products'] = 'mod_products';


$config['products_javascript'] = array(
    site_url().'assets/admin_js/jquery.js',
    site_url().'assets/admin_js/bootstrap.min.js', 
	site_url().'assets/admin_js/jquery-ui.min.js',
);

$config['products_ck_javascript'] = array(
    // site_url().'assets/admin_js/ckeditor.js',
    site_url().'assets/admin_js/ckeditor/ckeditor.js',
	site_url().'assets/admin_js/ckfinder/ckfinder.js'  
    // site_url().'assets/admin_js/adapters/jquery.js',  
	// site_url().'assets/admin_js/ckfinder/ckfinder.js'  
);

$config['products_css'] = array(
	site_url().'assets/admin_css/bootstrap.min.css',
	site_url().'assets/admin_css/style.css',
	site_url().'assets/admin_css/style-responsive.css'
	// site_url().'assets/admin_css/datepicker.css'
);

?>