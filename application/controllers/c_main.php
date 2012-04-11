<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Controlleur principal pour l'affichage de la page d'acceuil
 *
 * @author Grégory Frerot
 */
class c_main extends CI_Controller {
    
    function index(){

        if(!$this->session->userdata('is_connect')){
            $form_data['error'] = $this->session->flashdata('error')?$this->session->flashdata('error'):FALSE;
            
            $data['content'] = $this->load->view('template/content/main_content', $form_data, TRUE);
            
            $this->load->view('layout_home',$data);
        }
        else{
            redirect('c_user/user_interface');
        }
    }
}

?>
