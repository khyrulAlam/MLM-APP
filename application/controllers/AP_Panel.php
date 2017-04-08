<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AP_Panel extends CI_Controller {
	public function __construct() {
        parent::__construct();

        $u_id = $this->session->userdata('u_id');
        if ($u_id == NULL) {
            redirect('Welcome', 'refresh');
        }
    }
//APPLY FOR LEVEL ONE PAGE 
	public function apply_one_pin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('apply/applyone', $data, true);
        $this->load->view('upanel/home', $data);
    }
//LEVEL ONE PIN CHECK WITH AJAX
    public function level_one_pin_check($scrpin=NULL){
    	if ($scrpin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
        } else {
            $l_one = $this->AP_Model->level_one_info($scrpin);
            if ($l_one) {
                echo '';
            } else {
                echo 'Your input PIN Not correct ! Please Enter a valid pin code';
            }
        }
    }
//random generate page    
    public function level_one_random() {
        $user = $this->input->post('scrpin');
        if ($user == null) {
            echo 'Please Enter PIN';
        } else {
            $data = array();
            $data['owner_id'] = $this->input->post('owner_id');
            $data['owner_name'] = $this->input->post('owner_name');
            $data['scrpin'] = $this->input->post('scrpin');
            $data['master'] = $this->load->view('apply/random-generat', $data, true);
            $this->load->view('upanel/home', $data);
        }
    }
