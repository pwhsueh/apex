<?php
/*
|--------------------------------------------------------------------------
| FUEL NAVIGATION: An array of navigation items for the left menu
|--------------------------------------------------------------------------
*/
$config['nav']['news'] = array(
// 'news/lists'		=> '上稿管理',
// 'sup/lists'		=> 'Support'
'news/lists?type=46&cate=home'		=> '首頁大圖',
'news/lists?type=47'		        => 'NEWS',
'news/lists?type=640&cate=sup'		=> 'FAQ-Devices',
'news/lists?type=644&cate=sup'		=> 'FAQ-Masks',
'news/lists?type=641&cate=sup'		=> 'Download-Catalogue',
'news/lists?type=645&cate=sup'		=> 'Download-Manual',
'news/lists?type=655&cate=sup'		=> 'Download-Software',
'news/lists?type=642&cate=sup'		=> 'Video',
'news/lists?type=643&cate=sup'		=> 'Health Sleep',
'news/lists?type=646'		=> 'Promotion',
'news/lists?type=648'		=> 'Dealers',
'news/lists?type=647'		=> 'Partners'
);

// deterines whether to use this configuration below or the database for controlling the blogs behavior
$config['crawleruse_db_table_settings'] = TRUE;

// the cache folder to hold blog cache files
$config['news'] = 'news';

$config['tables']['mod_news'] = 'mod_news';


$config['news_javascript'] = array(
    site_url().'assets/admin_js/jquery.js',
    site_url().'assets/admin_js/bootstrap.min.js', 
	site_url().'assets/admin_js/jquery-ui.min.js',
);

$config['news_ck_javascript'] = array(
    site_url().'assets/admin_js/ckeditor.js',
    site_url().'assets/admin_js/adapters/jquery.js',  
);

$config['news_css'] = array(
	site_url().'assets/admin_css/bootstrap.min.css',
	site_url().'assets/admin_css/style.css',
	site_url().'assets/admin_css/style-responsive.css'
	// site_url().'assets/admin_css/datepicker.css'
);

?>