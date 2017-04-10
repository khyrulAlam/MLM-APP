<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $u_id = $this->session->userdata('u_id');
        if ($u_id == NULL) {
            redirect('Welcome', 'refresh');
        }
    }
//User Panel
    public function index() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('upanel/user-profile', $data, true);
        $this->load->view('upanel/home', $data);
    }
// APPLY FOR PIN PAGE
    public function applyForPin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('upanel/apply-for-pin', $data, true);
        $this->load->view('upanel/home', $data);
    }
//SELLING PIN PAGE
    public function sellingPin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('upanel/selling-pin', $data, true);
        $this->load->view('upanel/home', $data);
    }
//USER TREE
    public function userTree(){
        //$src_One=$this->U_Model->user_info($user_id);
        //$senior=$src_One->scr_pin_lo;
        $data = array();
        $data['all_user_info'] =$this->W_Model->all_user_info();
        $data['master'] = $this->load->view('upanel/user-tree', $data, true);
        $this->load->view('upanel/home', $data);
    }

//LOG-OUT    
    public function logout() {
        $this->session->unset_userdata('u_id');
        redirect('Website');
    }
}