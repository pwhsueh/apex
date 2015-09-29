<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products_manage_model extends MY_Model {
	
	function __construct()
	{
		$CI =& get_instance();
		$CI->config->module_load(PRODUCTS_FOLDER, PRODUCTS_FOLDER);
		$tables = $CI->config->item('tables');
		parent::__construct($tables['mod_products']); // table name
	}

	public function get_total_rows($filter="")
	{
		$sql = @"SELECT COUNT(*) AS total_rows FROM mod_products a left join mod_code b on a.type_id = b.code_id $filter ";
		$query = $this->db->query($sql);

		if($query->num_rows() > 0)
		{
			$row = $query->row();

			return $row->total_rows;
		}

		return 0;
	}

	public function get_products_list($dataStart, $dataLen, $filter="")
	{
		$sql = @"SELECT a.*,b.code_name FROM mod_products a left join mod_code b on a.type_id = b.code_id
 		$filter  ORDER BY `type_id` DESC ,`prod_order` LIMIT $dataStart, $dataLen";
	
		$query = $this->db->query($sql);

		if($query->num_rows() > 0)
		{
			$result = $query->result();

			return $result;
		}

		return;
	}

	public function get_product_detail($id){
		$sql = @"SELECT * FROM mod_products where id='$id' LIMIT 1 ";
	
		$query = $this->db->query($sql);

		if($query->num_rows() > 0)
		{
			$row = $query->row();

			return $row;
		}

		return;
	}
 

	public function insert($insert_data)
	{
		$sql = @"INSERT INTO mod_products (
											type_id,
											title, 
											sub_title, 
											section1,   
											section2,
											section3,
											section4,   
											section5,
											section6,
											section7,
											section8,
											lang,
											prod_order										 
										) 
				VALUES ( ?, ?, ?, ?, ?,?,?, ?,?,?,?,?)"; 

		$para = array(
				$insert_data['type_id'], 
				$insert_data['title'], 
				$insert_data['sub_title'],
				$insert_data['section1'],  
				$insert_data['section2'],
				$insert_data['section3'],
				$insert_data['section4'],
				$insert_data['section5'],
				$insert_data['section6'],
				$insert_data['section7'],
				$insert_data['section8'],
				$insert_data['lang'],
				$insert_data['prod_order']
			);
		$success = $this->db->query($sql, $para);

		if($success)
		{
			return true;
		}

		return;
	}

	public function update($update_data)
	{ 
		$sql = @"UPDATE mod_products SET 
										`type_id` 	= ?,
										`title` 	= ?, 
										sub_title = ?, 
										section1 = ?, 
										section2 = ?, 
										section3 = ?, 
										section4 = ?, 
										section5 = ?, 
										section6 = ?, 
										section7 = ?, 
										section8 = ?, 									
										lang	= ?,
										prod_order = ?,
										img = ?
									 
				WHERE id = ?";
		$para = array(
				$update_data['type_id'], 
				$update_data['title'], 
				$update_data['sub_title'],
				$update_data['section1'],
				$update_data['section2'],
				$update_data['section3'],
				$update_data['section4'],
				$update_data['section5'],
				$update_data['section6'],
				$update_data['section7'],
				$update_data['section8'],
				$update_data['lang'],
				$update_data['prod_order'],
				$update_data['img'],
				$update_data['id']
			);
		$success = $this->db->query($sql, $para);
 
		 
		if($success)
		{
			return true;
		}

		return;
	} 

	public function update_file($update_data)
	{
		$sql = @"UPDATE mod_products SET  img    = ?	
				WHERE id = ?";
		$para = array( 
				$update_data['img'],
				$update_data['id']
			);
		$success = $this->db->query($sql, $para);
 
		 
		if($success)
		{
			return true;
		}

		return;
	} 

	public function get_last_insert_id(){
		$sql = "SELECT last_insert_id() as ID";
        $id_result= $this->db->query($sql);
        return $id_result->row()->ID;  ;
	}

	public function do_multi_del($ids){
		$sql = @"DELETE FROM  mod_products WHERE id in ($ids) ";

		// $para = array($ids);
		$success = $this->db->query($sql);

		return $success;
	}

	public function del($id)
	{
		$sql = @"DELETE FROM mod_products WHERE id = ?";
		 
		$para = array($id);
		$success = $this->db->query($sql, $para);

		if($success)
		{
			return true;
		}

		return;
	} 

	public function delete_order($record)
	{
		$sql = @"UPDATE mod_products SET prod_order = prod_order - 1 WHERE prod_order >= ? AND serial_key=? AND  lang=? ";
		$para = array( 
			$record->prod_order,
			$record->serial_key,
			$record->lang
		);  
		$success = $this->db->query($sql, $para); 
		if($success)
		{
			return true;
		} 
		return; 
	} 

	public function did_insert_order_modify($num ,$update_data)
	{
		$sql = @"UPDATE mod_products SET prod_order = prod_order + 1 WHERE prod_order >= $num AND serial_key=? AND  lang=? ";
		$para = array( 
			$update_data['serial_key'], 
			$update_data['lang'], 
		);  
		$success = $this->db->query($sql, $para); 
		if($success)
		{
			return true;
		} 
		return; 
	}  
	public function get_order($data)
	{
		$sql = @"SELECT * FROM mod_products WHERE serial_key = ? AND lang = ? AND prod_order = ?";  
		$para = array( 
			$data['serial_key'], 
			$data['lang'], 
			$data['prod_order']
		);
		$query = $this->db->query($sql, $para);  
		if($query->num_rows() > 0)
		{
			$row = $query->row();

			return $row;
		}
		return;
	} 

	public function update_order($prod_order,$id)
	{
		$sql = @"UPDATE mod_products SET prod_order = '$prod_order' WHERE id = $id ";  
	 	 
		$success = $this->db->query($sql);  
		if($success)
		{
			return true;
		} 
		return;
	} 
	  
	
}