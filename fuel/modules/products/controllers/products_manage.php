<?php
require_once(FUEL_PATH.'/libraries/Fuel_base_controller.php');

class Products_manage extends Fuel_base_controller {
	public $view_location = 'products';
	public $nav_selected = 'products/manage';
	public $module_name = 'products manage';
	public $module_uri = 'fuel/products/lists';
	function __construct()
	{
		parent::__construct();
		$this->_validate_user('products/manage');
		$this->load->module_model(PRODUCTS_FOLDER, 'products_manage_model');
		$this->load->module_model(CODEKIND_FOLDER, 'codekind_manage_model');
		$this->load->helper('ajax');
		$this->load->library('pagination');
		$this->load->library('set_page');
		$this->load->library('session');		
		$this->load->library('comm');
	}
	
	function lists($dataStart=0)
	{
		$base_url = base_url();

		$type_id = $this->input->get_post('type'); 
		$search_type_id = $this->input->get_post('search_type_id'); 
		$search_lang = $this->input->get_post('search_lang'); 
		$Keyword = $this->input->get_post('Keyword'); 

		
		$filter = " WHERE 1=1  "; 

		// if (!empty($search_serial)) {
		// 	$this->session->set_userdata('search_serial', $search_serial);
		// }else {
		// 	$search_serial = $this->session->userdata('search_serial'); 
		// } 

		if ($search_type_id != "") {
			$this->session->set_userdata('search_type_id', $search_type_id);
		}else{
			if (!isset($search_type_id) ) {
				$search_type_id = $this->session->userdata('search_type_id'); 
				if ($search_type_id != "") {
					$search_type_id = $search_type_id;
				} 
			}else{
				$this->session->set_userdata('search_type_id', "");
			}					
		}

		// if (!empty($search_lang)) {
		// 	$this->session->set_userdata('search_lang', $search_lang);
		// }else {
		// 	$search_lang = $this->session->userdata('search_lang'); 			
		// } 

		if ($search_lang != "") { 
			$this->session->set_userdata('search_lang', $search_lang);
		}else{
			if (!isset($search_lang) ) {
				$search_lang = $this->session->userdata('search_lang'); 
				if ($search_lang != "") {
					$search_lang = $search_lang; 
				} 
			}else{
				$this->session->set_userdata('search_lang', "");
			}					
		}

		// if (!empty($Keyword)) {
		// 	$this->session->set_userdata('Keyword', $Keyword);
		// }else {
		// 	$Keyword = $this->session->userdata('Keyword'); 			
		// } 
		if ($Keyword != "") {
			$this->session->set_userdata('Keyword', $Keyword);
		}else{
			if (!isset($Keyword) ) {
				$Keyword = $this->session->userdata('Keyword'); 
				if ($Keyword != "") {
					$Keyword = $Keyword;
				} 
			}else{
				$this->session->set_userdata('Keyword', "");
			}					
		}

		if ($type_id == '657') {//mask 
			$type = $this->codekind_manage_model->get_code_detail_by_parent_id('657');
			$vars['type'] = $type;
			// if (!empty($search_type_id)) {				
				$filter .= " AND a.type_id = '$search_type_id' ";
			// }
		}else{//device
			$filter .= " AND a.type_id = '656' ";
		}


		// print_r($filter);
		if (isset($Keyword ) && !empty($Keyword )) {
			$filter .= " AND (a.title like '%$Keyword%' || a.sub_title like '%$Keyword%')  ";

		}

		$target_url = $base_url.'fuel/products/lists/';

		$total_rows = $this->products_manage_model->get_total_rows($filter);
		$config = $this->set_page->set_config($target_url, $total_rows, $dataStart, 1000);
		$dataLen = $config['per_page'];
		$this->pagination->initialize($config); 

		$results = $this->products_manage_model->get_products_list($dataStart, $dataLen,$filter);

	 
		// $type = $this->codekind_manage_model->get_code_list_for_other_mod("NEWSTYPE");
		$lang = $this->codekind_manage_model->get_code_list_for_other_mod("LANG_CODE");
		$vars['lang'] = $lang;

		

		// if (isset($results)) {
		// 	foreach ($results as $key => $value) {
		// 		$l_id = explode(';', $value->level_id);
		// 		$level_str = "";
		// 		foreach ($l_id as $key2) {
		// 			$series_row = $this->codekind_manage_model->get_codekind_list(0,1,"WHERE code_id='$key2'","mod_code");
		// 			// print_r($series_row);
		// 			$level_str .= $series_row[0]->code_name."-";
		// 		} 
	 // 			$value->level_str = $search_serial."-".rtrim($level_str,'-');
		// 	}
		// }
		

		// print_r($results);
		// die;
		// $vars['type'] = $type;
		$vars['Keyword'] = $Keyword;
		$vars['type_id'] = $type_id;
		$vars['search_type_id'] = $search_type_id;
		$vars['search_lang'] = $search_lang;
		$vars['total_rows'] = $total_rows; 
		$vars['form_action'] = $base_url.'fuel/products/lists?type='.$type_id;
		$vars['form_method'] = 'POST';
		$crumbs = array($this->module_uri => $this->module_name);
		$this->fuel->admin->set_titlebar($crumbs);

		$vars['page_jump'] = $this->pagination->create_links();
		$vars['create_url'] = $base_url.'fuel/products/create?type='.$type_id;
		$vars['edit_url'] = $base_url.'fuel/products/edit/';
		$vars['del_url'] = $base_url.'fuel/products/del/';
		$vars['multi_del_url'] = $base_url.'fuel/products/do_multi_del';
		$vars['results'] = $results;
		$vars['total_rows'] = $total_rows; 
		$vars['CI'] = & get_instance();

		$this->fuel->admin->render('_admin/products_lists_view', $vars);

	}

