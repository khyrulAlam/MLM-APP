<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_Model extends CI_Model {


	public function level_onepin_check_info($level_one_pin){
		$this->db->select('*');
        $this->db->from("level_one");
        $this->db->where('level_one_pin',$level_one_pin);
        $this->db->where('u_value',0);
        $query=$this->db->get();
        $result=$query->row();
        return $result;
	}



}