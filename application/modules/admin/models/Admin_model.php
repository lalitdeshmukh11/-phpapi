<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends CI_Model {
    
    /* Check user login and set session */
    function isLogin($data, $table){
        $email  = $data["email"];
        // check if e-mail address is well-formed
        $where  = array('email'=>$data['email']);
        $sql    = $this->db->select('*')->where($where)->get($table);
        if($sql->num_rows()){
            $user = $sql->row();
            //verify password- It is good to use php's password hashing functions so we are using password_verify fn here
            if(password_verify($data['password'],$user->password)){
                $session_data['id']             = $user->id ;
                $session_data['fullName']       = $user->name ;
                $session_data['email']          = $user->email ;
                $session_data['isLogin']        = TRUE ;
                $_SESSION[ADMIN_USER_SESS_KEY]  = $session_data;
                return TRUE;
            }else{
                return FALSE; 
            }
        }  
       return FALSE;
    }//End Function 

    // Return count of records  
    public function countData($table,$cond)
    {
        if($cond!='')
            $this->db->where($cond);

        $this->db->from($table);

        $total = $this->db->count_all_results();

        return $total;
    }//end function      
}//End Class