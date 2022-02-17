<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Common_Back_Controller {

    public $data = "";

    function __construct() {
        parent::__construct();
        $this->check_admin_user_session();
        $this->load->model('admin_model');
        error_reporting(0);
      //  $this->load->model('admin_model');
    }//End Function

    public function dashboard() 
    {
        $data['parent']     = "Dashboard";
        $data['title']      = 'Dashboard';
       
        $data['front_styles'] = array('https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css');

        $data['countA'] = $this->admin_model->countData('requests', array('partner'=>'a'));
        $data['countO'] = $this->admin_model->countData('requests', array('partner !='=>'a'));
        $data['countT'] = $this->admin_model->countData('requests', array('partner !='=>''));

        $data['front_scripts'] = array('backend_assets/custom/dashboard.js'); 
        
        $this->load->admin_render('dashboard', $data, '');
    }//End Function

    public function signup() { 
        $data['title'] = "Sign up";
        $this->load->login_render('signup', $data);
    }//End Function

    public function forgot() { 
        $data['title'] = "Forgot";
        $this->load->login_render('forgot', $data);
    }//End Function

    public function logout() {
        $this->admin_logout(FALSE);
        $this->session->set_flashdata('success', 'Sign out successfully done! ');
        $response = array('status' => 'success','message'=>'Sign out successfully done!');
        ///redirect(base_url());
        echo json_encode($response);
        die;
    }//End Function

    

}//End Class