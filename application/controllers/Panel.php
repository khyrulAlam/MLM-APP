<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

    // public function __construct() {
    //     parent::__construct();

    //     $user_id = $this->session->userdata('u_id');

    //     if ($user_id == NULL) {
    //         redirect('Welcome', 'refresh');
    //     }
    // }

    public function index() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        if($data['user']->u_access==1){
          	$data['master'] = $this->load->view('panel/welcome', $data, true);
	        $this->load->view('panel/admin_panel', $data);
        }else{
          $data['master'] = $this->load->view('panel/user-profile', $data, true);
          $this->load->view('pages/home', $data);
        }
    }

    public function A_Sell(){
    	$user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->U_Model->user_info($user_id);
        $data['master'] = $this->load->view('pages/a_sellingpin', $data, true);
        $this->load->view('pages/home', $data);
    }
}