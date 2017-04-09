<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Welcome Model - User Signup-Log-in and other
class W_Model extends CI_Model {

	public function login_check($user_email,$user_pass){
        $this->db->select('*');
        $this->db->from('userinfo');
        $this->db->where('u_email',$user_email);
        $this->db->where('u_password',md5($user_pass));
        $query=$this->db->get();
        $result=$query->row();
        return $result;
    }
    public function createNewAccountInfo(){
    	$data = array();
    	$data['u_name']= $this->input->post('u_name');
    	$data['u_father_name']= $this->input->post('u_father_name');
    	$data['u_email']= $this->input->post('u_email');
    	$data['u_nid']= $this->input->post('u_nid');
    	$data['u_birth']= $this->input->post('u_birth');
    	$data['u_mobile']= $this->input->post('u_mobile');
    	$data['u_gender']= $this->input->post('u_gender');
        $data['u_address']= $this->input->post('u_address');
    	$data['u_country']= $this->input->post('country');
    	$data['u_password']= md5($this->input->post('u_password'));
    	$data['level_one_pin']= $this->input->post('level_one_pin');
    	$data['senior_id']= $this->session->userdata('senior_id');
    	$data['senior_name']= $this->session->userdata('senior_name');
    	$data['u_entry_date']= $this->input->post('u_entry_date');
        $this->db->insert('userinfo',$data);
    }
//USER PIN USED INFO INSERT
    public function usedLevelOnePin($leveOnePin,$uName){
    	$this->db->set('u_value',1);
    	$this->db->set('u_name',$uName);
        $this->db->where('level_one_pin',$leveOnePin);
        $this->db->update('level_one');
    }
//ALL USER INFO FOR USER TREE
    public function all_user_info(){
        $this->db->select('*');
        $this->db->from('userinfo');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
}