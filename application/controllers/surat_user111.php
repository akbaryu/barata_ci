<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class surat_op extends CI_Controller {
   
   public function __construct() {
      parent::__construct();
      $this->load->model('model_surat');
      $this->load->library(array('pagination','form_validation','upload'));
   }
   
   public function index() {
      $query = $this->model_surat->konfirmasi();
      $data=array('title'=>'-------------Lihat Surat',
               'gambar' => $query,
               'isi'  =>'surat_user/gambar_view'
                  );
         $this->template_op->views('surat_user/gambar_view',$data);  
   } 
  
}