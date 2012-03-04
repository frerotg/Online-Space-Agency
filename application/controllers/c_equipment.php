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
class c_equipment extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('is_connect')){
            
            $this->load->model('m_user');
            $user_id = $this->session->userdata('id');
            $resources['resource'] = $this->m_user->getResources($user_id);
            $data['topbar'] = $this->load->view('template/topbar/user_interface_topbar', $resources, TRUE);
        
            $this->load->model('m_equipment');
            $equipments = $this->m_equipment->checkUnderConstruction($user_id);

            foreach ($equipments as $equipment) {
                if(now() >= $equipment->date_end_equipment){
                    $this->m_equipment->changeStatus($user_id, $equipment->id_equipment);
                }
            }
        }
        else{
            redirect('c_main/index');
        }
    }
    
    function index(){
        
        $this->load->model('m_equipment');
        $list['types'] = $this->m_equipment->listType();
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/equipment_index_content', $list, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);

        $this->load->view('layout',$data);
    }
    
    function typeList(){
        
        $user_id = $this->session->userdata('id');
        $type_id = $this->uri->segment(3);
        
        $this->load->model('m_equipment');
        $list['users_equipments'] = $this->m_equipment->listUserEquipment($user_id, $type_id);
        $list['users_buildings'] = $this->m_equipment->listUserBuilding($user_id, $type_id);
        $list['users_technologys'] = $this->m_equipment->listUserTechnology($user_id, $type_id);
        
        $list['list_equipment'] = array();
        $list['list_building'] = array();
        $list['list_technology'] = array();
        
        foreach ($list['users_equipments'] as $equipment){
            if($equipment->amount_equipment >= 1){
                $list['list_building'][] = $equipment->id_equipment;
            }
        }
        
        foreach ($list['users_buildings'] as $building){
            if($building->level_building >= 1){
                $list['list_building'][] = $building->id_building;
            }
        }
        
        foreach ($list['users_technologys'] as $technology){
            if($technology->level_technology>= 1){
                $list['list_technology'][] = $technology->id;
            }
        }
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/equipment_typeList_content', $list, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/equipment_script', '', TRUE);
        
        $this->load->view('layout',$data);
        
        
    }
    
    function build(){
        
        $this->load->model('m_equipment');
        $user_id = $this->session->userdata('id');
        $equipment_id = $this->uri->segment(3);
        
        $cout = $this->m_equipment->coutEquipment($equipment_id);
        
        $buildTime = $cout[0]->time_equipment;
        $reqMetal = $cout[0]->metal_equipment;
        $reqOxygene = $cout[0]->oxygene_equipment;
        $reqCarburant = $cout[0]->carburant_equipment;
        $reqArgent = $cout[0]->argent_equipment;
        
        $this->load->model('m_user');
        $resources = $this->m_user->getResources($user_id);

        if($reqMetal<=$resources->metal AND $reqOxygene<=$resources->oxygene AND $reqCarburant<=$resources->carburant AND $reqArgent<=$resources->argent){
            $this->m_equipment->buildEquipment($user_id, $equipment_id, $buildTime);
            redirect('c_main/index');
        }
        else{
            echo('Pas assez de ressources');
        }
        
    }
}

?>