//random input in database
    public function level_one_random_pin() {
        $per_key = $this->input->post('permission_key');
        $user_id = $this->session->userdata('u_id');
        if ($per_key) {
            $this->AP_Model->user_level_one($user_id);
            $this->AP_Model->permission_level_one($per_key);
            $this->AP_Model->create_random_pin_one();
            redirect('Panel/sellingPin');
        } else {
            echo 'Please Check Your PIN';
        }
    }

 //APPLY FOR LEVEL TWO PAGE 
	public function apply_two_pin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('apply/applytwo', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_two_pin_check($scrpin=NULL){
    	if ($scrpin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
        } else {
            $l_one = $this->AP_Model->level_two_info($scrpin);
            if ($l_one) {
                echo '';
            } else {
                echo 'Your input PIN Not correct ! Please Enter a valid pin code';
            }
        }
    }  
    public function level_two_random() {
        $user = $this->input->post('scrpin');

        if ($user == null) {
            echo 'Please Enter PIN';
        } else {
            $data = array();
            $data['owner_id'] = $this->input->post('owner_id');
            $data['owner_name'] = $this->input->post('owner_name');
            $data['scrpin'] = $this->input->post('scrpin');
            $data['master'] = $this->load->view('apply/random-generat2', $data, true);
            $this->load->view('upanel/home', $data);
        }
    }
    public function level_two_random_pin() {
        $per_key = $this->input->post('permission_key');
        $user_id = $this->session->userdata('u_id');
        $user_name =$this->session->userdata('u_name');
        if ($per_key) {
            $this->AP_Model->user_level_two($user_id);
            $this->AP_Model->permission_level_two($per_key,$user_name);
            $this->AP_Model->create_random_pin_two();
            redirect('Panel/sellingPin');
        } else {
            echo 'Please Check Your PIN';
        }
    }

 //APPLY FOR LEVEL Three PAGE 
	public function apply_three_pin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('apply/applythree', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_three_pin_check($scrpin=NULL){
    	if ($scrpin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
        } else {
            $l_one = $this->AP_Model->level_three_info($scrpin);
            if ($l_one) {
                echo '';
            } else {
                echo 'Your input PIN Not correct ! Please Enter a valid pin code';
            }
        }
    }  
    public function level_three_random() {
        $user = $this->input->post('scrpin');

        if ($user == null) {
            echo 'Please Enter PIN';
        } else {
            $data = array();
            $data['owner_id'] = $this->input->post('owner_id');
            $data['owner_name'] = $this->input->post('owner_name');
            $data['scrpin'] = $this->input->post('scrpin');
            $data['master'] = $this->load->view('apply/random-generat3', $data, true);
            $this->load->view('upanel/home', $data);
        }
    }
    public function level_three_random_pin() {
        $per_key = $this->input->post('permission_key');
        $user_id = $this->session->userdata('u_id');
        $user_name =$this->session->userdata('u_name');
        if ($per_key) {
            $this->AP_Model->user_level_three($user_id);
            $this->AP_Model->permission_level_three($per_key,$user_name);
            $this->AP_Model->create_random_pin_three();
            redirect('Panel/sellingPin');
        } else {
            echo 'Please Check Your PIN';
        }
    }
//APPLY FOR LEVEL Four PAGE
    public function apply_four_pin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('apply/applyfour', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_four_pin_check($scrpin=NULL){
        if ($scrpin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
        } else {
            $l_one = $this->AP_Model->level_four_info($scrpin);
            if ($l_one) {
                echo '';
            } else {
                echo 'Your input PIN Not correct ! Please Enter a valid pin code';
            }
        }
    }  
    public function level_four_random() {
        $user = $this->input->post('scrpin');

        if ($user == null) {
            echo 'Please Enter PIN';
        } else {
            $data = array();
            $data['owner_id'] = $this->input->post('owner_id');
            $data['owner_name'] = $this->input->post('owner_name');
            $data['scrpin'] = $this->input->post('scrpin');
            $data['master'] = $this->load->view('apply/random-generat4', $data, true);
            $this->load->view('upanel/home', $data);
        }
    }
    public function level_four_random_pin() {
        $per_key = $this->input->post('permission_key');
        $user_id = $this->session->userdata('u_id');
        $user_name =$this->session->userdata('u_name');
        if ($per_key) {
            $this->AP_Model->user_level_four($user_id);
            $this->AP_Model->permission_level_four($per_key,$user_name);
            $this->AP_Model->create_random_pin_four();
            redirect('Panel/sellingPin');
        } else {
            echo 'Please Check Your PIN';
        }
    }
//APPLY FOR LEVEL five PAGE
    public function apply_five_pin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('apply/applyfive', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_five_pin_check($scrpin=NULL){
        if ($scrpin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
        } else {
            $l_one = $this->AP_Model->level_five_info($scrpin);
            if ($l_one) {
                echo '';
            } else {
                echo 'Your input PIN Not correct ! Please Enter a valid pin code';
            }
        }
    }  
    public function level_five_random() {
        $user = $this->input->post('scrpin');

        if ($user == null) {
            echo 'Please Enter PIN';
        } else {
            $data = array();
            $data['owner_id'] = $this->input->post('owner_id');
            $data['owner_name'] = $this->input->post('owner_name');
            $data['scrpin'] = $this->input->post('scrpin');
            $data['master'] = $this->load->view('apply/random-generat5', $data, true);
            $this->load->view('upanel/home', $data);
        }
    }
    public function level_five_random_pin() {
        $per_key = $this->input->post('permission_key');
        $user_id = $this->session->userdata('u_id');
        $user_name =$this->session->userdata('u_name');
        if ($per_key) {
            $this->AP_Model->user_level_five($user_id);
            $this->AP_Model->permission_level_five($per_key,$user_name);
            $this->AP_Model->create_random_pin_five();
            redirect('Panel/sellingPin');
        } else {
            echo 'Please Check Your PIN';
        }
    }
//APPLY FOR LEVEL six PAGE
    public function apply_six_pin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('apply/applysix', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_six_pin_check($scrpin=NULL){
        if ($scrpin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
        } else {
            $l_one = $this->AP_Model->level_six_info($scrpin);
            if ($l_one) {
                echo '';
            } else {
                echo 'Your input PIN Not correct ! Please Enter a valid pin code';
            }
        }
    }  
    public function level_six_random() {
        $user = $this->input->post('scrpin');

        if ($user == null) {
            echo 'Please Enter PIN';
        } else {
            $data = array();
            $data['owner_id'] = $this->input->post('owner_id');
            $data['owner_name'] = $this->input->post('owner_name');
            $data['scrpin'] = $this->input->post('scrpin');
            $data['master'] = $this->load->view('apply/random-generat6', $data, true);
            $this->load->view('upanel/home', $data);
        }
    }
    public function level_six_random_pin() {
        $per_key = $this->input->post('permission_key');
        $user_id = $this->session->userdata('u_id');
        $user_name =$this->session->userdata('u_name');
        if ($per_key) {
            $this->AP_Model->user_level_six($user_id);
            $this->AP_Model->permission_level_six($per_key,$user_name);
            $this->AP_Model->create_random_pin_six();
            redirect('Panel/sellingPin');
        } else {
            echo 'Please Check Your PIN';
        }
    }
//APPLY FOR LEVEL seven PAGE
    public function apply_seven_pin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('apply/applyseven', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_seven_pin_check($scrpin=NULL){
        if ($scrpin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
        } else {
            $l_one = $this->AP_Model->level_seven_info($scrpin);
            if ($l_one) {
                echo '';
            } else {
                echo 'Your input PIN Not correct ! Please Enter a valid pin code';
            }
        }
    }  
    public function level_seven_random() {
        $user = $this->input->post('scrpin');

        if ($user == null) {
            echo 'Please Enter PIN';
        } else {
            $data = array();
            $data['owner_id'] = $this->input->post('owner_id');
            $data['owner_name'] = $this->input->post('owner_name');
            $data['scrpin'] = $this->input->post('scrpin');
            $data['master'] = $this->load->view('apply/random-generat7', $data, true);
            $this->load->view('upanel/home', $data);
        }
    }
    public function level_seven_random_pin() {
        $per_key = $this->input->post('permission_key');
        $user_id = $this->session->userdata('u_id');
        $user_name =$this->session->userdata('u_name');
        if ($per_key) {
            $this->AP_Model->user_level_seven($user_id);
            $this->AP_Model->permission_level_seven($per_key,$user_name);
            $this->AP_Model->create_random_pin_seven();
            redirect('Panel/sellingPin');
        } else {
            echo 'Please Check Your PIN';
        }
    }
//APPLY FOR LEVEL eight PAGE
    public function apply_eight_pin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('apply/applyeight', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_eight_pin_check($scrpin=NULL){
        if ($scrpin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
        } else {
            $l_one = $this->AP_Model->level_eight_info($scrpin);
            if ($l_one) {
                echo '';
            } else {
                echo 'Your input PIN Not correct ! Please Enter a valid pin code';
            }
        }
    }  
    public function level_eight_random() {
        $user = $this->input->post('scrpin');

        if ($user == null) {
            echo 'Please Enter PIN';
        } else {
            $data = array();
            $data['owner_id'] = $this->input->post('owner_id');
            $data['owner_name'] = $this->input->post('owner_name');
            $data['scrpin'] = $this->input->post('scrpin');
            $data['master'] = $this->load->view('apply/random-generat8', $data, true);
            $this->load->view('upanel/home', $data);
        }
    }
    public function level_eight_random_pin() {
        $per_key = $this->input->post('permission_key');
        $user_id = $this->session->userdata('u_id');
        $user_name =$this->session->userdata('u_name');
        if ($per_key) {
            $this->AP_Model->user_level_eight($user_id);
            $this->AP_Model->permission_level_eight($per_key,$user_name);
            $this->AP_Model->create_random_pin_eight();
            redirect('Panel/sellingPin');
        } else {
            echo 'Please Check Your PIN';
        }
    }
//APPLY FOR LEVEL nine PAGE
    public function apply_nine_pin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('apply/applynine', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_nine_pin_check($scrpin=NULL){
        if ($scrpin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
        } else {
            $l_one = $this->AP_Model->level_nine_info($scrpin);
            if ($l_one->u_value ==0 || $l_one->u_value2 == 0) {
                echo '';
            } else {
                echo 'Your input PIN Not correct ! Please Enter a valid pin code';
            }
        }
    }  
    public function level_nine_random() {
        $user = $this->input->post('scrpin');
        $step = $this->AP_Model->step_check_levelnine($user);
        if ($user == null) {
            echo 'Please Enter PIN';
        } else {

        	if($step->u_value ==0 || $step->u_value2 == 0){
        		$data = array();
	            $data['owner_id'] = $this->input->post('owner_id');
	            $data['owner_name'] = $this->input->post('owner_name');
	            $data['scrpin'] = $this->input->post('scrpin');
	            $data['master'] = $this->load->view('apply/random-generat9', $data, true);
	            $this->load->view('upanel/home', $data);
        	}else{
        		echo "Step Nine Compeleted";
        	}
            
        }
    }
    public function level_nine_random_pin() {
        $per_key = $this->input->post('permission_key');
        $user_id = $this->session->userdata('u_id');
        $user_name =$this->session->userdata('u_name');
        if ($per_key) {
        	$user = $per_key;
        	$step = $this->AP_Model->step_check_levelnine($user);
        	if($step->u_value == 0){
	            $this->AP_Model->permission_level_nine($per_key,$user_name);
	            $this->AP_Model->create_random_pin_nine();
	            redirect('Panel/sellingPin');
        	}else if($step->u_value2 == 0){
        		$this->AP_Model->user_level_nine($user_id);
	            $this->AP_Model->permission_level_nine2($per_key);
	            $this->AP_Model->create_random_pin_nine();
	            redirect('Panel/sellingPin');
        	}else{
        		echo "Step Nine Compeleted";
        	}
        } else {
            echo 'Please Check Your PIN';
        }
    }
    // public function text(){
    // 	$per_key = $this->input->post('permission_key');
    //     $user_id = $this->session->userdata('u_id');
    //     $user_name =$this->session->userdata('u_name');
    //     if($per_key){
    //     	$user = $per_key;
    //     	$step = $this->AP_Model->step_check_levelTen($user);
    //     	if($step->u_value == 0){
    //         	$this->AP_Model->permission_level_ten($per_key,$user_name);
    //         	$this->AP_Model->create_random_pin_ten();
    //         redirect('Panel/sellingPin');
    //     	}else if($step->u_value2 == 0){
				// $this->AP_Model->permission_level_ten2($per_key);
    //         	$this->AP_Model->create_random_pin_ten();
    //     	}else if($step->u_value3 == 0){
    //     		$this->AP_Model->permission_level_ten3($per_key);
    //         	$this->AP_Model->create_random_pin_ten();
    //     	}else if($step->u_value4 == 0){
    //     		$this->AP_Model->user_level_ten($user_id);
    //         	$this->AP_Model->permission_level_ten4($per_key);
    //         	$this->AP_Model->create_random_pin_ten();
    //     	}else{
    //     		echo "Level Compeleted";
    //     	}
    //     }else{
    //     	echo 'Please Check Your PIN';
    //     }
    // }
//APPLY FOR LEVEL ten PAGE
    public function apply_ten_pin() {
        $user_id = $this->session->userdata('u_id');
        $data = array();
        $data['user'] = $this->P_Model->user_info($user_id);
        $data['master'] = $this->load->view('apply/applyten', $data, true);
        $this->load->view('upanel/home', $data);
    }
    public function level_ten_pin_check($scrpin=NULL){
        if ($scrpin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
        } else {
            $l_one = $this->AP_Model->level_ten_info($scrpin);
            if ($l_one->u_value ==0 || $l_one->u_value2 == 0 || $l_one->u_value3 == 0 || $l_one->u_value4 == 0) {
                echo '';
            } else {
                echo 'Your input PIN Not correct ! Please Enter a valid pin code';
            }
        }
    }

    public function level_ten_random() {
        $user = $this->input->post('scrpin');
        $step = $this->AP_Model->step_check_levelTen($user);
        if ($user == null) {
            echo 'Please Enter PIN';
        } else{
        	if($step->u_value ==0 || $step->u_value2 ==0 || $step->u_value3 == 0 || $step->u_value4 ==0){
            $data = array();
            $data['owner_id'] = $this->input->post('owner_id');
            $data['owner_name'] = $this->input->post('owner_name');
            $data['scrpin'] = $this->input->post('scrpin');
            $data['master'] = $this->load->view('apply/random-generat10', $data, true);
            $this->load->view('upanel/home', $data);
        	}else{
        		echo "Step Ten Compeleted";
        	}
        }
    }
    public function level_ten_random_pin() {
        $per_key = $this->input->post('permission_key');
        $user_id = $this->session->userdata('u_id');
        $user_name =$this->session->userdata('u_name');
        if($per_key){
        	$user = $per_key;
        	$step = $this->AP_Model->step_check_levelTen($user);
        	if($step->u_value == 0){
            	$this->AP_Model->permission_level_ten($per_key,$user_name);
            	$this->AP_Model->create_random_pin_ten();
            	redirect('Panel/sellingPin');
        	}else if($step->u_value2 == 0){
				$this->AP_Model->permission_level_ten2($per_key);
            	$this->AP_Model->create_random_pin_ten();
            	redirect('Panel/sellingPin');
        	}else if($step->u_value3 == 0){
        		$this->AP_Model->permission_level_ten3($per_key);
            	$this->AP_Model->create_random_pin_ten();
            	redirect('Panel/sellingPin');
        	}else if($step->u_value4 == 0){
        		$this->AP_Model->user_level_ten($user_id);
            	$this->AP_Model->permission_level_ten4($per_key);
            	$this->AP_Model->create_random_pin_ten();
            	redirect('Panel/sellingPin');
        	}else{
        		echo "Level Ten Compeleted";
        	}
        }else{
        	echo 'Please Check Your PIN';
        }
    }

}