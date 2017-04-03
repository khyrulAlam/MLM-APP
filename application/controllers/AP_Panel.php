<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AP_Panel extends CI_Controller {

	public function apply_one_pin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('apply/applyone', $data, true);
        $this->load->view('upanel/home', $data);
    }
}