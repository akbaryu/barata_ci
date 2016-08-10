<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class surat extends CI_Controller {
   
   public function __construct() {
      parent::__construct();
      $this->load->model('model_surat');
      $this->load->library(array('pagination','form_validation','upload'));
   }
   
   public function index() {
      $query = $this->model_surat->daftar_gambar();
      $data=array('title'=>'-------------Kelola Surat',
               'gambar' => $query,
               'isi'  =>'surat/gamabr/gambar_view'
                  );
         $this->template->views('surat/gambar/gambar_view',$data);  
   } 
   // Controler tambah gambar di sini
   public function tambah() {
   $this->form_validation->set_rules('name', 'Name', 'required');
   if($this->form_validation->run()==true){
               //setting konfigurasi upload image
              $config['upload_path']    = './assets/uploads/wk/';
               $config['allowed_types'] = 'gif|jpg|png';
               $config['max_size']      = '10000';
               $config['max_width']     = '2000';
               $config['max_height']    = '1024';

               $this->upload->initialize($config);
                if(!$this->upload->do_upload('thumb_img')){
                    $gambar="";
                }else{
                    $gambar=$this->upload->file_name;
                }
                
      $data = array(
               'name'         => $this->input->post('name'),
               'ket'    => $this->input->post('ket'),
               'thumb_img'    => $gambar,
               'full_img'     => $gambar
            );
      $this->model_surat->tambah($data);
      redirect(base_url().'surat');
   }else{
      $this->template->views('surat/gambar/tambah_gambar');      
   }
   }
   
   // Menampilkan halaman edit
   public function edit($id) {   
   $this->form_validation->set_rules('name', 'Name', 'required');
      if ($this->form_validation->run() ==true) {
               $config['upload_path'] = './assets/uploads/wk/';
               $config['allowed_types'] = 'gif|jpg|png';
               $config['max_size'] = '10000';
               $config['max_width']  = '2000';
               $config['max_height']  = '1024';

               $this->upload->initialize($config);
                if(!$this->upload->do_upload('thumb_img')){
                    $gambar="";
                }else{
                    $gambar=$this->upload->file_name;
                }
         $data = array(
               'id'           => $this->input->post('id'),
               'name'         => $this->input->post('name'),
               'ket'    => $this->input->post('ket'),
               'thumb_img'    => $gambar,
               'full_img'     => $gambar
            );
         $this->model_surat->edit_gambar($data);
         redirect(base_url().'surat');
      // Kalau tidak ada error gambar diupdate
      }else{
         $data['gambar']   = $this->model_surat->detail_gambar();
         $data['detail']   = $this->model_surat->detail_gambar($id);
         $data=array('title'     => 'Mengubah gambar: '.$data['detail']['name'],
               'gambar'          => $this->model_surat->detail_gambar(),
               'detail'          => $this->model_surat->detail_gambar($id),
               'isi'             =>'surat/gambar/edit_gambar'
                  );
         $this->template->views('surat/gambar/edit_gambar',$data);  
       
      }
   }
   
   // Menghapus gambar
   function delete($id) {
      $this->model_surat->delete_gambar($id);
      redirect(base_url().'surat');
   }
}