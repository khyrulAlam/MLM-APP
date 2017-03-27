<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//Log-in Page
	public function index()
	{
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


}