	function get_prod_order($lang,$serial_key)
	{ 
		$total_rows = $this->products_manage_model->get_total_rows(" WHERE 1=1 AND lang='$lang' AND serial_key='$serial_key' ");
		// echo $total_rows;
		// die;
		$result = array();
		if(is_ajax())
		{
			$result['total_rows'] = $total_rows +1;
			echo json_encode($result);
		}
	}

 
	function create()
	{
		$type_id = $this->input->get_post('type'); 
		$vars['form_action'] = base_url().'fuel/products/do_create';
		$vars['form_method'] = 'POST';
		$crumbs = array($this->module_uri => $this->module_name);
		$this->fuel->admin->set_titlebar($crumbs);		

		$vars['module_uri'] = base_url().$this->module_uri;
		$vars['view_name'] = "新增";

		if ($type_id == '657') {//mask 
			$type = $this->codekind_manage_model->get_code_detail_by_parent_id('657');
			$vars['type'] = $type;
			$vars['type_name'] = 'mask';
		}else{
			$vars['type_name'] = 'device';
		}

		
		$lang = $this->codekind_manage_model->get_code_list_for_other_mod("LANG_CODE");
		$vars['lang'] = $lang;

 

		$this->fuel->admin->render("_admin/products_create_view", $vars);
	}

