<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model(array('model_config'));
    }
    
	function index(){
        $this->load->helper('form');
		$data['record']= $this->model_config->select_all()->result();
		$this->template->views('config/data', $data);
	}
    
   function delet(){
        $id_config = $this->uri->segment(3);
        $this->model_config->delete($id_config);
         redirect('config');
   }

    function update($id) {
        $this->load->helper('form');
        if($this->input->post('submit')){
            $this->model_config->update($id);
            redirect('config');
        }
        $data['hasil'] = $this->model_config->getById($id);
        $this->template->views('config/update', $data);
 
    }

   function insert(){
        $data['record']= $this ->model_config->select_all()->result();
        $this->template->views('config/insert', $data);
    }

    function insert_act(){
        $id_config = $this->input->post('id_config');
        $config_type = $this->input->post('config_type');
        $config_value = $this->input->post('config_value');
        
        $data = array(
            'id_config' => $id_config,
            'config_type' => $config_type,
            'config_value' => $config_value);
        $this->model_config->insert($data,'config_new');
        redirect('config');
    }

}

/* End of file config.php */
/* Location: ./application/controllers/config.php */
