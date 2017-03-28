<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_Model extends CI_Model {

	public function user_info($user_id){
		$this->db->select('*');
        $this->db->from('userinfo');
        $this->db->where('u_id',$user_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result;
	}


}