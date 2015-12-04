<?php
class Wheretobuy extends CI_Controller {

	function __construct()
	{
		parent::__construct(); 
		$this->load->library('set_page');
		$this->load->model('code_model'); 
	}  

	function dealer(){
		$lang_code = $this->uri->segment(1);	
		$vars['views'] = 'location';
		$vars['menu'] = "wheretobuy"; 
		// $vars['css'] = site_url()."assets/templates/css/location.css";
		$typeDealer = 648;
		$typeParter = 647;
		   
		$resultsDealer = $this->code_model->get_news_list(0, 999,$lang_code, $typeDealer);
		$resultsParter = $this->code_model->get_partner_list();
		 
		$vars['resultsDealer'] = $resultsDealer;	
		$vars['resultsParter'] = $resultsParter;
		$vars['search_keyword'] = '';
		$vars['islocation'] = 'y';	

		$this->fuel->pages->render("index", $vars);
	}

	function promotion(){
		 
		$type = '646'; 
	 
		$lang_code = $this->uri->segment(1);		
	 
	 
		$results = $this->code_model->get_news_list(0,999,$lang_code, $type);
		 
		$vars['type'] = $type;	
		$vars['lang_code'] = $lang_code;	 
		$vars['feature_photo'] = $this->code_model->get_feature_photo('Promotion_photo');
		$vars['views'] = 'promotion';	
		$vars['menu'] = 'wheretobuy';	
		$vars['islocation'] = 'y';	

		// $vars['css'] = site_url()."assets/templates/css/promotion.css"; 
		$vars['results'] = $results;
		// $vars['page_jump'] = $this->pagination->create_links();
		$this->fuel->pages->render("index",$vars);
	}

	function search_partner(){
		$lang_code = $this->uri->segment(1);	

		$search_keyword = $this->input->get_post('search_keyword'); 

		$vars['views'] = 'location';
		$vars['menu'] = "wheretobuy"; 
		// $vars['css'] = site_url()."assets/templates/css/location.css";
		$typeDealer = 648;
		$typeParter = 647;
		    
		$resultsDealer = $this->code_model->get_news_list(0, 999,$lang_code, $typeDealer);

		$resultsParter = $this->code_model->get_partner_list($search_keyword);
		 
		$vars['resultsDealer'] = $resultsDealer;	
		$vars['resultsParter'] = $resultsParter;	
		$vars['search_keyword'] = $search_keyword;
		$vars['islocation'] = 'y';	

		$this->fuel->pages->render("index", $vars);
	}

	
	
}