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


		$device = $this->code_model->get_code_detail(656);
    	$device->products = $this->code_model->get_products_list($device->code_id);
		 
		$vars['device'] = $device;	
		$vars['views'] = 'devices';		    
		$vars['feature_photo'] = $this->code_model->get_feature_photo('Device_Photo');
		// $vars['css'] = site_url()."assets/templates/css/product_main.css"; 
		$vars['menu'] = "devices"; 
		// $vars['not_show_footer'] = true;
		$this->fuel->pages->render("index",$vars);
	}

	function device($id){
		$lang_code = $this->uri->segment(1);		 
		$vars['views'] = 'product';		    
		$vars['product'] = $this->code_model->get_product($id);
		// $vars['css'] = site_url()."assets/templates/css/product_main.css"; feature
		$vars['feature'] = 'devices';		 
		$vars['menu'] = "devices"; 
		$vars['layout'] = "product_main"; 
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

		$mask = $this->code_model->get_code_detail(657);

	    $mask_menu = $this->code_model->get_mask_menu();

	    foreach ($mask_menu as $key => $value) {
	    	$value->products = $this->code_model->get_products_list($value->code_id);
	    }
	    
		$vars['mask_menu'] = $mask_menu;	
		 
		$vars['mask'] = $mask;	
		$vars['views'] = 'masks';		    

		$vars['feature_photo'] = $this->code_model->get_feature_photo('MASK_Photo');
		// $vars['css'] = site_url()."assets/templates/css/product_main.css"; 
		$vars['menu'] = "masks"; 
		// $vars['not_show_footer'] = true;
		$this->fuel->pages->render("index",$vars);
	}

	function mask($id)
	{	
		$lang_code = $this->uri->segment(1);		 
		$vars['views'] = 'product';		    
		// $vars['css'] = site_url()."assets/templates/css/product_main.css"; feature
		$vars['product'] = $this->code_model->get_product($id);
		$vars['feature'] = 'masks';		 
		$vars['menu'] = "devices"; 
		$vars['layout'] = "product_main"; 
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