<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Template {

    protected $_ci;

    function __construct() {
        $this->_ci = &get_instance();
    }

    function views($template=NULL, $data = NULL) {
        if($template!=NULL)
        $data['_content'] = $this->_ci->load->view($template, $data, TRUE);
        $data['_sidemenu'] = $this->_ci->load->view('template/sidemenu', $data, TRUE);
        //$data['_footer'] = $this->_ci->load->view('frontend/footer', $data, TRUE);
        $data['_profile'] = $this->_ci->load->view('template/profile', $data, TRUE);
        $data['_template'] = $this->_ci->load->view('template/template', $data);
    } 

}

?>
