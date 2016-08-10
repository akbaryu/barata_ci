<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Template_op {

    protected $_ci;

    function __construct() {
        $this->_ci = &get_instance();
    }

    function views($template_op=NULL, $data = NULL) {
        if($template_op!=NULL)
        $data['_content'] = $this->_ci->load->view($template_op, $data, TRUE);
        $data['_sidemenu'] = $this->_ci->load->view('template_op/sidemenu', $data, TRUE);
        //$data['_footer'] = $this->_ci->load->view('frontend/footer', $data, TRUE);
        $data['_profile'] = $this->_ci->load->view('template_op/profile', $data, TRUE);
        $data['_template'] = $this->_ci->load->view('template_op/template', $data);
    } 

}

?>
