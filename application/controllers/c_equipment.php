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
            $this->load->model('m_message');
            $resources['message'] = count($this->m_message->getMessageNoRead($user_id));
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
        $data['script'] = $this->load->view('template/script/equipment_script', '', TRUE);

        $this->load->view('layout',$data);
    }
    
    function typeList(){
        $user_id = $this->session->userdata('id');
        $type_id = $this->uri->segment(3);
        
        $this->load->model('m_equipment');
        $this->load->model('m_building');
        $list['equipments'] = $this->m_equipment->listUserEquipment($user_id, $type_id);
        $user_buildings = $this->m_equipment->listUserBuildingAll($user_id);
        $user_technologys = $this->m_equipment->listUserTechnologyAll($user_id);
        $list['type'] = $this->m_equipment->getType($type_id);
        
        switch($list['type']->id_type_equipment){
        	case 1: $list['fabrique'] = $this->m_building->haveBuilding($user_id, 10);
        	break;
        	case 2: $list['fabrique'] = $this->m_building->haveBuilding($user_id, 11);
        	break;
        	case 3: $list['fabrique'] = $this->m_building->haveBuilding($user_id, 12);
        	break;
        	case 4: $list['fabrique'] = $this->m_building->haveBuilding($user_id, 13);
        	break;
        
        }
        
        
        
        foreach($user_buildings AS $user_building){
        	$list['user_buildings'][$user_building->id_building] = $user_building->level_building;
        }
        foreach($user_technologys AS $user_technology){
        	$list['user_technologys'][$user_technology->id_technology] = $user_technology->level_technology;
        }
        
        $underConstruction = $this->m_equipment->checkUnderConstruction($user_id);
        
        if(!empty($underConstruction)){
        	$list['underConstruction'] = 1;
        }
        else{
        	$list['underConstruction'] = 0;
        }
        
        $data['header'] = $this->load->view('template/header/user_interface_header', '', TRUE);
        $data['content'] = $this->load->view('template/content/equipment_typeList_content', $list, TRUE);
        $data['footer'] = $this->load->view('template/footer/user_interface_footer', '', TRUE);
        $data['script'] = $this->load->view('template/script/equipment_script', '', TRUE);
        
        $this->load->view('layout',$data);
        
    }
    
    function build(){
        
        $this->load->model('m_equipment');
        $this->load->model('m_building');
        
        $user_id = $this->session->userdata('id');
        $equipment_id = $this->uri->segment(3);
        
        $cout = $this->m_equipment->coutEquipment($equipment_id);
        
        switch($cout[0]->id_type_equipment){
        	case 1: $fabrique = $this->m_building->haveBuilding($user_id, 10);
        	break;
        	case 2: $fabrique = $this->m_building->haveBuilding($user_id, 11);
        	break;
        	case 3: $fabrique = $this->m_building->haveBuilding($user_id, 12);
        	break;
        	case 4: $fabrique = $this->m_building->haveBuilding($user_id, 13);
        	break;
        
        }
        
        $buildTime = ($cout[0]->time_equipment - (((sqrt($fabrique->level_building)*5)/100)*$cout[0]->time_equipment));
        $reqMetal = $cout[0]->metal_equipment;
        $reqOxygene = $cout[0]->oxygene_equipment;
        $reqCarburant = $cout[0]->carburant_equipment;
        $reqArgent = $cout[0]->argent_equipment;
        
        $this->load->model('m_user');
        $resources = $this->m_user->getResources($user_id);

        if($reqMetal<=$resources->metal AND $reqOxygene<=$resources->oxygene AND $reqCarburant<=$resources->carburant AND $reqArgent<=$resources->argent){
            $this->m_equipment->buildEquipment($user_id, $equipment_id, $buildTime);
            
            $endMetal = ($resources->metal) - $reqMetal;
            $this->m_user->updateResource($user_id, 'metal', $endMetal);
            
            $endOxygene = ($resources->oxygene) - $reqOxygene;
            $this->m_user->updateResource($user_id, 'oxygene', $endOxygene);
            
            $endCarburant = ($resources->carburant) - $reqCarburant;
            $this->m_user->updateResource($user_id, 'carburant', $endCarburant);
            
            $endArgent = ($resources->argent) - $reqArgent;
            $this->m_user->updateResource($user_id, 'argent', $endArgent);

            
            $status = 'success';
            $message = 'La construction de l\'equipement à débuté';
        }
        else{
            $status = 'error';
            $message = 'Pas assez de ressource pour cet équipement';
        }
        
        $data = array('status'=>$status, 'time'=>$buildTime, 'message'=>$message);
        echo json_encode($data);
        
    }
}

?>
