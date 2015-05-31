<?php
class Series extends CI_Controller {

	function __construct()
	{
		parent::__construct(); 
		$this->load->model('code_model');
	}


	function devices()
	{	
		$lang_code = $this->uri->segment(1);
		 
		$vars['views'] = 'devices';		    
		$vars['css'] = site_url()."assets/templates/css/product_main.css"; 
		$vars['menu'] = "devices"; 
		// $vars['not_show_footer'] = true;
		$this->fuel->pages->render("index",$vars);
	}

	function ich()
	{	
		$lang_code = $this->uri->segment(1);
		 
		$vars['views'] = 'ich';		    
		$vars['css'] = site_url()."assets/templates/products/css/ich.css"; 
		$vars['menu'] = "devices"; 
		// $vars['not_show_footer'] = true;
		$vars['layout'] = 'main2';

		$this->fuel->pages->render("index",$vars);
	}

	function xt()
	{	
		$lang_code = $this->uri->segment(1);
		 
		$vars['views'] = 'xt';		    
		$vars['css'] = site_url()."assets/templates/products/css/xt.css"; 
		$vars['menu'] = "devices"; 
		// $vars['not_show_footer'] = true;
		$vars['layout'] = 'main2';
		$this->fuel->pages->render("index",$vars);
	}

	function masks()
	{	
		$lang_code = $this->uri->segment(1);
		 
		$vars['views'] = 'masks';		    
		$vars['css'] = site_url()."assets/templates/css/product_main.css"; 
		$vars['menu'] = "masks"; 
		// $vars['not_show_footer'] = true;
		$this->fuel->pages->render("index",$vars);
	}

	function w210()
	{	
		$lang_code = $this->uri->segment(1);
		 
		$vars['views'] = 'w210';		    
		$vars['css'] = site_url()."assets/templates/products/css/w210.css"; 
		$vars['menu'] = "masks"; 
		// $vars['not_show_footer'] = true;
		$vars['layout'] = 'main2';
		$this->fuel->pages->render("index",$vars);
	}

	function w220()
	{	
		$lang_code = $this->uri->segment(1);
		 
		$vars['views'] = 'w220';		    
		$vars['css'] = site_url()."assets/templates/products/css/w220.css"; 
		$vars['menu'] = "masks"; 
		// $vars['not_show_footer'] = true;
		$vars['layout'] = 'main2';
		$this->fuel->pages->render("index",$vars);
	}

	function w230()
	{	
		$lang_code = $this->uri->segment(1);
		 
		$vars['views'] = 'w230';		    
		$vars['css'] = site_url()."assets/templates/products/css/w230.css"; 
		$vars['menu'] = "masks"; 
		// $vars['not_show_footer'] = true;
		$vars['layout'] = 'main2';
		$this->fuel->pages->render("index",$vars);
	}

	function product($id){
		$lang_code = $this->uri->segment(1);
		$product = $this->code_model->get_product($id);
		// print_r($product);
		$series_ary = explode(';',$product->level_id);
		// print_r($series_ary);
		$series = $this->code_model->get_series_info($series_ary[0]);
		 
		$vars['views'] = 'product';		   
		$vars['product'] = $product;		   
		$vars['series'] = $series;	     
		$vars['css'] = site_url()."assets/templates/css/product_page.css";
		$this->fuel->pages->render("index",$vars);
	}

	 
	
}