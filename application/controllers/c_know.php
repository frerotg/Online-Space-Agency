<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of c_building
 *
 * @author greenpix
 */
class c_know extends CI_Controller {
    
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('is_connect')){
            
            $this->load->model('m_user');
            $user_id = $this->session->userdata('id');
            $resources['resource'] = $this->m_user->getResources($user_id);
            $this->load->model('m_message');
            $resources['message'] = count($this->m_message->getMessageNoRead($user_id));
            $data['topbar'] = $this->load->view('template/topbar/user_interface_topbar', $resources, TRUE);
            /*
            $this->load->model('m_building');
            $buildings = $this->m_building->checkUnderConstruction($user_id);

            foreach ($buildings as $building) {
                if(now() >= $building->date_end_building){
                	$this->load->model('m_message');
                	
                	$this->m_message->addAlert($user_id, 'Bâtiment construit', 'Votre bâtiment "'.$building->name_building.'" à été construit avec succès !');
                    $this->m_building->changeStatus($user_id, $building->id_building);
                }
            }*/
        }
        else{
            redirect('c_main/index');
        }
    }
    
    function index(){
        
        $this->load->model('m_know');
        $list['types'] = $this->m_know->listType();
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/know_index_content', $list, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);

        $this->load->view('layout',$data);
    }
    
    function listUserKnow(){
    	$this->load->model('m_know');
    	$id_user = $this->session->userdata('id');
    	$id_type_know = $this->uri->segment(3);
    	
    	$foo['knows'] = $this->m_know->listUserKnow($id_user, $id_type_know);
    	
    	$data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/know_typeList_content', $foo, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);

        $this->load->view('layout',$data);
        
    }
    
    function testCron(){
    
    	$this->load->model('m_know');
    	$this->m_know->test();
    	
    }
}
