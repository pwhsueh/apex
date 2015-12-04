<?php
class Support extends CI_Controller {

	function __construct()
	{
		parent::__construct(); 
		$this->load->library('set_page');
		$this->load->model('code_model'); 
	}  

	function faq($dataStart){
		// $this->load->library('pagination');
		// $type = $this->input->get_post('type'); 
		// fuel_set_var('page_id', "1");
		// $lang_code = $this->uri->segment(1);		
		// $target_url = base_url().$lang_code.'/faq/';	
		// if ($dataStart == 1) {
  //           $dataStart = 0;
  //       }
		// $total_rows = $this->code_model->get_news_count($lang_code, $type);
		// $dataLen = 999;
		// $config = $this->set_page->set_front_end_config($target_url, $total_rows, $dataStart, $dataLen);		
		// $dataLen = $config['per_page'];
		// $this->pagination->initialize($config);
		// $results = $this->code_model->get_news_list($dataStart, $dataLen,$lang_code, $type);
		// $code = $this->code_model->get_code_detail($type);		
		// $vars['code'] = $code;	
		// $vars['type'] = $type;	
		// $vars['menu'] = 'support'; 
		// $vars['lang_code'] = $lang_code;	
		// $vars['dataStart'] = $dataStart+1;
		// $vars['views'] = 'faq';		    
		// $vars['css'] = site_url()."assets/templates/css/faq.css"; 
		// $vars['results'] = $results;
		// $vars['page_jump'] = $this->pagination->create_links();
		// $this->fuel->pages->render("index",$vars);

		$lang_code = $this->uri->segment(1);		
		// $target_url = base_url().$lang_code.'/faq/';	

		$typeDevice = 640;
		$typeMask = 644;
		   
		$resultsDevice = $this->code_model->get_news_list(0, 999,$lang_code, $typeDevice);
		$resultsMask = $this->code_model->get_news_list(0, 999,$lang_code, $typeMask);
		$codeDevice = $this->code_model->get_code_detail($typeDevice);		
		$codeMask = $this->code_model->get_code_detail($typeMask);	
		$vars['codeDevice'] = $codeDevice;	
		$vars['codeMask'] = $codeMask;
		$vars['resultsDevice'] = $resultsDevice;
		$vars['resultsMask'] = $resultsMask;
		$vars['feature_photo'] = $this->code_model->get_feature_photo('FAQ_Photo');
		// $vars['type'] = $type;	
		$vars['menu'] = 'support'; 
		$vars['lang_code'] = $lang_code;	
		// $vars['dataStart'] = $dataStart+1;
		$vars['views'] = 'faq';		    
		// $vars['css'] = site_url()."assets/templates/css/faq.css"; 
		// $vars['results'] = $results;
		// $vars['page_jump'] = $this->pagination->create_links();
		$this->fuel->pages->render("index",$vars);
	}

	function download($dataStart){
		// $this->load->library('pagination');
		// $type = $this->input->get_post('type'); 
		// fuel_set_var('page_id', "1");
		// $lang_code = $this->uri->segment(1);		
		// $target_url = base_url().$lang_code.'/download/';	

		// if ($dataStart == 1) {
  //           $dataStart = 0;
  //       }

		// $total_rows = $this->code_model->get_news_count($lang_code, $type);
		// $dataLen = 10;//$config['per_page'];
		// $config = $this->set_page->set_front_end_config($target_url, $total_rows, $dataStart, $dataLen);		
		
		// $this->pagination->initialize($config);
		// $results = $this->code_model->get_news_list($dataStart, $dataLen,$lang_code, $type);


		// $code = $this->code_model->get_code_detail($type);		
		// $vars['code'] = $code;	
		// $vars['type'] = $type;	
		// $vars['lang_code'] = $lang_code;	
		// $vars['dataStart'] = $dataStart+1;
		// $vars['views'] = 'download';	
		// $vars['feature_photo'] = $this->code_model->get_feature_photo('Download_photo');
		// $vars['menu'] = 'support';	    
		// // $vars['css'] = site_url()."assets/templates/css/download.css"; 
		// $vars['results'] = $results;
		// $vars['page_jump'] = $this->pagination->create_links();
		// $this->fuel->pages->render("index",$vars);
		$lang_code = $this->uri->segment(1);		
		// $target_url = base_url().$lang_code.'/faq/';	

		$typeCatalogue = 641;
		$typeManual = 645;
		$typeSoftware = 655;
		   
		$resultsCatalogue = $this->code_model->get_news_list(0, 999,$lang_code, $typeCatalogue);
		$resultsManual = $this->code_model->get_news_list(0, 999,$lang_code, $typeManual);
		$resultsSoftware = $this->code_model->get_news_list(0, 999,$lang_code, $typeSoftware);

		$codeCatalogue = $this->code_model->get_code_detail($typeCatalogue);		
		$codeManual = $this->code_model->get_code_detail($typeManual);	
		$codeSoftware = $this->code_model->get_code_detail($typeSoftware);	

		$vars['codeCatalogue'] = $codeCatalogue;	
		$vars['codeManual'] = $codeManual;
		$vars['codeSoftware'] = $codeSoftware;

		$vars['resultsCatalogue'] = $resultsCatalogue;
		$vars['resultsManual'] = $resultsManual;
		$vars['resultsSoftware'] = $resultsSoftware;
		// $vars['type'] = $type;	
		$vars['menu'] = 'support'; 
		$vars['feature_photo'] = $this->code_model->get_feature_photo('Download_photo');
		$vars['lang_code'] = $lang_code;	
		// $vars['dataStart'] = $dataStart+1;
		$vars['views'] = 'download';		    
		// $vars['css'] = site_url()."assets/templates/css/faq.css"; 
		// $vars['results'] = $results;
		// $vars['page_jump'] = $this->pagination->create_links();
		$this->fuel->pages->render("index",$vars);
	}

