<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_config extends CI_Model {


	function select_all(){
        $query="SELECT * FROM config_new";
        return $this->db->query($query);
    }

	function tampil(){
		$sql = $this->db->query("select * from config");
		return $sql;
	}


    function insert($data,$table){
        $this->db->insert($table,$data);
    }


    function update($id) {
        $config_type  = $this->input->post('config_type');
        $config_value = $this->input->post('config_value');
        $data = array (
            'config_type' => $config_type,
            'config_value'  => $config_value
        );
        $this->db->where('id_config', $id);
        $this->db->update('config_new', $data);
    }

	function delete($id_config){
 		$this->db->where('id_config', $id_config);
		$this->db->delete('config_new');
	}

    function getById($id) {
        return $this->db->get_where('config_new', array('id_config' => $id))->row();
    }


}
