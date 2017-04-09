<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class S_Model extends CI_Model {
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


}