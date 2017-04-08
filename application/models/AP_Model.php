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
	public function user_level_one($user_id){
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
//LEVEL TWO
	public function level_two_info($scrpin){
		$this->db->select('*');
        $this->db->from('level_two');
        $this->db->where('level_two_pin', $scrpin);
        $this->db->where('u_value', 0);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
	}
	public function user_level_two($user_id){
		$this->db->set('u_level', 2);
        $this->db->where('u_id', $user_id);
        $this->db->update('userinfo');
	}
	public function permission_level_two($per_key,$user_name){
		$this->db->set('u_value', 1);
		$this->db->set('u_name', $user_name);
        $this->db->where('level_two_pin', $per_key);
        $this->db->update('level_two');
	}
	public function create_random_pin_two(){
		$screct_pin = $this->input->post('screct_pin');
        $owner_id = $this->input->post('owner_id');
        $owner_name = $this->input->post('owner_name');
        for ($i = 0; $i < count($screct_pin); $i++) {
            $data = array();
            $data['level_two_pin'] = $screct_pin[$i];
            $data['owner_id'] = $owner_id[$i];
            $data['owner_name'] = $owner_name[$i];
            $this->db->insert('level_two', $data);
        }
	}

//Level Three
	public function level_three_info($scrpin){
		$this->db->select('*');
        $this->db->from('level_three');
        $this->db->where('level_three_pin', $scrpin);
        $this->db->where('u_value', 0);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
	}
	public function user_level_three($user_id){
		$this->db->set('u_level', 3);
        $this->db->where('u_id', $user_id);
        $this->db->update('userinfo');
	}
	public function permission_level_three($per_key,$user_name){
		$this->db->set('u_value', 1);
		$this->db->set('u_name', $user_name);
        $this->db->where('level_three_pin', $per_key);
        $this->db->update('level_three');
	}
	public function create_random_pin_three(){
		$screct_pin = $this->input->post('screct_pin');
        $owner_id = $this->input->post('owner_id');
        $owner_name = $this->input->post('owner_name');
        for ($i = 0; $i < count($screct_pin); $i++) {
            $data = array();
            $data['level_three_pin'] = $screct_pin[$i];
            $data['owner_id'] = $owner_id[$i];
            $data['owner_name'] = $owner_name[$i];
            $this->db->insert('level_three', $data);
        }
	}
//Level four
    public function level_four_info($scrpin){
        $this->db->select('*');
        $this->db->from('level_four');
        $this->db->where('level_four_pin', $scrpin);
        $this->db->where('u_value', 0);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function user_level_four($user_id){
        $this->db->set('u_level', 4);
        $this->db->where('u_id', $user_id);
        $this->db->update('userinfo');
    }
    public function permission_level_four($per_key,$user_name){
        $this->db->set('u_value', 1);
        $this->db->set('u_name', $user_name);
        $this->db->where('level_four_pin', $per_key);
        $this->db->update('level_four');
    }
    public function create_random_pin_four(){
        $screct_pin = $this->input->post('screct_pin');
        $owner_id = $this->input->post('owner_id');
        $owner_name = $this->input->post('owner_name');
        for ($i = 0; $i < count($screct_pin); $i++) {
            $data = array();
            $data['level_four_pin'] = $screct_pin[$i];
            $data['owner_id'] = $owner_id[$i];
            $data['owner_name'] = $owner_name[$i];
            $this->db->insert('level_four', $data);
        }
    }
//Level five
    public function level_five_info($scrpin){
        $this->db->select('*');
        $this->db->from('level_five');
        $this->db->where('level_five_pin', $scrpin);
        $this->db->where('u_value', 0);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function user_level_five($user_id){
        $this->db->set('u_level', 5);
        $this->db->where('u_id', $user_id);
        $this->db->update('userinfo');
    }
    public function permission_level_five($per_key,$user_name){
        $this->db->set('u_value', 1);
        $this->db->set('u_name', $user_name);
        $this->db->where('level_five_pin', $per_key);
        $this->db->update('level_five');
    }
    public function create_random_pin_five(){
        $screct_pin = $this->input->post('screct_pin');
        $owner_id = $this->input->post('owner_id');
        $owner_name = $this->input->post('owner_name');
        for ($i = 0; $i < count($screct_pin); $i++) {
            $data = array();
            $data['level_five_pin'] = $screct_pin[$i];
            $data['owner_id'] = $owner_id[$i];
            $data['owner_name'] = $owner_name[$i];
            $this->db->insert('level_five', $data);
        }
    }
//Level six
    public function level_six_info($scrpin){
        $this->db->select('*');
        $this->db->from('level_six');
        $this->db->where('level_six_pin', $scrpin);
        $this->db->where('u_value', 0);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function user_level_six($user_id){
        $this->db->set('u_level', 6);
        $this->db->where('u_id', $user_id);
        $this->db->update('userinfo');
    }
    public function permission_level_six($per_key,$user_name){
        $this->db->set('u_value', 1);
        $this->db->set('u_name', $user_name);
        $this->db->where('level_six_pin', $per_key);
        $this->db->update('level_six');
    }
    public function create_random_pin_six(){
        $screct_pin = $this->input->post('screct_pin');
        $owner_id = $this->input->post('owner_id');
        $owner_name = $this->input->post('owner_name');
        for ($i = 0; $i < count($screct_pin); $i++) {
            $data = array();
            $data['level_six_pin'] = $screct_pin[$i];
            $data['owner_id'] = $owner_id[$i];
            $data['owner_name'] = $owner_name[$i];
            $this->db->insert('level_six', $data);
        }
    }
//Level seven
    public function level_seven_info($scrpin){
        $this->db->select('*');
        $this->db->from('level_seven');
        $this->db->where('level_seven_pin', $scrpin);
        $this->db->where('u_value', 0);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function user_level_seven($user_id){
        $this->db->set('u_level', 7);
        $this->db->where('u_id', $user_id);
        $this->db->update('userinfo');
    }
    public function permission_level_seven($per_key,$user_name){
        $this->db->set('u_value', 1);
        $this->db->set('u_name', $user_name);
        $this->db->where('level_seven_pin', $per_key);
        $this->db->update('level_seven');
    }
    public function create_random_pin_seven(){
        $screct_pin = $this->input->post('screct_pin');
        $owner_id = $this->input->post('owner_id');
        $owner_name = $this->input->post('owner_name');
        for ($i = 0; $i < count($screct_pin); $i++) {
            $data = array();
            $data['level_seven_pin'] = $screct_pin[$i];
            $data['owner_id'] = $owner_id[$i];
            $data['owner_name'] = $owner_name[$i];
            $this->db->insert('level_seven', $data);
        }
    }
//Level eight
    public function level_eight_info($scrpin){
        $this->db->select('*');
        $this->db->from('level_eight');
        $this->db->where('level_eight_pin', $scrpin);
        $this->db->where('u_value', 0);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function user_level_eight($user_id){
        $this->db->set('u_level', 8);
        $this->db->where('u_id', $user_id);
        $this->db->update('userinfo');
    }
    public function permission_level_eight($per_key,$user_name){
        $this->db->set('u_value', 1);
        $this->db->set('u_name', $user_name);
        $this->db->where('level_eight_pin', $per_key);
        $this->db->update('level_eight');
    }
    public function create_random_pin_eight(){
        $screct_pin = $this->input->post('screct_pin');
        $owner_id = $this->input->post('owner_id');
        $owner_name = $this->input->post('owner_name');
        for ($i = 0; $i < count($screct_pin); $i++) {
            $data = array();
            $data['level_eight_pin'] = $screct_pin[$i];
            $data['owner_id'] = $owner_id[$i];
            $data['owner_name'] = $owner_name[$i];
            $this->db->insert('level_eight', $data);
        }
    }
//Level nine
    public function level_nine_info($scrpin){
        $this->db->select('*');
        $this->db->from('level_nine');
        $this->db->where('level_nine_pin', $scrpin);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function step_check_levelnine($user){
    	$this->db->select('*');
        $this->db->from('level_nine');
        $this->db->where('level_nine_pin', $user);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function user_level_nine($user_id){
        $this->db->set('u_level', 9);
        $this->db->where('u_id', $user_id);
        $this->db->update('userinfo');
    }
    public function permission_level_nine($per_key,$user_name){
        $this->db->set('u_value', 1);
        $this->db->set('u_name', $user_name);
        $this->db->where('level_nine_pin', $per_key);
        $this->db->update('level_nine');
    }
    public function permission_level_nine2($per_key){
    	$this->db->set('u_value2', 1);
        $this->db->where('level_nine_pin', $per_key);
        $this->db->update('level_nine');
    }
    public function create_random_pin_nine(){
        $screct_pin = $this->input->post('screct_pin');
        $owner_id = $this->input->post('owner_id');
        $owner_name = $this->input->post('owner_name');
        for ($i = 0; $i < count($screct_pin); $i++) {
            $data = array();
            $data['level_nine_pin'] = $screct_pin[$i];
            $data['owner_id'] = $owner_id[$i];
            $data['owner_name'] = $owner_name[$i];
            $this->db->insert('level_nine', $data);
        }
    }
//Level ten
    public function level_ten_info($scrpin){
        $this->db->select('*');
        $this->db->from('level_ten');
        $this->db->where('level_ten_pin', $scrpin);
        //$this->db->where('u_value', 0);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function step_check_levelTen($user){
    	$this->db->select('*');
        $this->db->from('level_ten');
        $this->db->where('level_ten_pin', $user);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    public function user_level_ten($user_id){
        $this->db->set('u_level', 10);
        $this->db->where('u_id', $user_id);
        $this->db->update('userinfo');
    }
    public function permission_level_ten($per_key,$user_name){
        $this->db->set('u_value', 1);
        $this->db->set('u_name', $user_name);
        $this->db->where('level_ten_pin', $per_key);
        $this->db->update('level_ten');
    }
    public function permission_level_ten2($per_key){
    	$this->db->set('u_value2', 1);
        $this->db->where('level_ten_pin', $per_key);
        $this->db->update('level_ten');
    }
    public function permission_level_ten3($per_key){
    	$this->db->set('u_value3', 1);
        $this->db->where('level_ten_pin', $per_key);
        $this->db->update('level_ten');
    }
    public function permission_level_ten4($per_key){
    	$this->db->set('u_value4', 1);
        $this->db->where('level_ten_pin', $per_key);
        $this->db->update('level_ten');
    }
    public function create_random_pin_ten(){
        $screct_pin = $this->input->post('screct_pin');
        $owner_id = $this->input->post('owner_id');
        $owner_name = $this->input->post('owner_name');
        for ($i = 0; $i < count($screct_pin); $i++) {
            $data = array();
            $data['level_ten_pin'] = $screct_pin[$i];
            $data['owner_id'] = $owner_id[$i];
            $data['owner_name'] = $owner_name[$i];
            $this->db->insert('level_ten', $data);
        }
    }
}