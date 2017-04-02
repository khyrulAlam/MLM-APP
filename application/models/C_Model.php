<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//Check Model - Check Pin And Generate pin
class C_Model extends CI_Model {
	//Level One pin Check when user create his id - [signup page]
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