	function do_create()
	{
		$post_arr = $this->input->post(); 
		$module_uri = base_url().$this->module_uri;

		if ($post_arr["type_name"] == 'mask') {
			$module_uri .= '?type=657';
		}

		
		// print_r($post_arr);
// die;
		// if (isset($post_arr["series_4"]) && $post_arr["series_4"] != "") { 
		// 	$post_arr["serial_key"] = $post_arr["series_4"];
		// }else if (isset($post_arr["series_3"]) && $post_arr["series_3"] != "" ) { 
		// 	$post_arr["serial_key"] = $post_arr["series_3"];
		// }else if (isset($post_arr["series_2"]) && $post_arr["series_2"] != "" ) { 
		// 	$post_arr["serial_key"] = $post_arr["series_2"];
		// }

		// $level_id = "";
		// if (isset($post_arr["series_2"]) && $post_arr["series_2"] != "") {
		// 	$level_id .= $post_arr["series_2"].';';
		// }
		// if (isset($post_arr["series_3"]) && $post_arr["series_3"] != "") {
		// 	$level_id .= $post_arr["series_3"].';';
		// }
		// if (isset($post_arr["series_4"]) && $post_arr["series_4"] != "") {
		// 	$level_id .= $post_arr["series_4"].';';
		// }
		$post_arr["section1"] = htmlspecialchars($post_arr["section1"]);
		$post_arr["section2"] = htmlspecialchars($post_arr["section2"]);
		$post_arr["section3"] = htmlspecialchars($post_arr["section3"]);
		$post_arr["section4"] = htmlspecialchars($post_arr["section4"]);
		$post_arr["section5"] = htmlspecialchars($post_arr["section5"]);
		$post_arr["section6"] = htmlspecialchars($post_arr["section6"]);
		$post_arr["section7"] = htmlspecialchars($post_arr["section7"]);
		$post_arr["section8"] = htmlspecialchars($post_arr["section8"]);

		// $post_arr["detail"] = htmlspecialchars($post_arr["detail"]);

		//調整順序
		// $lang = $post_arr["lang"];
		// $type_id = $post_arr["type_id"];
		
		// $total_rows = $this->products_manage_model->get_total_rows(" WHERE 1=1 AND lang='$lang' AND serial_key='$serial_key' ");
		// if ($post_arr['prod_order'] > $total_rows + 1) {
		// 	$post_arr['prod_order'] = $total_rows + 1;
		// }else if($post_arr['prod_order'] < 1){
		// 	$post_arr['prod_order'] = 1;
		// }else{
		// 	$this->products_manage_model->did_insert_order_modify($post_arr['prod_order'],$post_arr);
		// }
        
		$success = $this->products_manage_model->insert($post_arr);  

		if($success)
		{ 
			$id = $this->products_manage_model->get_last_insert_id(); 
			$root_path = assets_server_path("prod_img/$id/");


			if (!file_exists($root_path)) {
			    mkdir($root_path, 0777, true);
			}
			 
			$module_uri = base_url().$this->module_uri;
			 
			$post_arr = $this->input->post();
			$config['upload_path'] = $root_path;
			$config['allowed_types'] = 'png|jpg|jpeg';
			$config['max_size']	= '9999999';
			// $config['max_width']  = '1024';
			// $config['max_height']  = '768';

			$this->load->library('upload',$config); 

			$updateAry = array();
			$updateAry["id"] = $id;
			if ($this->upload->do_upload('img'))
			{
				$data = array('upload_data'=>$this->upload->data()); 
				$updateAry["img"] = "prod_img/$id/".$data["upload_data"]["file_name"];
			} else{ 
				$updateAry["img"] = '';				 
			} 
			// if ($this->upload->do_upload('img2'))
			// {
			// 	$data = array('upload_data'=>$this->upload->data()); 
			// 	$updateAry["img2"] = "prod_img/$id/".$data["upload_data"]["file_name"];
			// } else{ 
			// 	$updateAry["img2"] = '';				 
			// } 
			// if ($this->upload->do_upload('img3'))
			// {
			// 	$data = array('upload_data'=>$this->upload->data()); 
			// 	$updateAry["img3"] = "prod_img/$id/".$data["upload_data"]["file_name"];
			// } else{ 
			// 	$updateAry["img3"] = '';				 
			// } 
			// if ($this->upload->do_upload('img4'))
			// {
			// 	$data = array('upload_data'=>$this->upload->data()); 
			// 	$updateAry["img4"] = "prod_img/$id/".$data["upload_data"]["file_name"];
			// } else{ 
			// 	$updateAry["img4"] = '';				 
			// } 

			// $config['upload_path'] = $root_path;
			// $config['allowed_types'] = '*';
			// $config['max_size']	= '9999';
			// $config['max_width']  = '0';
			// $config['max_height']  = '0';

			// $this->upload->initialize($config);

			// if ($this->upload->do_upload('category_url'))
			// {
			// 	$data = array('upload_data'=>$this->upload->data()); 
			// 	$updateAry["category_url"] = "prod_img/$id/".$data["upload_data"]["file_name"];
			// } else{ 
			// 	$updateAry["category_url"] = '';				 
			// } 
			$this->products_manage_model->update_file($updateAry); 

			$this->comm->plu_redirect($module_uri, 0, "新增成功");
			die();
		}
		else
		{
			$this->comm->plu_redirect($module_uri, 0, "新增失敗");
			die();
		}
		return;
	}

	 
	function edit($id)
	{ 
		$product;
		if(isset($id))
		{
			$product = $this->products_manage_model->get_product_detail($id);
		} 

		if(!isset($id) || !isset($product))
		{
			$this->comm->plu_redirect(base_url().'fuel/products/lists', 0, "找不到資料");
			die;
		}


		$module_uri = base_url().$this->module_uri;
		

		// $serial_key_info = $this->codekind_manage_model->get_code_detail($product->serial_key);
		// $vars["series_1"] = $serial_key_info->codekind_key; 

		// $series_ary = array();
		// array_push($series_ary,$serial_key_info->code_id);

		// for ($i=0; true; $i++) { 
		// 	if ($serial_key_info->parent_id == -1) {
		// 		break;
		// 	}
		// 	$serial_key_info = $this->codekind_manage_model->get_code_detail($serial_key_info->parent_id);
		// 	array_push($series_ary,$serial_key_info->code_id);
		// }

		// $j=2;
		// for ($i=sizeof($series_ary)-1; $i >=0 ; $i--) { 
		// 	 // echo $series_ary[$i];
		// 	 $vars["series_$j"] = $series_ary[$i];
		// 	 $j++;
		// }
		


		// print_r($vars);
		// die; 
		if ($product->type_id != '656') { 

			$type = $this->codekind_manage_model->get_code_detail_by_parent_id('657');
			$vars['type'] = $type;
			$vars['type_name'] = 'mask';
		 
		 
			$module_uri .= '?type=657';			
			$vars['form_action'] = base_url()."fuel/products/do_edit/$id?type=657";
		}else{			
			$vars['form_action'] = base_url()."fuel/products/do_edit/$id";
			$vars['type_name'] = 'device';
		}

		$vars['form_method'] = 'POST';
		$crumbs = array($this->module_uri => $this->module_name);
		$this->fuel->admin->set_titlebar($crumbs);	 

		$lang = $this->codekind_manage_model->get_code_list_for_other_mod("LANG_CODE");
		$vars['lang'] = $lang;

	    $vars['product'] = $product; 
		$vars['module_uri'] = base_url().$this->module_uri;
	 
		$vars["view_name"] = "修改";
		$this->fuel->admin->render('_admin/products_edit_view', $vars);
	}

