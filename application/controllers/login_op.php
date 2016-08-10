<?php 
 
class Login_op extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('model_login');
 
	}
 
	function index(){
		$this->load->view('login/index_op');
	}
 
	function aksi_login_op(){
		$username_op = $this->input->post('username_op');
		$password = $this->input->post('password');
		$where = array(
			'username_op' => $username_op,
			'password' => md5($password)
			);
		$cek = $this->model_login->cek_login("login_op",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username_op,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin_op"));
 
		}else{
			redirect(base_url("login_op"));
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login_user'));
	}

}