<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class S_Model extends CI_Model {
    
	public function level_one($u_id){
		$this->db->select('*');
        $this->db->from("level_one");
		$this->db->where('owner_id',$u_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}

	public function level_two($u_id){
		$this->db->select('*');
		$this->db->from('level_two');
		$this->db->where('owner_id',$u_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function level_three($u_id){
		$this->db->select('*');
		$this->db->from('level_three');
		$this->db->where('owner_id',$u_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function level_four($u_id){
		$this->db->select('*');
		$this->db->from('level_four');
		$this->db->where('owner_id',$u_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function level_five($u_id){
		$this->db->select('*');
		$this->db->from('level_five');
		$this->db->where('owner_id',$u_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function level_six($u_id){
		$this->db->select('*');
		$this->db->from('level_six');
		$this->db->where('owner_id',$u_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function level_seven($u_id){
		$this->db->select('*');
		$this->db->from('level_seven');
		$this->db->where('owner_id',$u_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function level_eight($u_id){
		$this->db->select('*');
		$this->db->from('level_eight');
		$this->db->where('owner_id',$u_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function level_nine($u_id){
		$this->db->select('*');
		$this->db->from('level_nine');
		$this->db->where('owner_id',$u_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}
	public function level_ten($u_id){
		$this->db->select('*');
		$this->db->from('level_ten');
		$this->db->where('owner_id',$u_id);
		$query = $this->db->get();
		$result = $query->result();
		return $result;
	}


}