<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class template_user {

    protected $_ci;

    function __construct() {
        $this->_ci = &get_instance();
    }

    function views($template_user=NULL, $data = NULL) {
        if($template_user!=NULL)
        $data['_content'] = $this->_ci->load->view($template_user, $data, TRUE);
        $data['_sidemenu'] = $this->_ci->load->view('template_user/sidemenu', $data, TRUE);
        //$data['_footer'] = $this->_ci->load->view('frontend/footer', $data, TRUE);
        $data['_profile'] = $this->_ci->load->view('template_user/profile', $data, TRUE);
        $data['_template'] = $this->_ci->load->view('template_user/template', $data);
    } 

}

?>
