<?php
/**
* Web service model
* Handles web service request
* version: 2.0 ( 14-08-2018 )
*/
class Adminapi_model extends CI_Model {
	
    /**
     * Generate auth token for API users
     * Modified in version 2.0
    */
    function generate_token(){
        $this->load->helper('security');
        $res     = do_hash(time().mt_rand());
        $new_key = substr($res,0,config_item('rest_key_length'));
        return $new_key;

    }//End function
    
	/*
	Function for check provided token is resultid or not
	*/
	function isValidToken($authToken,$table = 'admin')
	{
        $this->db->select('*');
        $this->db->where('authToken',$authToken);
        $sql = $this->db->get($table);
        //echo $this->db->last_query();die;
        if($sql->num_rows() > 0)
        {
            return $sql->row();
        }
		return false;
	}//end function 
    
    function login($data,$authToken){
        $res = $this->db->select('*')->where(array('email'=>$data['email']))->get(ADMIN);
        if($res->num_rows()){
            $result = $res->row();
            if($result->status == 1)
            {
                //verify password- It is good to use php's password hashing functions so we are using password_verify fn here
                if(md5($data['password']) == $result->password){
                    return array('returnType'=>'SL','userInfo'=>$res->row_array()); 
                }else{
                    return array('returnType'=>'WP'); // Wrong Password
                }
            }
            return array('returnType'=>'WS');
                // InActive
        }else {
            return array('returnType'=>'WE'); // Wrong Email
        }
    }//End users Login  

    // Creat function  
    function create($table,$data,$retrieveFields='id')
    {
        $data['createdAt'] = (isset($data['createdAt'])) ? $data['createdAt'] :time();

        if($this->db->insert($table,$data))
        {
            if($retrieveFields=='id')
            {
                $this->return = $this->db->insert_id();
            }
        }
        else
        {
            $this->return = FALSE;
        }       

        return $this->return;
    }//end function

    // Get data OR read data function 
    public function read($table,$condition,$retrieveFields='id',$orderBy='',$inOrder='DESC')
    {
        //$db2 = $this->load->database('database2', TRUE);
        $this->db->select($retrieveFields);
        $this->db->where($condition);
        $this->db->from($table);
        
        if($orderBy =='')
            $this->db->order_by('createdAt','desc');
        else
            $this->db->order_by($orderBy,$inOrder);
        
        $data = $this->db->get();

        if($data->num_rows()>0)
            $this->return = $data->result_array();
        else
            $this->return = [];

        return $this->return;
    }//end function

    // Return count of records  
    public function countData($table,$cond)
    {
        if($cond!='')
            $this->db->where($cond);

        $this->db->from($table);

        $total = $this->db->count_all_results();

        return $total;
    }//end function  

}//ENd Class