	function do_edit($id)
	{ 
		$post_arr = $this->input->post(); 

		$post_arr["id"] = $id;

		$post_arr["section1"] = htmlspecialchars($post_arr["section1"]);
		$post_arr["section2"] = htmlspecialchars($post_arr["section2"]);
		$post_arr["section3"] = htmlspecialchars($post_arr["section3"]);
		$post_arr["section4"] = htmlspecialchars($post_arr["section4"]);
		$post_arr["section5"] = htmlspecialchars($post_arr["section5"]);
		$post_arr["section6"] = htmlspecialchars($post_arr["section6"]);
		$post_arr["section7"] = htmlspecialchars($post_arr["section7"]);
		$post_arr["section8"] = htmlspecialchars($post_arr["section8"]);

		$module_uri = base_url().$this->module_uri;

		if ($post_arr["type_name"] == 'mask') {
			$module_uri .= '?type=657';
		}


		$root_path = assets_server_path("prod_img/$id/");

		if (!file_exists($root_path)) {
		    mkdir($root_path, 0777, true);
		}

		$config['upload_path'] = $root_path;
		$config['allowed_types'] = 'png|jpg|jpeg';
		$config['max_size']	= '9999999';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';

		$this->load->library('upload',$config); 

	 
		if ($this->upload->do_upload('img'))
		{
			$data = array('upload_data'=>$this->upload->data()); 
			$post_arr["img"] = "prod_img/$id/".$data["upload_data"]["file_name"];
		} else{ 
			$post_arr["img"] = $post_arr["exist_img"];	
			if (isset($post_arr["img_delete"])) {
			 	$post_arr["img"] = '';
			 	unlink(assets_server_path()."/".$post_arr["exist_img"]);
			}			 
		} 
	  

		$success = $this->products_manage_model->update($post_arr); 
		
		if($success)
		{  
			$this->comm->plu_redirect($module_uri, 0, "更新成功");
			die();
		}
		else
		{
			$this->comm->plu_redirect($module_uri, 0, "更新失敗");
			die();
		}
		return;
	} 

	function do_multi_del(){
		$result = array();

		$ids = $this->input->get_post("ids");


		if($ids)
		{
			$im_ids = implode(",", $ids);
			// $result['im_ids'] = $im_ids;

			$success = $this->products_manage_model->do_multi_del($im_ids);
		}
		else
		{
			$success = false;
		}



		if(isset($success))
		{
			$result['status'] = 1;
		}
		else
		{
			$result['status'] = $ids;
		}


		if(is_ajax())
		{
			echo json_encode($result);
		}
	} 

	function do_del($id)
	{
		$response = array();
		if(!empty($id))
		{
			$success = $this->products_manage_model->del($id);

			if($success)
			{
				$response['status'] = 1;
			}
			else
			{
				$response['status'] = -1;
			}
		}
		else
		{
			$response['status'] = -1;
		}

		echo json_encode($response);
	}

	// function plu_redirect($url, $delay, $msg)
	// {
	//     if( isset($msg) )
	//     {
	//         $this->notify($msg);
	//     }

	//     echo "<meta http-equiv='Refresh' content='$delay; url=$url'>";
	// }

	// function notify($msg)
	// {
	//     $msg = addslashes($msg);
	//     echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />";
	//     echo "<script type='text/javascript'>alert('$msg')</script>\n";
	//     echo "<noscript>$msg</noscript>\n";
	//     return;
	// }

	function get_series($codekind_key,$lang_code,$parent_id)
	{
		$response = $this->codekind_manage_model->get_series_menu($codekind_key,$lang_code,$parent_id); ;
		 
		echo json_encode($response);
	} 

}