<?php
class News_front extends CI_Controller {

	function __construct()
	{
		parent::__construct(); 
		$this->load->model('code_model'); 
	} 

	// function index()
	// {	
	// 	$lang_code = $this->uri->segment(1);
	// 	$vars['views'] = 'news';		    
	// 	// $vars['css'] = site_url()."assets/templates/css/news.css";
	// 	// $news_list = $this->code_model->get_news_list(47,$lang_code); 
	// 	// $vars['news_list'] =  $news_list;
	// 	$vars['feature_photo'] = $this->code_model->get_feature_photo('News_photo');
	// 	$this->fuel->pages->render("index",$vars);
	// }

	function index($dataStart){
		$this->load->library('pagination');
		$type = '47'; 
		fuel_set_var('page_id', "1");
		$lang_code = $this->uri->segment(1);		
		$target_url = base_url().$lang_code.'/news/';	
		if ($dataStart == 1) {
            $dataStart = 0;
        }
		$total_rows = $this->code_model->get_news_count($lang_code, $type);
		$dataLen = 10;
		$config = $this->set_page->set_front_end_config($target_url, $total_rows, $dataStart, $dataLen);		
		$dataLen = $config['per_page'];
		$this->pagination->initialize($config);
		$results = $this->code_model->get_news_list($dataStart, $dataLen,$lang_code, $type);
		$code = $this->code_model->get_code_detail($type);		
		$vars['code'] = $code;	
		$vars['type'] = $type;	
		$vars['lang_code'] = $lang_code;	
		$vars['dataStart'] = $dataStart+1;
		$vars['views'] = 'news';		
		$vars['menu'] = 'support';    
		// $vars['css'] = site_url()."assets/templates/css/healthsleep.css"; 
		$vars['results'] = $results;
		$vars['page_jump'] = $this->pagination->create_links();
		$this->fuel->pages->render("index",$vars);
	}

	function news_detail($news_id){		 
		$vars['news'] = $this->code_model->get_news_detail($news_id); 
		$vars['views'] = 'news_detail';		
		$vars['menu'] = 'support';    
		// $vars['css'] = site_url()."assets/templates/css/infopage.css"; 
		$this->fuel->pages->render("index",$vars);
	}
	 
	
}