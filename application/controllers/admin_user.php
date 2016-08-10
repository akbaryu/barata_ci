<?php 

class Admin_user extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login_user"));
		}
	}

	function index(){
		redirect(base_url("dashboard_user"));
	}

}