	function healthsleep($dataStart){
		$this->load->library('pagination');
		$type = '643'; 
		fuel_set_var('page_id', "1");
		$lang_code = $this->uri->segment(1);		
		$target_url = base_url().$lang_code.'/healthsleep/';	
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
		$vars['views'] = 'healthsleep';		 
		$vars['menu'] = 'support';   
		// $vars['css'] = site_url()."assets/templates/css/healthsleep.css"; 
		$vars['results'] = $results;
		$vars['page_jump'] = $this->pagination->create_links();
		$this->fuel->pages->render("index",$vars);
	}

	function healthsleep_detail($news_id){		 
		$vars['news'] = $this->code_model->get_news_detail($news_id); 
		$vars['views'] = 'healthsleep_detail';		    
		$vars['css'] = site_url()."assets/templates/css/infopage.css"; 
		$this->fuel->pages->render("index",$vars);
	}

	function news($dataStart){
		$this->load->library('pagination');
		$type = '47'; 
		fuel_set_var('page_id', "1");
		$lang_code = $this->uri->segment(1);		
		$target_url = base_url().$lang_code.'/news/';	
		if ($dataStart == 1 || empty($dataStart)) {
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
		$vars['feature_photo'] = $this->code_model->get_feature_photo('News_photo');
		// $vars['css'] = site_url()."assets/templates/css/healthsleep.css"; 
		$vars['results'] = $results;
		$vars['page_jump'] = $this->pagination->create_links();
		$this->fuel->pages->render("index",$vars);
	}

	function news_detail($news_id){		 
		$vars['news'] = $this->code_model->get_news_detail($news_id); 
		$vars['views'] = 'news_detail';		
		$vars['menu'] = 'support';    
		$vars['feature_photo'] = $this->code_model->get_feature_photo('News_photo');
		// $vars['css'] = site_url()."assets/templates/css/infopage.css"; 
		$this->fuel->pages->render("index",$vars);
	}

	function video($dataStart){
		$this->load->library('pagination');
		$type = '642'; 
		fuel_set_var('page_id', "1");
		$lang_code = $this->uri->segment(1);		
		$target_url = base_url().$lang_code.'/video/';	
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
		$vars['views'] = 'video';
		$vars['menu'] = 'support';		 
		$vars['file_path'] = base_url()."assets/";   
		// $vars['css'] = site_url()."assets/templates/css/video.css"; 
		// $vars['css2'] = site_url()."assets/templates/css/video-js.css"; 
		$vars['js'] = site_url()."assets/templates/js/video.js"; 
		$vars['results'] = $results;
		$vars['page_jump'] = $this->pagination->create_links();
		$this->fuel->pages->render("index",$vars);
	}

	function promotion($dataStart){
		$this->load->library('pagination');
		$type = '646'; 
		fuel_set_var('page_id', "1");
		$lang_code = $this->uri->segment(1);		
		$target_url = base_url().$lang_code.'/promotion/';	
		if ($dataStart == 1) {
            $dataStart = 0;
        }
		$total_rows = $this->code_model->get_news_count($lang_code, $type);
		$dataLen = 9;
		$config = $this->set_page->set_front_end_config($target_url, $total_rows, $dataStart, $dataLen);		
		$dataLen = $config['per_page'];
		$this->pagination->initialize($config);
		$results = $this->code_model->get_news_list($dataStart, $dataLen,$lang_code, $type);
		$code = $this->code_model->get_code_detail($type);		
		$vars['code'] = $code;	
		$vars['type'] = $type;	
		$vars['lang_code'] = $lang_code;	
		$vars['dataStart'] = $dataStart+1;
		$vars['views'] = 'promotion';	
		$vars['menu'] = 'wheretobuy';

		// $vars['css'] = site_url()."assets/templates/css/promotion.css"; 
		$vars['results'] = $results;
		$vars['page_jump'] = $this->pagination->create_links();
		$this->fuel->pages->render("index",$vars);
	}
	
}