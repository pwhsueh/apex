<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contact_manage_model extends MY_Model {
	
	function __construct()
	{
		$CI =& get_instance();
		$CI->config->module_load(CONTACT_FOLDER, CONTACT_FOLDER);
		$tables = $CI->config->item('tables');
		parent::__construct($tables['mod_contact']); // table name
	}

	public function get_total_rows($filter="")
	{
		$sql = @"SELECT COUNT(*) AS total_rows FROM mod_contact a 
		 left join mod_code b on a.country = b.code_id $filter";
		$query = $this->db->query($sql);

		if($query->num_rows() > 0)
		{
			$row = $query->row();

			return $row->total_rows;
		}

		return 0;
	}

	public function get_contact_list($dataStart, $dataLen, $filter)
	{
		$sql = @"SELECT a.*,b.code_name AS country FROM mod_contact  a 
		 left join mod_code b on a.country = b.code_id $filter ORDER BY id DESC LIMIT $dataStart, $dataLen";
	
		$query = $this->db->query($sql);

		if($query->num_rows() > 0)
		{
			$result = $query->result();

			return $result;
		}

		return;
	} 

	public function get_contact_by_id($id)
	{
		$sql = @"SELECT * FROM mod_contact WHERE id='$id' ";
	
		$query = $this->db->query($sql);

		if($query->num_rows() > 0)
		{
			$result = $query->row();

			return $result;
		}

		return;
	} 

	public function get_country($filter=""){
        $sql = @"select * from mod_code where codekind_key = 'COUNTRY' and parent_id = -1 $filter ORDER BY code_value1";
        $query = $this->db->query($sql);
        //echo $sql;exit;
        if($query->num_rows() > 0)
        {
            $result = $query->result();

            return $result;
        }
    }

	function get_export_list($filter){
		$col_name = array("fisrtname","lastname","company","department","position","country","address","city","state","zipcode","email","contact","subject","message");
		
		 $sql = @"select  fisrtname,
		 lastname,
		 company,
		 department,
		 position,
		 b.code_name AS country, 
		 address,
		 city,
		 state,
		 zipcode,
		 email,
		 contact,
		 website AS subject,
		 message
		 from mod_contact a left join mod_code b on a.country = b.code_id $filter ORDER BY id desc";
        $query = $this->db->query($sql);
        // echo $sql;exit;
        // die;
        if($query->num_rows() > 0)
        {
            $result = $query->result();

            return $result;
        }
	}
 
	
}