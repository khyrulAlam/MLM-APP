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
//User Name Check 
  public function user_name_check_info($log_name){
    $this->db->select('*');
    $this->db->from("userinfo");
    $this->db->where('log_name',$log_name);
    $query=$this->db->get();
    $result=$query->row();
    return $result;
  }
//Call for level one pin

        public function call_for_pin_one($senior_one){
           $this->db->select('*');
           $this->db->from('userinfo');
           $this->db->where('u_id',$senior_one);
           $query=$this->db->get();
           $result=$query->row();
           return $result;
        }
//Call for level two pin
        public function call_for_pin_two($senior_two){
           $this->db->select('*');
           $this->db->from('userinfo');
           $this->db->where('u_id',$senior_two);
           $query=$this->db->get();
           $result=$query->row();
           return $result; 
        }
//Call for level Three pin        
        public function call_for_pin_three($senior_three){
           $this->db->select('*');
           $this->db->from('userinfo');
           $this->db->where('u_id',$senior_three);
           $query=$this->db->get();
           $result=$query->row();
           return $result; 
        }
//Call for level Four pin        
        public function call_for_pin_four($senior_four){
           $this->db->select('*');
           $this->db->from('userinfo');
           $this->db->where('u_id',$senior_four);
           $query=$this->db->get();
           $result=$query->row();
           return $result; 
        }
//Call for level Five pin        
        public function call_for_pin_five($senior_five){
           $this->db->select('*');
           $this->db->from('userinfo');
           $this->db->where('u_id',$senior_five);
           $query=$this->db->get();
           $result=$query->row();
           return $result; 
        }
//Call for level Six pin        
        public function call_for_pin_six($senior_six){
           $this->db->select('*');
           $this->db->from('userinfo');
           $this->db->where('u_id',$senior_six);
           $query=$this->db->get();
           $result=$query->row();
           return $result; 
        }
//Call for level Seven pin        
        public function call_for_pin_seven($senior_seven){
           $this->db->select('*');
           $this->db->from('userinfo');
           $this->db->where('u_id',$senior_seven);
           $query=$this->db->get();
           $result=$query->row();
           return $result; 
        }
//Call for level Eight pin        
        public function call_for_pin_eight($senior_eight){
           $this->db->select('*');
           $this->db->from('userinfo');
           $this->db->where('u_id',$senior_eight);
           $query=$this->db->get();
           $result=$query->row();
           return $result; 
        }
//Call for level Nine pin        
        public function call_for_pin_nine($senior_nine){
           $this->db->select('*');
           $this->db->from('userinfo');
           $this->db->where('u_id',$senior_nine);
           $query=$this->db->get();
           $result=$query->row();
           return $result; 
        }
//Call for level Ten pin        
        public function call_for_pin_ten($senior_ten){
           $this->db->select('*');
           $this->db->from('userinfo');
           $this->db->where('u_id',$senior_ten);
           $query=$this->db->get();
           $result=$query->row();
           return $result; 
        }

}