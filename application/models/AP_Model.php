<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AP_Model extends CI_Model {
//LEVEL ONE PIN CHECK WITH AJAX
	public function level_one_info($scrpin){
		$this->db->select('*');
        $this->db->from('level_one');
        $this->db->where('level_one_pin', $scrpin);
        $this->db->where('r_per', 0);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
	}

	public function user_lavel_one($user_id){
		$this->db->set('u_level', 1);
        $this->db->where('u_id', $user_id);
        $this->db->update('userinfo');
	}
	public function permission_level_one($per_key){
		$this->db->set('r_per', 1);
        $this->db->where('level_one_pin', $per_key);
        $this->db->update('level_one');
	}
	public function create_random_pin_one(){
		$screct_pin = $this->input->post('screct_pin');
        $owner_id = $this->input->post('owner_id');
        $owner_name = $this->input->post('owner_name');
        for ($i = 0; $i < count($screct_pin); $i++) {
            $data = array();
            $data['level_one_pin'] = $screct_pin[$i];
            $data['owner_id'] = $owner_id[$i];
            $data['owner_name'] = $owner_name[$i];
            $this->db->insert('level_one', $data);
        }
	}
}