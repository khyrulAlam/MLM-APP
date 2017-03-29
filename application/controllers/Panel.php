<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $u_id = $this->session->userdata('u_id');

        if ($u_id != NULL) {
            redirect('Welcome', 'refresh');
        }
    }

    public function index() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('panel/user-profile', $data, true);
        $this->load->view('pages/home', $data);
    }


    public function logout() {
        $this->session->unset_userdata('u_id');
        redirect('Welcome');
    }
}