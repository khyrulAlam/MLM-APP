<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $u_id = $this->session->userdata('u_id');
        $u_access = $this->session->userdata('u_access');
        if ($u_id != NULL) {
            redirect('Panel', 'refresh');
        }
    }


    //Log-in Page
    public function index()
    {

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $data = array();
        $data['master'] = $this->load->view('signup/login-form', '', true);
        $this->load->view('signup/login',$data);
    }

// Password Check Function
    public function password_check($str)
    {
       if ( preg_match('#[0-9]#', $str) && preg_match('#[A-Z]#', $str) && preg_match('#[a-z]#', $str ) ) {
         return TRUE;
       }
       return FALSE;
    }

    public function login(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('log_name', 'Email', 'required');
        $this->form_validation->set_rules('user_pass', 'Password', 'trim|required|min_length[8]|alpha_numeric|callback_password_check');

        if ($this->form_validation->run() == FALSE)
        {
            $mdata = array();
            $mdata['login_failed'] = "Please Enter Valid Email id And Password.";
            $this->session->set_userdata($mdata);
             redirect('Welcome');
        }
        else
        {
            $log_name = $this->input->post('log_name');
            $user_pass = $this->input->post('user_pass');
            $user_info = $this->W_Model->login_check($log_name, $user_pass);
             if($user_info == FALSE){
                $mdata = array();
                $mdata['login_failed'] = "Your enter User Name and Password not found.<br/> Please Enter Valid User Name And Password.";
                $this->session->set_userdata($mdata);
                redirect('Welcome');
             }else{
                $user_id = array();
                $user_id['u_id'] = $user_info->u_id;
                $user_id['u_access'] = $user_info->u_access;
                $user_id['u_name'] = $user_info->u_name;
                $this->session->set_userdata($user_id);
                redirect('Panel');
             }
        }
    }


    //Sign-Up Page
    public function newAccount() {
        $data = array();
        $data['master'] = $this->load->view('signup/signup-form', '', true);
        $this->load->view('signup/login', $data);
    }

//Pin check by ajax
    public function level_one_check($level_one_pin=NULL){
        if ($level_one_pin == NULL) {
            echo 'Please Enter Your Screct PIN Code';
            return;
        } else {
            $result = $this->C_Model->level_onepin_check_info($level_one_pin);
            if ($result) {
                echo '';
            } else {
                echo 'Your input PIN not correct ! Please Enter a valid pin code';
            }
        }
    }
//user name check by ajax
    public function user_name_check($log_name=NULL){
        if($log_name==Null){
            echo "Please Enter Your User Name";
            return;
        }else{
            $log_name = $this->C_Model->user_name_check_info($log_name);
            if($log_name){
                echo 'This User Name Already Exists';
            }else{
                echo '';
            }
        }
    }

// Check user Name
    public function user_check($log_name){
        $u_check = $this->C_Model->user_name_check_info($log_name);

        if($u_check){
            return False;
        }
        return TRUE ;
    }

//New Account Create Controller
    public function createNewAccount(){
        $level_one_pin = $this->input->post('level_one_pin');
        $log_name = $this->input->post('log_name');
        $check = $this->C_Model->level_onepin_check_info($level_one_pin);
        if($level_one_pin==NULL || $log_name==NULL){
            $data = array();
            $data['gap']= "Something Wrong Your User Name Or PIN ID Correctly";
            $this->session->set_userdata($data);
            redirect('Welcome/newAccount');
        }else{

            $this->load->library('form_validation');
            $this->form_validation->set_rules('log_name', 'Email', 'required|callback_user_check');
            $this->form_validation->set_rules('u_password', 'Password', 'trim|required|min_length[8]|alpha_numeric|callback_password_check');
            if($this->form_validation->run() == FALSE){
                $mdata = array();
                $mdata['emailpass'] = "Somthing Wrong User Name Or Password ! Plsease Check Again";
                $this->session->set_userdata($mdata);
                  redirect('Welcome/newAccount');
            }else{
                if($check){
                    $sdata = array();
                    $sdata['senior_id']= $check->owner_id;
                    $sdata['senior_name']= $check->owner_name;
                    $sdata['side']= $check->side;
                    $this->session->set_userdata($sdata);
                    $leveOnePin = $this->input->post('level_one_pin');
                    $uName = $this->input->post('u_name');
                    $dbresult = $this->W_Model->createNewAccountInfo();
                    $this->W_Model->usedLevelOnePin($leveOnePin,$uName);
                    redirect('Welcome/successful');
                    
                }else{
                    $data=array();
                    $data['pin_mess'] = "Your input PIN not correct !!! Please Enter a valid pin code";
                    $this->session->set_userdata($data);
                    redirect('Welcome/newAccount');
                }
            }

        //     if($check){
        //         $sdata = array();
        //         $sdata['senior_id']= $check->owner_id;
        //         $sdata['senior_name']= $check->owner_name;
        //         $this->session->set_userdata($sdata);
        //      $this->load->library('form_validation');
        //     $this->form_validation->set_rules('log_name', 'Email', 'required|callback_user_check');
        //     $this->form_validation->set_rules('u_password', 'Password', 'trim|required|min_length[8]|alpha_numeric|callback_password_check');
        //     if($this->form_validation->run() == FALSE){
        //         $mdata = array();
        //         $mdata['emailpass'] = "*Your Password must be 8 characters and 1 lower case letter [a-z] and 1 upper case letter [A-Z] and 1 numeric character [0-9]";
        //         $this->session->set_userdata($mdata);
        //          redirect('Welcome/newAccount');
        //     }else{
        //         $this->W_Model->createNewAccountInfo();
        //         $leveOnePin = $this->input->post('level_one_pin');
        //         $uName = $this->input->post('u_name');
        //         $this->W_Model->usedLevelOnePin($leveOnePin,$uName);
        //         redirect('Welcome/successful');
                
        //     }
            
        // } else {
        //     $data=array();
        //     $data['pin_mess'] = "Your input PIN not correct !!! Please Enter a valid pin code";
        //     $this->session->set_userdata($data);
        //     redirect('Welcome/newAccount');
        // }
        }
    }

    public function successful() {
        $data = array();
        $data['master'] = $this->load->view('signup/success', '', true);
        $this->load->view('signup/login', $data);
    }


}
