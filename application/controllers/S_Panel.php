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
//Level TWO For Admin
    public function level_two() {
        $data = array();
        $data['owner_id']= $this->session->userdata('u_id');
        $data['owner_name']= $this->session->userdata('u_name');
        $data['master'] = $this->load->view('spanel/level_two', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_two_pin(){
        $this->S_Model->level_two_pin_info();
        redirect('Panel/sellingPin');
    }
//Level three For Admin
    public function level_three() {
        $data = array();
        $data['owner_id']= $this->session->userdata('u_id');
        $data['owner_name']= $this->session->userdata('u_name');
        $data['master'] = $this->load->view('spanel/level_three', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_three_pin(){
        $this->S_Model->level_three_pin_info();
        redirect('Panel/sellingPin');
    }
//Level Four For Admin
    public function level_four() {
        $data = array();
        $data['owner_id']= $this->session->userdata('u_id');
        $data['owner_name']= $this->session->userdata('u_name');
        $data['master'] = $this->load->view('spanel/level_four', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_four_pin(){
        $this->S_Model->level_four_pin_info();
        redirect('Panel/sellingPin');
    }
//Level five For Admin
    public function level_five() {
        $data = array();
        $data['owner_id']= $this->session->userdata('u_id');
        $data['owner_name']= $this->session->userdata('u_name');
        $data['master'] = $this->load->view('spanel/level_five', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_five_pin(){
        $this->S_Model->level_five_pin_info();
        redirect('Panel/sellingPin');
    }
//Level six For Admin
    public function level_six() {
        $data = array();
        $data['owner_id']= $this->session->userdata('u_id');
        $data['owner_name']= $this->session->userdata('u_name');
        $data['master'] = $this->load->view('spanel/level_six', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_six_pin(){
        $this->S_Model->level_six_pin_info();
        redirect('Panel/sellingPin');
    }
//Level seven For Admin
    public function level_seven() {
        $data = array();
        $data['owner_id']= $this->session->userdata('u_id');
        $data['owner_name']= $this->session->userdata('u_name');
        $data['master'] = $this->load->view('spanel/level_seven', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_seven_pin(){
        $this->S_Model->level_seven_pin_info();
        redirect('Panel/sellingPin');
    }
//Level eight For Admin
    public function level_eight() {
        $data = array();
        $data['owner_id']= $this->session->userdata('u_id');
        $data['owner_name']= $this->session->userdata('u_name');
        $data['master'] = $this->load->view('spanel/level_eight', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_eight_pin(){
        $this->S_Model->level_eight_pin_info();
        redirect('Panel/sellingPin');
    }
//Level nine For Admin
    public function level_nine() {
        $data = array();
        $data['owner_id']= $this->session->userdata('u_id');
        $data['owner_name']= $this->session->userdata('u_name');
        $data['master'] = $this->load->view('spanel/level_nine', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_nine_pin(){
        $this->S_Model->level_nine_pin_info();
        redirect('Panel/sellingPin');
    }
//Level ten For Admin
    public function level_ten() {
        $data = array();
        $data['owner_id']= $this->session->userdata('u_id');
        $data['owner_name']= $this->session->userdata('u_name');
        $data['master'] = $this->load->view('spanel/level_ten', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_ten_pin(){
        $this->S_Model->level_ten_pin_info();
        redirect('Panel/sellingPin');
    }


}