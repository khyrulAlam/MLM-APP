<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class S_Model extends CI_Model {
//level one	
	public function level_one_pin_info(){
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
//level two	
	public function level_two_pin_info(){
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
//level three	
	public function level_three_pin_info(){
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
//level four	
	public function level_four_pin_info(){
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
//level Five
	public function level_five_pin_info(){
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
//level Six	
	public function level_six_pin_info(){
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
//level seven
	public function level_seven_pin_info(){
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
//level Eight
	public function level_eight_pin_info(){
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
//level Nine
	public function level_nine_pin_info(){
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
//level Ten
	public function level_ten_pin_info(){
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