<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class P_Model extends CI_Model {

//User info Check
	public function user_info($user_id){
		$this->db->select('*');
        $this->db->from('userinfo');
        $this->db->where('u_id',$user_id);
        $query=$this->db->get();
        $result=$query->row();
        return $result;
	}
//Level One Selling PIN
	public function user_level_one_selling_pin($u_id){
        $this->db->select('*');
        $this->db->from('level_one');
        $this->db->where('owner_id',$u_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
//Level Two Selling PIN
    public function user_level_two_selling_pin($u_id){
        $this->db->select('*');
        $this->db->from('level_two');
        $this->db->where('owner_id',$u_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
//Level Three Selling PIN
    public function user_level_three_selling_pin($u_id){
        $this->db->select('*');
        $this->db->from('level_three');
        $this->db->where('owner_id',$u_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
//Level Four Selling PIN
    public function user_level_four_selling_pin($u_id){
        $this->db->select('*');
        $this->db->from('level_four');
        $this->db->where('owner_id',$u_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
//Level Five Selling PIN
    public function user_level_five_selling_pin($u_id){
        $this->db->select('*');
        $this->db->from('level_five');
        $this->db->where('owner_id',$u_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
//Level Six Selling PIN
    public function user_level_six_selling_pin($u_id){
        $this->db->select('*');
        $this->db->from('level_six');
        $this->db->where('owner_id',$u_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
//Level Seven Selling PIN
    public function user_level_seven_selling_pin($u_id){
        $this->db->select('*');
        $this->db->from('level_seven');
        $this->db->where('owner_id',$u_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
//Level Eight Selling PIN
    public function user_level_eight_selling_pin($u_id){
        $this->db->select('*');
        $this->db->from('level_eight');
        $this->db->where('owner_id',$u_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
//Level Nine Selling PIN
    public function user_level_nine_selling_pin($u_id){
        $this->db->select('*');
        $this->db->from('level_nine');
        $this->db->where('owner_id',$u_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
//Level Ten Selling PIN
    public function user_level_ten_selling_pin($u_id){
        $this->db->select('*');
        $this->db->from('level_ten');
        $this->db->where('owner_id',$u_id);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

}