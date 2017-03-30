<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $u_id = $this->session->userdata('u_id');

        if ($u_id != NULL) {
            redirect('S_panel', 'refresh');
        }
    }


	//Log-in Page
	public function index()
	{

		$this->load->helper(array('form', 'url'));
    	$this->load->library('form_validation');
		$data = array();
        $data['master'] = $this->load->view('signup/login-form', '', true);
		$this->load->view('signup/login',$data);
	}

// Password Check Function
    public function password_check($str)
	{
	   if ( preg_match('#[0-9]#', $str) && preg_match('#[A-Z]#', $str) && preg_match('#[a-z]#', $str ) ) {
	     return TRUE;
	   }
	   return FALSE;
	}

    public function login(){

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('user_email', 'Email', 'required');
    	$this->form_validation->set_rules('user_pass', 'Password', 'trim|required|min_length[8]|alpha_numeric|callback_password_check');

    	if ($this->form_validation->run() == FALSE)
        {
        	$mdata = array();
            $mdata['login_failed'] = "Please Enter Valid Email id And Password.";
            $this->session->set_userdata($mdata);
             redirect('Welcome');
        }
        else
        {
	    	$user_email = $this->input->post('user_email');
	        $user_pass = $this->input->post('user_pass');
	        $user_info = $this->W_Model->login_check($user_email, $user_pass);
             if($user_info == FALSE){
             	$mdata = array();
	            $mdata['login_failed'] = "Your enter email id and Password not found.<br/> Please Enter Valid Email id And Password.";
	            $this->session->set_userdata($mdata);
	            redirect('Welcome');
             }else{
             	$user_id = array();
	            $user_id['u_id'] = $user_info->u_id;
	            $this->session->set_userdata($user_id);
	            if($user_info->u_access == 1){
	            	redirect('S_Panel');
	            }else{
	            	redirect('Panel');
	            }
             }
	    }
    }


	//Sign-Up Page
	public function newAccount() {
        $data = array();
        $data['master'] = $this->load->view('signup/signup-form', '', true);
        $this->load->view('signup/login', $data);
    }


    public function level_one_check($level_one_pin=NULL){
    	if ($level_one_pin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
            return;
        } else {
            $result = $this->C_Model->level_onepin_check_info($level_one_pin);
            if ($result) {
                echo '';
            } else {
                echo 'Your input PIN not correct ! Please Enter a valid pin code';
            }
        }
    }


    public function createNewAccount(){
    	$level_one_pin = $this->input->post('level_one_pin');
    	$check = $this->C_Model->level_onepin_check_info($level_one_pin);
        if($check == NULL){
        	$data=array();
        	$data['pin_mess'] = "Your input PIN not correct ! Please Enter a valid pin code";
        	$this->session->set_userdata($data);
        	redirect('Welcome/newAccount');
        } else {
	    	$data = array();
	    	$data['u_name']= $this->input->post('u_name');
	    	$data['u_father_name']= $this->input->post('u_father_name');
	    	$data['u_email']= $this->input->post('u_email');
	    	$data['u_nid']= $this->input->post('u_nid');
	    	$data['u_birth']= $this->input->post('u_birth');
	    	$data['u_mobile']= $this->input->post('u_mobile');
	    	$data['u_gender']= $this->input->post('u_gender');
	    	$data['u_address']= $this->input->post('u_address');
	    	$data['u_password']= md5($this->input->post('u_password'));
	    	$data['u_img']= $this->input->post('u_img');
	    	$data['level_one_pin']= $this->input->post('level_one_pin');
	    	$data['senior_id']= $this->session->userdata('senior_id');
	    	$data['senior_name']= $this->session->userdata('senior_name');
	    	$data['u_entry_date']= $this->input->post('u_entry_date');

	    	echo '<pre>';
	    	print_r($data);
	    	exit();
    	}

    }

}
