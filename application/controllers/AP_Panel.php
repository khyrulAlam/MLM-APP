<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AP_Panel extends CI_Controller {
//APPLY FOR LEVEL ONE PAGE 
	public function apply_one_pin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('apply/applyone', $data, true);
        $this->load->view('upanel/home', $data);
    }
//LEVEL ON PIN CHECK WITH AJAX
    public function level_one_pin_check($scrpin=NULL){
    	if ($scrpin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
        } else {
            $l_one = $this->AP_Model->level_one_info($scrpin);
            if ($l_one) {
                echo '';
            } else {
                echo 'Your input PIN Not correct ! Please Enter a valid pin code';
            }
        }
    }
//random generate page    
    public function level_one_random() {
        $user = $this->input->post('scrpin');
        if ($user == null) {
            echo 'Please Enter PIN';
        } else {
            $data = array();
            $data['owner_id'] = $this->input->post('owner_id');
            $data['owner_name'] = $this->input->post('owner_name');
            $data['scrpin'] = $this->input->post('scrpin');
            $data['master'] = $this->load->view('apply/random-generat', $data, true);
            $this->load->view('upanel/home', $data);
        }
    }
//random input in database
    public function level_one_random_pin() {
        $per_key = $this->input->post('permission_key');
        $user_id = $this->session->userdata('u_id');
        if ($per_key) {
            $this->AP_Model->user_lavel_one($user_id);
            $this->AP_Model->permission_level_one($per_key);
            $this->AP_Model->create_random_pin_one();
            redirect('Panel/sellingPin');
        } else {
            echo 'Please Check Your PIN';
        }
    }


}