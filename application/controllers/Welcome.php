<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// public function __construct() {
 //        parent::__construct();

 //        $user_id = $this->session->userdata('u_id');

 //        if ($user_id != NULL) {
 //            redirect('Panel', 'refresh');
 //        }
 //    }


	//Log-in Page
	public function index()
	{

		$this->load->helper(array('form', 'url'));
    	$this->load->library('form_validation');
		$data = array();
        $data['master'] = $this->load->view('signup/login-form', '', true);
		$this->load->view('signup/login',$data);
	}

	//Sign-Up Page
	public function newAccount() {
        $data = array();
        $data['master'] = $this->load->view('signup/signup-form', '', true);
        $this->load->view('signup/login', $data);
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
			            redirect('Panel');
                     }
                }
    }

}
