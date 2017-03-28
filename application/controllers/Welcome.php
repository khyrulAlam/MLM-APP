<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
                	
                     redirect('Welcome');
                }
                else
                {
                        
			    	$name = $this->input->post('user_email');
			    	$password = $this->input->post('user_pass');

			    	echo $name . ' '. $password;
			    	exit();
                }
    }

}
