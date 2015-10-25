<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sup_manage_model extends MY_Model {
	
	function __construct()
	{
		$CI =& get_instance();
		$CI->config->module_load(SUP_FOLDER, SUP_FOLDER);
		$tables = $CI->config->item('tables');
		parent::__construct($tables['mod_partner']); // table name
	}

	public function get_total_rows($filter="")
	{
		$sql = @"SELECT COUNT(*) AS total_rows  FROM mod_partner a $filter ";
		$query = $this->db->query($sql);

		if($query->num_rows() > 0)
		{
			$row = $query->row();

			return $row->total_rows;
		}

		return 0;
	}

	public function get_sup_list($dataStart, $dataLen, $filter="")
	{
		$sql = @"SELECT * FROM mod_partner a  $filter  LIMIT $dataStart, $dataLen";
	
		$query = $this->db->query($sql);

		if($query->num_rows() > 0)
		{
			$result = $query->result();

			return $result;
		}

		return;
	}

	public function get_sup_detail($id){
		$sql = @"SELECT * FROM mod_partner where id='$id' LIMIT 1 ";
	
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
		$sql = @"INSERT INTO mod_partner (
											`title`,
											lat,
											lng,
											address1,
											address2,
											tel								 
										) 
				VALUES ( ?, ? ,?, ? , ? ,?)"; 

		$para = array(
				$insert_data['title'], 
				$insert_data['lat'], 
				$insert_data['lng'],
				$insert_data['address1'],
				$insert_data['address2'],
				$insert_data['tel']
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
		$sql = @"UPDATE mod_partner SET title 	= ?,
									lat      	= ?,
									lng 	    = ?,
									address1 	= ?,
									address2 	= ?,
									tel 	    = ?
									 
				WHERE id = ?";
		$para = array(
				$update_data['title'],  
				$update_data['lat'], 
				$update_data['lng'],  
				$update_data['address1'],  
				$update_data['address2'],  
				$update_data['tel'],
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
		$sql = @"UPDATE mod_partner SET  img   = ? ,
								     file_url  = ? 
				WHERE id = ?";
		$para = array( 
				$update_data['img'], 
				$update_data['file_url'], 
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
		$sql = @"DELETE FROM  mod_partner WHERE id in ($ids) ";

		// $para = array($ids);
		$success = $this->db->query($sql);

		return $success;
	}

	public function del($id)
	{
		$sql = @"DELETE FROM mod_partner WHERE id = ?";
		 
		$para = array($id);
		$success = $this->db->query($sql, $para);

		if($success)
		{
			return true;
		}

		return;
	} 
	  
	
}