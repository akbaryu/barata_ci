<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_user extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		 parent::__construct();
      	$this->load->model('model_surat');
      $this->load->library(array('pagination','form_validation','upload'));
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index(){
	      $query = $this->model_surat->daftar_gambar();
      		$data=array('title'=>'Surat',
               'gambar' => $query,
               'isi'  =>'surat_user/gambar_view'
                  );
         $this->template_user->views('surat_user/gambar_view',$data);  
   } 
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */