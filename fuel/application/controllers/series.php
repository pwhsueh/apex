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
 
    	if (!isset($device->products) || sizeof($device->products) <= 0) {
    		$device->products = array();
    	}

    	$xt = new stdClass();
	    $xt->id = 'xt';
	    $xt->img = '/templates/img/apex/ich_1.png';
	    array_push($device->products, $xt);

	    $ich = new stdClass();
	    $ich->id = 'ich';
	    $ich->img = '/templates/img/apex/xt.png';
	    array_push($device->products, $ich);
		 
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
		$vars['layout'] = "product_main2"; 
		// $vars['not_show_footer'] = true;
		$this->fuel->pages->render("index",$vars);
	}

	function ich()
	{	
		$lang_code = $this->uri->segment(1);
		 
		$vars['views'] = 'ich';		    
		// $vars['css'] = site_url()."assets/templates/products/css/ich.css"; 
		$vars['menu'] = "devices"; 
		// $vars['not_show_footer'] = true;
		$vars['layout'] = "product_main"; 

		$this->fuel->pages->render("index",$vars);
	}

	function xt()
	{	
		$lang_code = $this->uri->segment(1);
		 
		$vars['views'] = 'xt';		    
		// $vars['css'] = site_url()."assets/templates/products/css/xt.css"; 
		$vars['menu'] = "devices"; 
		// $vars['not_show_footer'] = true;
		$vars['layout'] = "product_main"; 
		$this->fuel->pages->render("index",$vars);
	}

	function masks()
	{	
		$lang_code = $this->uri->segment(1);

		$mask = $this->code_model->get_code_detail(657);

	    $mask_menu = $this->code_model->get_mask_menu();

	    // $wArray = array();
	    // $products = array();

	    // $w210 = new stdClass();
	    // $w210->id = 'w210';
	    // $w210->img = '';

	    // array_push($wArray, $w210);

	    // $w220 = new stdClass();
	    // $w220->id = 'w220';
	    // $w220->img = '';

	    // array_push($wArray, $w220);

	    // $w230 = new stdClass();
	    // $w230->id = 'w230';
	    // $w230->img = '';

	    // array_push($wArray, $w230);

	    // $products = array_merge($wArray, $products);

	    foreach ($mask_menu as $key => $value) {
	    	$value->products = array();// $this->code_model->get_products_list($value->code_id); 
	    	$product_list = $this->code_model->get_products_list($value->code_id); 
	    	if (isset($product_list) && sizeof($product_list) > 0) {
	    		$value->products = $product_list;
	    	}
	    	if ($value->code_id == '658') 
            {            	
			    $w210 = new stdClass();
			    $w210->id = 'w210';
			    $w210->img = '/templates/img/apex/nm.png';
			    array_push($value->products, $w210);
            }else if($value->code_id == '659')  
            {
			    $w220 = new stdClass();
			    $w220->id = 'w220';
			    $w220->img = '/templates/img/apex/ffm.png';
			    array_push($value->products, $w220);
            }else if($value->code_id == '660')  
            {
			    $w230 = new stdClass();
			    $w230->id = 'w230';
			    $w230->img = '/templates/img/apex/npm.png';
			    array_push($value->products, $w230);
            }
                                
	    	// $products = array_merge($products, $productlist);
	    }

	    // $value->products = $products;
	    // print_r($mask_menu);
	    // die;
	    
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
		$vars['layout'] = "product_main2"; 
		// $vars['not_show_footer'] = true;
		$this->fuel->pages->render("index",$vars);
	}

	function w210()
	{	
		$lang_code = $this->uri->segment(1);
		 
		$vars['views'] = 'w210';		    
		// $vars['css'] = site_url()."assets/templates/products/css/w210.css"; 
		$vars['menu'] = "masks"; 
		// $vars['not_show_footer'] = true;
		$vars['layout'] = "product_main"; 
		$this->fuel->pages->render("index",$vars);
	}

	function w220()
	{	
		$lang_code = $this->uri->segment(1);
		 
		$vars['views'] = 'w220';		    
		// $vars['css'] = site_url()."assets/templates/products/css/w220.css"; 
		$vars['menu'] = "masks"; 
		// $vars['not_show_footer'] = true;
		$vars['layout'] = "product_main"; 
		$this->fuel->pages->render("index",$vars);
	}

	function w230()
	{	
		$lang_code = $this->uri->segment(1);
		 
		$vars['views'] = 'w230';		    
		// $vars['css'] = site_url()."assets/templates/products/css/w230.css"; 
		$vars['menu'] = "masks"; 
		// $vars['not_show_footer'] = true;
		$vars['layout'] = "product_main"; 
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
		// $vars['css'] = site_url()."assets/templates/css/product_page.css";
		$this->fuel->pages->render("index",$vars);
	}

	 
	
}