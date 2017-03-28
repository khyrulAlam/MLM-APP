<?php

defined('BASEPATH') OR exit('No direct script access allowed');

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

}