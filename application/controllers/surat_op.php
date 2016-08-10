<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class surat_op extends CI_Controller {
   
   public function __construct() {
      parent::__construct();
      $this->load->model('model_surat');
      $this->load->library(array('pagination','form_validation','upload'));
   }
   
   public function index() {
      $query = $this->model_surat->daftar_gambar();
      $data=array('title'=>'-------------Konfirmasi Surat',
               'gambar' => $query,
               'isi'  =>'surat_op/gambar_view'
                  );
         $this->template_op->views('surat_op/gambar_view',$data);  
   } 

   function delete($id) {
      $this->model_surat->delete_gambar($id);
      redirect(base_url().'surat_op');
   }
}