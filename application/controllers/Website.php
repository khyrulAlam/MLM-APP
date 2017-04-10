<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	public function index(){
		$data = array();
        $data['master'] = $this->load->view('index/home', '', true);
		$this->load->view('index/index',$data);
	}
	public function about(){
		$data = array();
        $data['master'] = $this->load->view('index/about', '', true);
		$this->load->view('index/index',$data);
	}
	public function terms(){
		$data = array();
        $data['master'] = $this->load->view('index/terms', '', true);
		$this->load->view('index/index',$data);
	}
	public function contact(){
		$data = array();
        $data['master'] = $this->load->view('index/contact', '', true);
		$this->load->view('index/index',$data);
	}


}