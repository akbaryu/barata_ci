<?php 
 
class login_user extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_login');
 
	}
 
	function index(){
		$this->load->view('login/index_user');
	}
 
	function aksi_login_user(){
		$username_user = $this->input->post('username_user');
		$password = $this->input->post('password');
		$where = array(
			'username_user' => $username_user,
			'password' => md5($password)
			);
		$cek = $this->model_login->cek_login("login_user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username_user,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin_user"));
 
		}else{
			redirect(base_url("login_user"));
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login_user'));
	}

}