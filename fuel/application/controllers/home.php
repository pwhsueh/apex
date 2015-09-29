<?php
class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct(); 
		$this->load->model('code_model');  
		
		$this->load->library('comm');
	}

	function home() 
	{
		parent::Controller(); 
	} 

	function index()
	{	
		$lang_code = $this->uri->segment(1);
		$vars['views'] = 'home';
		// $vars['css'] = site_url()."assets/templates/css/index.css";
 		$results = $this->code_model->get_news_list(0,100,$lang_code,46); 
 		$vars['results'] = $results;
		$vars['base_url'] = base_url();
		$vars['menu'] = ""; 
		$this->fuel->pages->render("index", $vars);	 
	}

	function privacy(){
		$vars['views'] = 'privacy';
		$vars['menu'] = ""; 
		$this->fuel->pages->render("index", $vars);
		$vars['menu'] = "devices"; 
	}

	function tou(){
		$vars['views'] = 'tou';
		$vars['menu'] = ""; 
		$this->fuel->pages->render("index", $vars);
	}

	function location(){
		$vars['views'] = 'location';
		$vars['menu'] = "wheretobuy"; 
		$vars['css'] = site_url()."assets/templates/css/location.css";
		$this->fuel->pages->render("index", $vars);
	}
	
	 
}