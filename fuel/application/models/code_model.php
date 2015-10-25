<?php
class Code_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

     public function get_lang_list(){
        $sql = @"select * from mod_code where codekind_key = 'LANG_CODE' 
        and code_value3 = 'Y'   ";
        $query = $this->db->query($sql);
        //echo $sql;exit;
        if($query->num_rows() > 0)
        {
            $result = $query->result();

            return $result;
        }
    }

    public function get_code($codekind_key,$lang_code,$parent_id=-1,$filter=""){
        $sql = @"select * from mod_code where codekind_key = '$codekind_key' 
        and parent_id = $parent_id and lang_code = '$lang_code' $filter
        order by `lang_code`,`code_value2`,`code_value3` ,`code_key`  ";
        $query = $this->db->query($sql);
        //echo $sql;exit;
        if($query->num_rows() > 0)
        {
            $result = $query->result();

            return $result;
        }
    }

    public function get_series_menu($codekind_key,$lang_code,$parent_id=-1){
        // $sql = @"select * from mod_code where codekind_key = '$codekind_key' and parent_id = $parent_id and lang_code = '$lang_code' ";
        // $query = $this->db->query($sql);
        // //echo $sql;exit;
        // if($query->num_rows() > 0)
        // {
        //     $result = $query->result();

        //     return $result;
        // }
        return $this->get_code($codekind_key,$lang_code,$parent_id);
    }

    public function get_country(){
        return $this->get_code('COUNTRY','zh-TW');
    }

    public function get_country_info($code_id){
        $sql = @"select * from mod_country 
        where  country_id like '%;$code_id;%' ";
        $query = $this->db->query($sql);
        
        if($query->num_rows() > 0)
        {
            $result = $query->result();

            return $result;
        }
    }

    public function get_code_detail($code_id){
        $sql = @"select * from mod_code where code_id = '$code_id'  ";
        $query = $this->db->query($sql);
        //echo $sql;exit;
        if($query->num_rows() > 0)
        {
            $row = $query->row();

            return $row;
        }
    }

    public function get_series_sub_detail($parent_id){
        $sql = @"select * from mod_code where parent_id  = '$parent_id' order by code_value3 ";
        $query = $this->db->query($sql);
        //echo $sql;exit;
        if($query->num_rows() > 0)
        {
            $result = $query->result();

            return $result;
        }
    }

    public  function get_mask_menu(){
        return $this->get_series_sub_detail('657');
    }

    public function get_code_info($codekind_key,$code_key){
        $sql = @"select * from mod_code where codekind_key='$codekind_key' and code_key='$code_key' order by code_value3 ";
        $query = $this->db->query($sql);
        //echo $sql;exit;
        if($query->num_rows() > 0)
        {
            $result = $query->result();

            return $result;
        }
    }

    public function get_feature_photo($code_key){
         $result = $this->get_code_info('FeaturePhoto',$code_key);
         
        if(sizeof($result)>0)
        {
            return $result[0]->img;
        }
    }

    // public function get_news_list($type,$lang){
    //     $sql = @"select * from mod_news where type='$type' and lang='$lang' order by `news_order` ";
    //     $query = $this->db->query($sql);
    //     //echo $sql;exit;
    //     if($query->num_rows() > 0)
    //     {
    //         $result = $query->result();

    //         return $result;
    //     }
    // }

    public function get_products_list($type_id){
        $sql = @"select * from mod_products where type_id  = '$type_id' order by `prod_order` ";
        $query = $this->db->query($sql);
        //echo $sql;exit;
        if($query->num_rows() > 0)
        {
            $result = $query->result();

            return $result;
        }
    }

    public function get_product($id){
        $sql = @"select * from mod_products where id  = '$id' ";
        $query = $this->db->query($sql);
        //echo $sql;exit;
        if($query->num_rows() > 0)
        {
            $row = $query->row();

            return $row;
        }
    }

    public function get_support($type_code_key,$lang_code){
        $sql = @"select * from mod_code where code_key='$type_code_key' and lang_code = '$lang_code'  ";
        $query = $this->db->query($sql);
        //echo $sql;exit;
        if($query->num_rows() > 0)
        {
            $row = $query->row();

            return $row;
        }
    }

    public function get_support_list($type){ 
        $sql = @"select * from mod_sup where type = '$type' ";
        $query = $this->db->query($sql);
        //echo $sql;exit;
        if($query->num_rows() > 0)
        {
            $result = $query->result();

            return $result;
        }
    }

    public function insert_mod_contact($insert_data){
        $sql = @"INSERT INTO mod_contact (
                                            fisrtname, 
                                            lastname,
                                            company,
                                            department, 
                                            position,   
                                            country,
                                            address,
                                            city,
                                            state,
                                            zipcode,
                                            email,
                                            contact,
                                            website,
                                            message,
                                            lang,
                                            modi_date                                       
                                        ) 
                VALUES ( ?, ?, ?, ?, ?,?, ?,?,?,?,?,?,?,?,?,NOW())"; 

        $para = array(
                isset($insert_data['fisrtname'])?$insert_data['fisrtname']:"", 
                isset($insert_data['lastname'])?$insert_data['lastname']:"", 
                isset($insert_data['company'])?$insert_data['company']:"", 
                isset($insert_data['department'])?$insert_data['department']:"", 
                isset($insert_data['position'])?$insert_data['position']:"",   
                isset($insert_data['country'])?$insert_data['country']:"", 
                isset($insert_data['address'])?$insert_data['address']:"", 
                isset($insert_data['city'])?$insert_data['city']:"", 
                isset($insert_data['state'])?$insert_data['state']:"", 
                isset($insert_data['zipcode'])?$insert_data['zipcode']:"", 
                isset($insert_data['email'])?$insert_data['email']:"", 
                isset($insert_data['contact'])?$insert_data['contact']:"", 
                isset($insert_data['website'])?$insert_data['website']:"", 
                isset($insert_data['message'])?$insert_data['message']:"", 
                isset($insert_data['lang'])?$insert_data['lang']:""
            );
        $success = $this->db->query($sql, $para);

        if($success)
        {
            return true;
        }

        return;
    }

    public function get_partner_list($search_keyword = ""){         
       
       if (!empty($search_keyword)) {
           $sql = @"select * from mod_partner a where  (a.tel like '%$search_keyword%' OR a.title like '%$search_keyword%' OR a.address1 like '%$search_keyword%' OR a.address2 like '%$search_keyword%') ";

       }else{
           $sql = @"select * from mod_partner ";

       }
         
        
        $query = $this->db->query($sql);
        // echo $sql;//exit;
        if($query->num_rows() > 0)
        {
            $result = $query->result();

            return $result;
        }
    }

     public function get_partner_keyword($search_keyword){         
         
         
        $sql = @"select * from mod_partner a where (a.tel like '%$search_keyword%' OR a.title like '%$search_keyword%' OR a.address1 like '%$search_keyword%' OR a.address2 like '%$search_keyword%')";
        $query = $this->db->query($sql);
        // echo $sql;//exit;
        if($query->num_rows() > 0)
        {
            $result = $query->result();

            return $result;
        }
    }

    public function get_news_count($lang,$type ){ 
        $sql = @"select count(*) AS total from mod_news where type = '$type' and lang='$lang'";
        $query = $this->db->query($sql);
        //echo $sql;exit;
        if($query->num_rows() > 0)
        {
            $row = $query->row();
            return $row->total;
        }
    }

    public function get_news_detail($news_id ){ 
        $sql = @"select * from mod_news where id = $news_id";
        $query = $this->db->query($sql);
        //echo $sql;exit;
        if($query->num_rows() > 0)
        {
            $row = $query->row();
            return $row;
        }
    }

    public function get_news_list($dataStart, $dataLen, $lang,$type ,$filter = "",$orderby="news_order"){         
        $from = $dataStart;
        
        $to = $dataStart+$dataLen;
        $sql = @"select * from mod_news where type = '$type' and lang='$lang' AND news_order <> -99 $filter order by $orderby limit $from,$to ";
        $query = $this->db->query($sql);
        // echo $sql;//exit;
        if($query->num_rows() > 0)
        {
            $result = $query->result();

            return $result;
        }
    }

}