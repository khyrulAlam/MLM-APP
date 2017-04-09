<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class S_Panel extends CI_Controller {

    public function genarate_pin(){
        $data = array();
        $data['master'] = $this->load->view('spanel/genarate_page', $data, true);
        $this->load->view('upanel/home', $data);
    }
//Level One For Admin
    public function level_one() {
        $data = array();
        $data['owner_id']= $this->session->userdata('u_id');
        $data['owner_name']= $this->session->userdata('u_name');
        $data['master'] = $this->load->view('spanel/level_one', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_one_pin(){
        $this->S_Model->level_one_pin_info();
        redirect('Panel/sellingPin');
    }

}