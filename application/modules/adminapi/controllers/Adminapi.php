<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//General service API class 
class Adminapi extends Common_Admin_Controller{
    
    public function __construct(){
        parent::__construct();
        $this->load->helper('url','form');
        $this->load->helper('common');
        $this->load->model('adminapi_model');
        //error_reporting(0);
    }
    
    function partners_get(){
        $partner     = $this->get('partner');
        if($partner =='a')
            $this->adminapi_model->create('requests', array('partner'=>$partner));
        else
            $this->adminapi_model->create('requests', array('partner'=>$partner));

        $data['countA'] = $this->adminapi_model->countData('requests', array('partner'=>'a'));
        $data['countO'] = $this->adminapi_model->countData('requests', array('partner !='=>'a'));
        $data['countT'] = $this->adminapi_model->countData('requests', array('partner !='=>''));
        
        $response = array('status' => SUCCESS, 'count' => $data);  
        $this->response($response);
    }

    function partnersCount_get(){
        $partner    = $this->get('partner');
        if($partner =='all'){
            $data['countA'] = $this->adminapi_model->countData('requests', array('partner'=>'a'));
            $data['countO'] = $this->adminapi_model->countData('requests', array('partner !='=>'a'));
            $data['countT'] = $this->adminapi_model->countData('requests', array('partner !='=>''));
        }
        $response = array('status' => SUCCESS, 'count' => $data); 
        $this->response($response);
    }

    function login_post(){
        $this->form_validation->set_rules('email','Email','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
        if($this->form_validation->run() == FALSE)
        {
            $response = array('status' => FAIL, 'message' => strip_tags(validation_errors()));
            $this->response($response);
        }else{
            $authtoken              = $this->adminapi_model->generate_token();
            $data                   = array();
            $data['email']          = $this->post('email');
            $data['password']       = $this->post('password');
            $data['authToken']      = $authtoken;
            $result                 = $this->adminapi_model->login($data,$authtoken);
            if(is_array($result)){
                switch ($result['returnType']) {
                    case "SL":
                        $this->storeSession($result['userInfo']);
                        $response = array('status' => SUCCESS, 'message' => ResponseMessages::getStatusCodeMessage(106), 'users' => $result['userInfo']);
                    break;
                    case "WP":
                        $response = array('status' => FAIL, 'message' => ResponseMessages::getStatusCodeMessage(102));
                    break;
                    case "WE":
                        $response = array('status' => FAIL, 'message' => ResponseMessages::getStatusCodeMessage(126));
                    break;
                    case "IU":
                        $response = array('status' => FAIL, 'message' => ResponseMessages::getStatusCodeMessage(118));
                    break;
                    case "WS":
                        $response = array('status' => FAIL, 'message' => ResponseMessages::getStatusCodeMessage(118));
                    break;
                    default:
                        $response = array('status' => SUCCESS, 'message' => ResponseMessages::getStatusCodeMessage(106), 'users' => $result['userInfo']);
                }
            }else{
                $response = array('status' => FAIL, 'message' => ResponseMessages::getStatusCodeMessage(126));
            } 
            $this->response($response);
        }
    } 

    // Session store value for frontEnd
    function storeSession($userData){
        $session_data['id']             = $userData['id'];
        $session_data['userId']         = $userData['id'];
        $session_data['fullName']       = $userData['name'];
        $session_data['email']          = $userData['email'];
        $session_data['userType']       = 1;
        $session_data['isActive']       = $userData['status'];
        $session_data['isLogin']        = TRUE ;
        //  pr( $session_data);
        $_SESSION[ADMIN_USER_SESS_KEY]  = $session_data;   
        return TRUE;
    }

    function logout_post() {
        unset($_SESSION[ADMIN_USER_SESS_KEY]); 
        $this->session->set_flashdata('success', 'Sign out successfully done! ');
        $response = array('status' => 'success','message'=>'Sign out successfully done!');
        $this->response($response);
    }

}//End Class 